<?php
/**
 * Auto generated from InvoiceDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * InboundInvoiceDocflow message
 */
class InboundInvoiceDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTDOCFLOW = 2;
    const CONFIRMATIONDOCFLOW = 3;
    const CORRECTIONREQUESTDOCFLOW = 4;
    const CONFIRMATIONTIMESTAMP = 5;
    const ISAMENDMENTREQUESTED = 6;
    const ISREVISED = 7;
    const ISCORRECTED = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::RECEIPTDOCFLOW => array(
            'name' => 'ReceiptDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceReceiptDocflow'
        ),
        self::CONFIRMATIONDOCFLOW => array(
            'name' => 'ConfirmationDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceConfirmationDocflow'
        ),
        self::CORRECTIONREQUESTDOCFLOW => array(
            'name' => 'CorrectionRequestDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionRequestDocflow'
        ),
        self::CONFIRMATIONTIMESTAMP => array(
            'name' => 'ConfirmationTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::ISAMENDMENTREQUESTED => array(
            'name' => 'IsAmendmentRequested',
            'required' => false,
            'type' => 8,
        ),
        self::ISREVISED => array(
            'name' => 'IsRevised',
            'required' => false,
            'type' => 8,
        ),
        self::ISCORRECTED => array(
            'name' => 'IsCorrected',
            'required' => false,
            'type' => 8,
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
        $this->values[self::RECEIPTDOCFLOW] = null;
        $this->values[self::CONFIRMATIONDOCFLOW] = null;
        $this->values[self::CORRECTIONREQUESTDOCFLOW] = null;
        $this->values[self::CONFIRMATIONTIMESTAMP] = null;
        $this->values[self::ISAMENDMENTREQUESTED] = null;
        $this->values[self::ISREVISED] = null;
        $this->values[self::ISCORRECTED] = null;
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
     * Sets value of 'ReceiptDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceReceiptDocflow $value Property value
     *
     * @return null
     */
    public function setReceiptDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceReceiptDocflow $value)
    {
        return $this->set(self::RECEIPTDOCFLOW, $value);
    }

    /**
     * Returns value of 'ReceiptDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->get(self::RECEIPTDOCFLOW);
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

    /**
     * Sets value of 'CorrectionRequestDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionRequestDocflow $value Property value
     *
     * @return null
     */
    public function setCorrectionRequestDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionRequestDocflow $value)
    {
        return $this->set(self::CORRECTIONREQUESTDOCFLOW, $value);
    }

    /**
     * Returns value of 'CorrectionRequestDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionRequestDocflow
     */
    public function getCorrectionRequestDocflow()
    {
        return $this->get(self::CORRECTIONREQUESTDOCFLOW);
    }

    /**
     * Sets value of 'ConfirmationTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setConfirmationTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::CONFIRMATIONTIMESTAMP, $value);
    }

    /**
     * Returns value of 'ConfirmationTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getConfirmationTimestamp()
    {
        return $this->get(self::CONFIRMATIONTIMESTAMP);
    }

    /**
     * Sets value of 'IsAmendmentRequested' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsAmendmentRequested($value)
    {
        return $this->set(self::ISAMENDMENTREQUESTED, $value);
    }

    /**
     * Returns value of 'IsAmendmentRequested' property
     *
     * @return bool
     */
    public function getIsAmendmentRequested()
    {
        return $this->get(self::ISAMENDMENTREQUESTED);
    }

    /**
     * Sets value of 'IsRevised' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsRevised($value)
    {
        return $this->set(self::ISREVISED, $value);
    }

    /**
     * Returns value of 'IsRevised' property
     *
     * @return bool
     */
    public function getIsRevised()
    {
        return $this->get(self::ISREVISED);
    }

    /**
     * Sets value of 'IsCorrected' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsCorrected($value)
    {
        return $this->set(self::ISCORRECTED, $value);
    }

    /**
     * Returns value of 'IsCorrected' property
     *
     * @return bool
     */
    public function getIsCorrected()
    {
        return $this->get(self::ISCORRECTED);
    }
}
}