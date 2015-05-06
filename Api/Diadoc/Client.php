<?php

namespace CRM\Lib\Docflow\Api\Diadoc;

use CRM\Lib\Docflow\Api\Diadoc\Model as Model;
use CRM\Lib\Docflow\Model as OutputModel;

/**
 * Клиент к документооброту Diadoc - http://www.diadoc.ru
 * Wiki - https://github.com/skbkontur/diadocsdk/wiki
 *
 * Генерация моделей с помощью утилиты из директории с .proto моделями:
 * php ../../../../Utils/Protobuf/protoc-php.php -n --psr -i CRM.Lib.Docflow.Api.Diadoc SearchDocflowsResponse.proto
 *
 * @package Docflow
 * @subpackage Api\Diadoc
 * @category
 * @since  11.03.2015 11:22
 * @author kgorbich
 **/
class Client {

    const CACHE_TOKEN_KEY = 'diadoc_token';

    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    const RESOURCE_AUTHENTICATE = '/Authenticate';
    const RESOURCE_DOCUMENTS = '/V3/GetDocuments';
    const RESOURCE_DOCUMENT = '/V3/GetDocument';
    const RESOURCE_SEARCHDOCFLOWS = '/SearchDocflows';
    const RESOURCE_BOX = '/GetBox';
    const RESOURCE_COUNTERAGENTS = '/GetCounteragents';
    const RESOURCE_COUNTERAGENT = '/GetCounteragent';
    const RESOURCE_DOCFLOWS = '/GetDocflows';
    const RESOURCE_DOCFLOWSBYPACKETID = '/GetDocflowsByPacketId';
    const RESOURCE_DOCFLOWEVENTS = '/GetDocflowEvents';

    const RESOURCE_CLOUDSIGN = '/CloudSign';
    const RESOURCE_CLOUDSIGNRESULT = '/CloudSignResult';
    const RESOURCE_CLOUDSIGNCONFIRM = '/CloudSignConfirm';
    const RESOURCE_CLOUDSIGNCONFIRMRESULT = '/CloudSignConfirmResult';

    const RESOURCE_SHELFUPLOAD = '/ShelfUpload';
    const RESOURCE_FORWARDDOCUMENT = '/ForwardDocument';

    const SORT_ASC = 'Ascending';
    const SORT_DESC = 'Descending';

    private $config;
    /** @var string */
    private $token;

    function __construct($config)
    {
        $this->config = array_merge(array(
             'curl_options' => array(),
         ), $config);
    }

    /**
     * Авторизация в Diadoc
     *
     * @throws Exception
     */
    public function authenticate()
    {
        $response = $this->doRequest(
            self::RESOURCE_AUTHENTICATE,
            array(
                'login'     => $this->config['login'],
                'password'  => $this->config['password']
            ),
            self::METHOD_POST
        );
        $this->setToken($response);
    }

    /**
     * @param $token
     */
    private function setToken($token)
    {
        \Cache::save($token, self::CACHE_TOKEN_KEY, array(), 600);
        $this->token = $token;
    }

    /**
     * Авторизацонный Token
     * @return string
     */
    protected function getToken()
    {
        if ($token = \Cache::load(self::CACHE_TOKEN_KEY)) {
            return $token;
        }
        return $this->token;
    }

    /**
     * @return string
     */
    protected function getBoxId()
    {
        return $this->config['boxId'];
    }

    /**
     * Информация о ящике
     *
     * @param string $boxId - идентификатор ящика
     * @return Model\Box
     * @throws Exception
     */
    public function getBox($boxId)
    {
        $response = $this->doRequest(
            self::RESOURCE_BOX,
            array(
                'boxId'     => $boxId
            )
        );

        $box = new Model\Box();
        $box->parseFromString($response);

        return $box;
    }

    /**
     * Список контрагентов организации
     *
     * @param string $myOrgId -  идентификатор организации
     * @param string $counteragentStatus - статус
     * @param string $afterIndexKey - уникальный ключ, позволяющий итерироваться по всему списку контрагентов
     * @return Model\CounteragentList
     * @throws Exception
     */
    public function getCounteragents($myOrgId, $counteragentStatus = null, $afterIndexKey = null)
    {
        $response = $this->doRequest(
            self::RESOURCE_COUNTERAGENTS,
            array(
                'myOrgId'            => $myOrgId,
                'counteragentStatus' => $counteragentStatus,
                'afterIndexKey'      => $afterIndexKey
            )
        );

        $counteragentList = new Model\CounteragentList();
        $counteragentList->parseFromString($response);

        return $counteragentList;
    }

    /**
     * Информация о контрагенте с идентификатором counteragentOrgId для организации myOrgId
     *
     * @param string $myOrgId - идентификатор организации
     * @param string $counteragentOrgId - идентификатор организации-контрагента
     * @return Model\Counteragent
     * @throws Exception
     */
    public function getCounteragent($myOrgId, $counteragentOrgId)
    {
        $response = $this->doRequest(
            self::RESOURCE_COUNTERAGENT,
            array(
                'myOrgId'            => $myOrgId,
                'counteragentOrgId'  => $counteragentOrgId
            )
        );

        $counteragent = new Model\Counteragent();
        $counteragent->parseFromString($response);

        return $counteragent;
    }

    /**
     * Получение документа по его идентификатору
     *
     * @param string $boxId - идентификатор ящика
     * @param string $messageId - идентификатор сообщения, содержащего искомый документ
     * @param string $entityId - идентификатор сущности типа LetterAttachment внутри сообщения messageId, представляющей искомый документ
     * @return Model\Document
     * @throws Exception
     */
    public function getDocument($boxId, $messageId, $entityId)
    {
        $response = $this->doRequest(
            self::RESOURCE_DOCUMENT,
            array(
                'boxId'     => $boxId,
                'messageId' => $messageId,
                'entityId'  => $entityId
            )
        );

        $document = new Model\Document();
        $document->parseFromString($response);

        return $document;
    }

    /**
     * Получение коллекции документов отфильтрованных по входным параметрам
     *
     * @param string          $boxId - идентификатор ящика
     * @param string          $filterCategory - статус документов
     * @param string          $counteragentBoxId - идентификатор ящика контрагента
     * @param string          $toDepartmentId - идентификатор подразделения получателя
     * @param Model\Timestamp $timestampFromTicks - метка времени, задающая начальную точку периода
     * @param Model\Timestamp $timestampToTicks - метка времени, задающая конечную точку периода
     * @param \DateTime       $fromDocumentDate - дата документа, задающая начальную точку периода
     * @param \DateTime       $toDocumentDate - дата документа, задающая конечную точку периода
     * @param string          $departmentId - идентификатор подразделения
     * @param null            $excludeSubdepartments - исключить из выборки дочерние подразделения
     * @param string          $afterIndexKey - уникальный ключ документа
     * @param string          $sortDirection - порядок сортировки документов в выдаче
     * @return Model\DocumentList
     * @throws Exception
     */
    public function getDocuments(
        $boxId,
        $filterCategory = 'Any.Internal',
        $counteragentBoxId = null,
        $toDepartmentId = null,
        Model\Timestamp $timestampFromTicks = null,
        Model\Timestamp $timestampToTicks = null,
        \DateTime $fromDocumentDate = null,
        \DateTime $toDocumentDate = null,
        $departmentId = null,
        $excludeSubdepartments = null,
        $afterIndexKey = null,
        $sortDirection = self::SORT_ASC
    )
    {
        $response = $this->doRequest(
            self::RESOURCE_DOCUMENTS,
            array(
                'boxId'                 => $boxId,
                'filterCategory'        => $filterCategory,
                'counteragentBoxId'     => $counteragentBoxId,
                'toDepartmentId'        => $toDepartmentId,
                'timestampFromTicks'    => $timestampFromTicks,
                'timestampToTicks'      => $timestampToTicks,
                'fromDocumentDate'      => $fromDocumentDate ? $fromDocumentDate->format('d.m.Y') : null,
                'toDocumentDate'        => $toDocumentDate ? $toDocumentDate->format('d.m.Y') : null,
                'departmentId'          => $departmentId,
                'excludeSubdepartments' => $excludeSubdepartments,
                'afterIndexKey'         => $afterIndexKey,
                'sortDirection'         => $sortDirection
            )
        );

        $documentList = new Model\DocumentList();
        $documentList->parseFromString($response);

        return $documentList;
    }

    /**
     * Метод позволяет искать документы по произвольной строке запроса.
     * Строка разбивается на токены по пробелам и разделительным символам, и в выдачу попадают те документы,
     * у которых хотя бы один из полученных токенов содержится в номере, дате, имени файла или других данных.
     *
     * Строка запроса может иметь специальный вид "ключ: значение",
     * в этом случае ее разбор на сервере происходит в соответствии с форматом YAML.
     *
     * @param string                      $boxId - идентификатор ящика
     * @param string                      $queryString - произвольная поисковая строка
     * @param int                         $scope - область поиска
     * @param int                         $limit - лимит выдачи документов (max = 100, default = 100)
     * @param int                         $offset - сдвиг по индексу документов
     * @param bool                        $withContent - признак того, что в выдачу нужно включать содержимое документов
     * @return Model\SearchDocflowsResponse
     * @throws Exception
     */
    public function searchDocflows($boxId, $queryString, $scope = Model\SearchScope::SearchScopeAny, $limit = 100, $offset = 0, $withContent = false)
    {
        $request = new Model\SearchDocflowsRequest();
        $request->setQueryString($queryString);
        $request->setScope($scope);
        $request->setCount($limit);
        $request->setFirstIndex($offset);
        $request->setInjectEntityContent($withContent);

        $response = $this->doRequest(
            self::RESOURCE_SEARCHDOCFLOWS,
            array(
                'boxId' => $boxId
            ),
            self::METHOD_POST,
            $request->serializeToString()
        );

        $searchDocflowsResponse = new Model\SearchDocflowsResponse();
        $searchDocflowsResponse->parseFromString($response);

        return $searchDocflowsResponse;
    }

    /**
     * Возвращает список документов по их идентификаторам
     *
     * @param string     $boxId - идентификатор ящика
     * @param string     $messageId - идентификатор сообщения, содержащего документ
     * @param string     $entityId - идентификатор сущности документа внутри сообщения
     * @param string     $lastEventId - идентификатор последнего события, которое нужно учесть при формировании результата
     * @param bool       $injectEntityContent - признак того, что в выдачу нужно включить содержимое документа.
     * @return Model\GetDocflowBatchResponse
     * @throws Exception
     */
    public function getDocflows($boxId, $messageId, $entityId, $lastEventId = null, $injectEntityContent = false)
    {
        // Идентификатор документа
        $documentId = new Model\DocumentId();
        $documentId->setMessageId($messageId);
        $documentId->setEntityId($entityId);

        // Запрос документа
        $request = new Model\GetDocflowRequest();
        $request->setDocumentId($documentId);
        $request->setLastEventId($lastEventId);
        $request->setInjectEntityContent($injectEntityContent);

        // Пачка запросов документа
        $requestBatch = new Model\GetDocflowBatchRequest();
        $requestBatch->appendRequests($request);

        $response = $this->doRequest(
            self::RESOURCE_DOCFLOWS,
            array(
                'boxId' => $boxId
            ),
            self::METHOD_POST,
            $requestBatch->serializeToString()
        );

        $docflowBatchResponse = new Model\GetDocflowBatchResponse();
        $docflowBatchResponse->parseFromString($response);

        return $docflowBatchResponse;
    }

    /**
     * Возвращает список документов, находящихся в указанном пакете.
     *
     * @param string     $boxId
     * @param string     $PacketId
     * @param int        $limit
     * @param bool       $injectEntityContent
     * @param bytes      $afterIndexKey
     * @return Model\GetDocflowsByPacketIdResponse
     * @throws Exception
     */
    public function getDocflowsByPacketId($boxId, $PacketId, $limit = 100, $injectEntityContent = false, $afterIndexKey = null)
    {
        $request = new Model\GetDocflowsByPacketIdRequest();
        $request->setPacketId($PacketId);
        $request->setCount($limit);
        $request->setInjectEntityContent($injectEntityContent);
        $request->setAfterIndexKey($afterIndexKey);

        $response = $this->doRequest(
            self::RESOURCE_DOCFLOWSBYPACKETID,
            array(
                'boxId' => $boxId
            ),
            self::METHOD_POST,
            $request->serializeToString()
        );

        $docflowsByPacketIdResponse = new Model\GetDocflowsByPacketIdResponse();
        $docflowsByPacketIdResponse->parseFromString($response);

        return $docflowsByPacketIdResponse;
    }

    /**
     * Загрузка и запуск механизма подписи документа облачной подписью
     *
     * @param      $fileName - название файла подписываемого документа
     * @param      $file - сериализованный в двоичный массив файл
     * @param null $certificateThumbprint - отпечаток сертификата, которым нужно подписать документ (иначе берется сертификат по-умолчанию)
     * @return Model\AsyncMethodResult
     * @throws Exception
     */
    protected function cloudSign($fileName, $file, $certificateThumbprint = null)
    {
        $newContentV2 = new Model\ContentV2();
        $newContentV2->setContent($file);

        $newSignFile = new Model\CloudSignFile();
        $newSignFile->setContent($newContentV2);
        $newSignFile->setFileName($fileName);

        $request = new Model\CloudSignRequest();
        $request->appendFiles($newSignFile);

        $response = $this->doRequest(
            self::RESOURCE_CLOUDSIGN,
            array(
                'certificateThumbprint' => $certificateThumbprint
            ),
            self::METHOD_POST,
            $request->serializeToString()
        );

        $asyncMethodResult = new Model\AsyncMethodResult();
        $asyncMethodResult->parseFromString($response);

        return $asyncMethodResult;
    }

    /**
     * Получение результата подписывания документа
     *
     * @param $taskId - идентификатор задания на подпись документа
     * @return bool|Model\CloudSignResult
     * @throws Exception
     */
    protected function cloudSignResult($taskId)
    {
        $response = $this->doRequest(
            self::RESOURCE_CLOUDSIGNRESULT,
            array(
                'taskId' => $taskId
            ),
            self::METHOD_GET
        );

        if ($response) {
            $cloudSignResult = new Model\CloudSignResult();
            $cloudSignResult->parseFromString($response);

            return $cloudSignResult;
        }

        return false;
    }

    /**
     * Запуск процесса подтверждения подписи документа
     *
     * @param $token
     * @param $code
     * @return bool|string
     * @throws Exception
     * @throws \Exception
     */
    public function cloudSignConfirm($token, $code)
    {
        try {
            $response = $this->doRequest(
                self::RESOURCE_CLOUDSIGNCONFIRM,
                array(
                    'token' => $token,
                    'code'  => $code
                ),
                self::METHOD_POST
            );
        }
        catch(Exception $ex) {
            // Неправильный/устаревший код
            // @TODO добавить распознавание конкретной причины
            if ($ex->getCode() == 409) {
                return false;
            }
            throw $ex;
        }

        $asyncMethodResult = new Model\AsyncMethodResult();
        $asyncMethodResult->parseFromString($response);

        return $asyncMethodResult->getTaskId();
    }

    /**
     * Результат подтверждения облачной подписи документа
     *
     * @param $taskId
     * @return bool|Model\CloudSignConfirmResult
     * @throws Exception
     */
    public function cloudSignConfirmResult($taskId)
    {
        $response = $this->doRequest(
            self::RESOURCE_CLOUDSIGNCONFIRMRESULT,
            array(
                'taskId' => $taskId
            ),
            self::METHOD_GET
        );

        if ($response) {
            $cloudSignConfirmResult = new Model\CloudSignConfirmResult();
            $cloudSignConfirmResult->parseFromString($response);

            return $cloudSignConfirmResult;
        }

        return false;
    }

    /**
     * Загрузить документ на полку
     *
     * @param     $nameOnShelf
     * @param     $data
     * @param int $partIndex
     * @param int $isLastPart
     * @return mixed
     * @throws Exception
     */
    public function shelfUpload($nameOnShelf, $data, $partIndex = 0, $isLastPart = 1)
    {
        $response = $this->doRequest(
            self::RESOURCE_SHELFUPLOAD,
            array(
                'nameOnShelf'   => $nameOnShelf,
                'partIndex'     => $partIndex,
                'isLastPart'    => $isLastPart
            ),
            self::METHOD_POST,
            $data
        );

        return $response;
    }

    /**
     * Выполнение запроса к Diadoc
     *
     * @param        $resource - uri запроса
     * @param        $params - GET параметры запроса
     * @param string $method - метод запроса
     * @param array  $data - POST параметры запроса
     * @return mixed
     * @throws Exception
     */
    protected function doRequest($resource, $params, $method = self::METHOD_GET, $data = array())
    {
        if (!isset($this->config['url'])) {
            throw new Exception('No url service Diadoc');
        }

        if (!function_exists('curl_init')) {
            throw new Exception('Curl PHP not installed');
        }

        // При пустом token делается аутентификация
        if (!$this->getToken() && $resource !== self::RESOURCE_AUTHENTICATE) {
            $this->authenticate();
        }

        $uri = sprintf(
            '%s%s?%s',
            $this->config['url'],
            $resource,
            http_build_query($params)
        );

        $ch = curl_init($uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->buildHeaders());
//        curl_setopt($ch, CURLOPT_HEADER, 1);
        if ($method == self::METHOD_POST) {
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($data) ? http_build_query($data) : $data);
        }
        elseif ($method == self::METHOD_GET) {
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        }
        curl_setopt_array($ch, $this->config['curl_options']);

        if (!$response = curl_exec($ch)) {
            throw new Exception(sprintf('Curl error: (%s) %s', curl_errno($ch), curl_error($ch)), curl_errno($ch));
        }

        if (!($httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE)) || ($httpCode !== 200 && $httpCode !== 204)) {
            throw new Exception(sprintf('Curl error http code: (%s) %s', $httpCode, $response), $httpCode);
        }
        curl_close($ch);

        return $response;
    }

    /**
     * Построение цепочки HTTP-заголовков
     *
     * @return mixed
     */
    protected function buildHeaders()
    {
        $headers['Authorization'][] = sprintf('DiadocAuth ddauth_api_client_id=%s', $this->config['key']);
        if ($token = $this->getToken()) {
            $headers['Authorization'][] = sprintf('ddauth_token=%s', $token);
        }
        array_walk($headers, function(&$item, $key){
            $item = sprintf('%s: %s', $key, implode(', ', $item));
        });

        return $headers;
    }
}
/*============================================================================*
 *  END OF Client                                                             *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/