<?php
/**
 * Auto generated from InvoiceDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * InboundInvoiceReceiptDocflow message
 */
class InboundInvoiceReceiptDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTATTACHMENT = 2;
    const CONFIRMATIONDOCFLOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::RECEIPTATTACHMENT => array(
            'name' => 'ReceiptAttachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment'
        ),
        self::CONFIRMATIONDOCFLOW => array(
            'name' => 'ConfirmationDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceConfirmationDocflow'
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
        $this->values[self::RECEIPTATTACHMENT] = null;
        $this->values[self::CONFIRMATIONDOCFLOW] = null;
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
     * Sets value of 'ReceiptAttachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setReceiptAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value)
    {
        return $this->set(self::RECEIPTATTACHMENT, $value);
    }

    /**
     * Returns value of 'ReceiptAttachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment
     */
    public function getReceiptAttachment()
    {
        return $this->get(self::RECEIPTATTACHMENT);
    }

    /**
     * Sets value of 'ConfirmationDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceConfirmationDocflow $value Property value
     *
     * @return null
     */
    public function setConfirmationDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceConfirmationDocflow $value)
    {
        return $this->set(self::CONFIRMATIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'ConfirmationDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceConfirmationDocflow
     */
    public function getConfirmationDocflow()
    {
        return $this->get(self::CONFIRMATIONDOCFLOW);
    }
}
}