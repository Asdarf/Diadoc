<?php

namespace CRM\Lib\Docflow\Api\Diadoc;

class Helper {

    // Шаблон ссылки на документ в интерфейсе диадока
    const DOCUMENT_URI_TEMPLATE = 'https://diadoc.kontur.ru/%s/Document/Show?letterId=%s&documentId=%s';

    /**
     * Конвертация метки времени в тактах 100-наносекуд в \DateTime
     *
     * @param Model\Timestamp $timestamp
     * @return \DateTime
     */
    public static function timestampToDateTime(Model\Timestamp $timestamp)
    {
        $unixtimestamp = ($timestamp->getTicks() - 621355968000000000) / pow(10, 7);
        $dateTime = new \DateTime();
        $dateTime->setTimestamp($unixtimestamp);
        return $dateTime;
    }

    /**
     * Получение GUID из идентифкатора ящика
     *
     * @param string $boxId Идентификатор ящика
     * @return mixed
     */
    public static function boxGUIDFromId($boxId)
    {
        return preg_replace('/^(\w{8})(\w{4})(\w{4})(\w{4})(\w+)@/i', '$1-$2-$3-$4-$5', $boxId);
    }

    /**
     * Формирование прямой ссылки на документ в интерфейсе Диадок
     *
     * @param string           $boxId
     * @param Model\DocumentId $documentId
     * @return string
     */
    public static function documentUri($boxId, Model\DocumentId $documentId)
    {
        return sprintf(
            self::DOCUMENT_URI_TEMPLATE,
            self::boxGUIDFromId($boxId),
            $documentId->getMessageId(),
            $documentId->getEntityId()
        );
    }

    /**
     * Проверка принадлежности акта к документу
     *
     * @param $docTitle
     * @param $number
     * @return bool
     */
    public static function isActOfDocument($docTitle, $number)
    {
        return strpos(mb_strtolower($docTitle), 'акт') === false && preg_match(
            sprintf('/\b[#№]?%s\b/', $number),
            $docTitle
        );
    }

    /**
     * Получение имени файла из пути
     *
     * @param $path
     * @return string
     */
    public static function getFileNameFromPath($path)
    {
        $lastSlash = strrpos($path, DIRECTORY_SEPARATOR);
        $fileName  = substr($path, $lastSlash === false ? 0 : ($lastSlash + 1));

        return $fileName;
    }
}
/*============================================================================*
 *  END OF Helper                                                             *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/