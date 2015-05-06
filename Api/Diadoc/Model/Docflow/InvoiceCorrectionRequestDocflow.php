<?php
/**
 * Auto generated from InvoiceDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * InvoiceCorrectionRequestDocflow message
 */
class InvoiceCorrectionRequestDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const CORRECTIONREQUESTATTACHMENT = 2;
    const RECEIPTDOCFLOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::CORRECTIONREQUESTATTACHMENT => array(
            'name' => 'CorrectionRequestAttachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment'
        ),
        self::RECEIPTDOCFLOW => array(
            'name' => 'ReceiptDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ISFINISHED] = null;
        $this->values[self::CORRECTIONREQUESTATTACHMENT] = null;
        $this->values[self::RECEIPTDOCFLOW] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'IsFinished' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->get(self::ISFINISHED);
    }

    /**
     * Sets value of 'CorrectionRequestAttachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setCorrectionRequestAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value)
    {
        return $this->set(self::CORRECTIONREQUESTATTACHMENT, $value);
    }

    /**
     * Returns value of 'CorrectionRequestAttachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment
     */
    public function getCorrectionRequestAttachment()
    {
        return $this->get(self::CORRECTIONREQUESTATTACHMENT);
    }

    /**
     * Sets value of 'ReceiptDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow $value Property value
     *
     * @return null
     */
    public function setReceiptDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow $value)
    {
        return $this->set(self::RECEIPTDOCFLOW, $value);
    }

    /**
     * Returns value of 'ReceiptDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->get(self::RECEIPTDOCFLOW);
    }
}
}