<?php
namespace CRM\Lib\Docflow\Api\Diadoc;

use CRM\Lib\Docflow\ClientInterface;
use CRM\Lib\Docflow\Api\Diadoc\Model as Model;
use CRM\Lib\Docflow\DocumentComparator;
use CRM\Lib\Docflow\Model\Torg12;
use CRM\Lib\Docflow\Model\Document;

class ClientAdapter extends Client implements ClientInterface
{
    const DOCUMENT_TYPE_TORG_12 = 'CRM\Lib\Docflow\Model\Torg12';
    const DOCUMENT_TYPE_ACT = 'CRM\Lib\Docflow\Model\Act';

    protected static $documentTypeMap = array(
        Document::Torg12        => self::DOCUMENT_TYPE_TORG_12,
        Document::Torg13        => self::DOCUMENT_TYPE_TORG_12,
        Document::XmlTorg12     => self::DOCUMENT_TYPE_TORG_12,
        Document::Nonformalized => self::DOCUMENT_TYPE_ACT
    );

    /**
     * Поиск документа по номеру
     * @TODO Разобраться с поиском по ключ:значение
     *
     * @param string $number
     * @param int    $scope
     * @return Document|null
     */
    public function getDocumentByNumber($number, $scope = Model\SearchScope::SearchScopeAny)
    {
        $docflows = $this->searchDocflows(
            $this->getBoxId(),
            $number,
            $scope
        );

        $doc = new Torg12(); // Создаем документ всегда, такое требование PM
        /** @var $docflows Model\SearchDocflowsResponse */
        // Есть ли документы?
        if ($docflows->getDocumentsCount() == 0) {
            $doc->setStatusId(Document::STATUS_NOT_FOUND);
            $doc->getAct()->setStatusId(Document::STATUS_NOT_FOUND);
            return $doc;
        }

        $docs = array();
        /** @var Model\Docflow\DocumentWithDocflow $document */
        foreach ($docflows->getDocuments() as $document) {
            $docNumber = null;
            $docDate   = null;
            if ($docDateNumber = $document->getDocumentInfo()->getDocumentDateAndNumber()) {
                $docNumber = $docDateNumber->getDocumentNumber();
                $docDate   = $docDateNumber->getDocumentDate();
            }

            $docType = $document->getDocumentInfo()->getDocumentType();
            if (!empty($docNumber) && $docNumber != $number || !isset(self::$documentTypeMap[$docType])) {
                continue;
            }

            $className = self::$documentTypeMap[$docType];
            /** @var Document $newDoc */
            $newDoc = new $className();
            $newDoc->setId(
                sprintf('%s_%s', $document->getDocumentId()->getMessageId(), $document->getDocumentId()->getEntityId())
            );

            $newDoc->setUrl(Helper::documentUri($this->getBoxId(), $document->getDocumentId()));
            $newDoc->setUpdatedAt(Helper::timestampToDateTime($document->getLastEventTimestamp()));
            $newDoc->setNumber($docNumber);
            $newDoc->setDate($docDate);

            $newDoc->setTypeId($docType);
            if ($docflow = $document->getDocflow()) {
                if ($docflow->getSendTimestamp()) {
                    $newDoc->setSentAt(
                        Helper::timestampToDateTime($docflow->getSendTimestamp())
                    );
                }

                // Маппинг статусов
                if ($bilateralDocflow = $docflow->getBilateralDocflow()) {
                    if ($bilateralDocflow->getIsDocumentRejectedByRecipient() && $bilateralDocflow->getIsFinished()
                    ) {
                        $newDoc->setStatusId(Document::STATUS_REJECTED);
                    } elseif ($bilateralDocflow->getIsDocumentSignedByRecipient() && $bilateralDocflow->getIsFinished()
                    ) {
                        $newDoc->setStatusId(Document::STATUS_SIGNED);
                        if ($recipientSignatureDocflow = $bilateralDocflow->getRecipientSignatureDocflow()) {
                            $newDoc->setSignedAt(
                                Helper::timestampToDateTime($recipientSignatureDocflow->getDeliveryTimestamp())
                            );
                        }
                    } elseif (!$bilateralDocflow->getCanDocumentBeSignedBySender(
                        ) && $bilateralDocflow->getCanDocumentBeSignedOrRejectedByRecipient()

                    ) {
                        $newDoc->setStatusId(Document::STATUS_SENT);
                    } elseif ($bilateralDocflow->getCanDocumentBeSignedBySender()
                        && $bilateralDocflow->getCanDocumentBeSignedOrRejectedByRecipient()
                    ) {
                        $newDoc->setStatusId(Document::STATUS_NOT_SENT);
                    }
                }

                // Проверка на аннулирование документа
                $isRevocationCompleted = ($revocationDocflow = $docflow->getRevocationDocflow())
                    && $revocationDocflow->getIsFinished()
                    && $revocationDocflow->getIsRevocationAccepted();
                if ($isRevocationCompleted) {
                    unset($newDoc);
                    continue;
                }

                // Анализируем название документа на предмет Акта к накладной
                $docTitle = $docflow->getDocumentAttachment()->getAttachment()->getDisplayFilename();
                if (empty($docNumber) && !Helper::isActOfDocument($docTitle, $number)) {
                    unset($newDoc);
                    continue;
                }
                $newDoc->setTitle($docTitle);
                $newDoc->setPacketId($docflow->getPacketId());
                $newDoc->setCreatedAt(
                    Helper::timestampToDateTime(
                        $docflow->getDocumentAttachment()->getAttachment()->getEntity()->getCreationTimestamp()
                    )
                );
            } else {
                // нет документооборота
                continue;
            }

            if (!array_key_exists(self::$documentTypeMap[$docType], $docs)) {
                $docs[self::$documentTypeMap[$docType]] = array();
            }
            $docs[self::$documentTypeMap[$docType]][] = $newDoc;
        }

        if ($docs) {
            foreach ($docs as $type => &$docsByType) {
                usort($docsByType, ['CRM\Lib\Docflow\Model\DocumentComparator', 'compare']);
                if ($type == self::DOCUMENT_TYPE_TORG_12) {
                    $doc = reset($docsByType);
                }
            }
            if (isset($docs[self::DOCUMENT_TYPE_ACT])) {
                $doc->setAct(reset($docs[self::DOCUMENT_TYPE_ACT]));
            } else {
                $doc->getAct()->setStatusId(Document::STATUS_NOT_FOUND);
            }
        }

        return $doc;
    }

    /**
     * Получение пакета документов по идентификатору пакета
     *
     * @param $id
     * @return Model\GetDocflowsByPacketIdResponse
     */
    public function getPacketById($id)
    {
        $docflows = $this->getDocflowsByPacketId($this->getBoxId(), $id);
        return $docflows;
    }

    /**
     * Получение документа по идентификатору
     *
     * @param $id
     * @return Model\Document
     */
    public function getDocumentById($id)
    {
        $doc = new Torg12();
        list($messageId, $entityId) = explode('_', $id, 2);
        if (!$messageId || !$entityId) {
            return $doc;
        }
        $document = $this->getDocument($this->getBoxId(), $messageId, $entityId);

        $docNumber = $document->getDocumentNumber();
        $docDate   = $document->getDocumentDate();
        $docType   = $document->getDocumentType();
        if (!isset(self::$documentTypeMap[$docType])) {
            return $doc;
        }

        $className = self::$documentTypeMap[$docType];
        /** @var Document $newDoc */
        $newDoc = new $className();
        $newDoc->setId(
            sprintf('%s_%s', $document->getMessageId(), $document->getEntityId())
        );

        $documentId = new Model\DocumentId();
        $documentId->setEntityId($document->getEntityId());
        $documentId->setMessageId($document->getMessageId());
        $newDoc->setUrl(Helper::documentUri($this->getBoxId(), $documentId));
        $newDoc->setNumber($docNumber);
        $newDoc->setDate($docDate);

        $newDoc->setTypeId($docType);

        return $newDoc;
    }

    /**
     * Загрузка и подписывание документа
     *
     * @param        $path
     * @param string $fileName
     * @return string
     * @throws \Exception
     */
    public function signDocument($path, $fileName = '')
    {
        if (!file_exists($path)) {
            throw new \Exception('File not found');
        }

        // Если имени файла нет, то берем имя из переданного пути
        if (!$fileName) {
            $fileName  = Helper::getFileNameFromPath($path);
        }
        if (!($data = file_get_contents($path))) {
            throw new \Exception('Error reading file');
        }
        $signResult = $this->cloudSign($fileName, $data);

        return $signResult->getTaskId();
    }

    /**
     * Проверка результата подписи документа
     *
     * @param $taskId
     * @return bool|string
     */
    public function checkSignDocument($taskId)
    {
        if (!($signResult = $this->cloudSignResult($taskId))) {
            return false;
        }

        return $signResult->getToken();
    }

    /**
     * Подтверждение подписи документа
     *
     * @param $taskId
     * @param $code
     * @return bool|string
     * @throws \Exception
     */
    public function confirmSignDocument($taskId, $code)
    {
        return $this->cloudSignConfirm($taskId, $code);
    }

    /**
     * Проверка подтверждения подписи документа
     *
     * @param $taskId
     * @return bool
     */
    public function checkConfirmSignDocument($taskId)
    {
        return $this->cloudSignConfirmResult($taskId);
    }
}

/*============================================================================*
 *  END OF ClientAdapter                                                      *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/