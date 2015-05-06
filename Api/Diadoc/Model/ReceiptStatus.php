<?php
/**
 * Auto generated from ReceiptStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * ReceiptStatus enum
 */
final class ReceiptStatus
{
    const UnknownReceiptStatus = 0;
    const ReceiptStatusNone = 1;
    const ReceiptStatusFinished = 2;
    const ReceiptStatusHaveToCreateReceipt = 3;
    const ReceiptStatusWaitingForReceipt = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownReceiptStatus' => self::UnknownReceiptStatus,
            'ReceiptStatusNone' => self::ReceiptStatusNone,
            'ReceiptStatusFinished' => self::ReceiptStatusFinished,
            'ReceiptStatusHaveToCreateReceipt' => self::ReceiptStatusHaveToCreateReceipt,
            'ReceiptStatusWaitingForReceipt' => self::ReceiptStatusWaitingForReceipt,
        );
    }
}
}