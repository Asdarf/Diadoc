<?php

namespace CRM\Lib\Docflow;

interface ClientInterface
{
    /**
     * Поиск документа по номеру
     *
     * @param string $number
     * @param int    $scope
     * @return Model\Document
     */
    public function getDocumentByNumber($number, $scope);

    /**
     * Получение документа по идентификатору
     *
     * @param $id
     * @return Model\Document
     */
    public function getDocumentById($id);

    /**
     * Получение пакета документов по идентификатору пакета
     *
     * @param $id
     * @return Model\Document
     */
    public function getPacketById($id);

    /**
     * Загрузка и подписывание документа
     *
     * @param        $path
     * @param string $fileName
     * @return mixed
     */
    public function signDocument($path, $fileName = '');

    /**
     * Проверка результата подписи документа
     *
     * @param $taskId
     * @return bool|string
     */
    public function checkSignDocument($taskId);

    /**
     * Подтверждение подписи документа
     *
     * @param $taskId
     * @param $code
     * @return bool|string
     * @throws \CRM\Lib\Utils\System\Exception
     * @throws \Exception
     */
    public function confirmSignDocument($taskId, $code);

    /**
     * Проверка подтверждения подписи документа
     *
     * @param $taskId
     * @return bool
     */
    public function checkConfirmSignDocument($taskId);
}