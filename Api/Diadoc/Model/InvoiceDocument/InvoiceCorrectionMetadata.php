<?php
/**
 * Auto generated from InvoiceCorrectionMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.InvoiceDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument {
/**
 * InvoiceCorrectionMetadata message
 */
class InvoiceCorrectionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICECORRECTIONSTATUS = 1;
    const ORIGINALINVOICENUMBER = 2;
    const ORIGINALINVOICEDATE = 3;
    const ORIGINALINVOICEREVISIONNUMBER = 4;
    const ORIGINALINVOICEREVISIONDATE = 5;
    const TOTALINC = 6;
    const TOTALDEC = 7;
    const VATINC = 8;
    const VATDEC = 9;
    const CURRENCY = 10;
    const CONFIRMATIONDATETIMETICKS = 11;
    const INVOICEAMENDMENTFLAGS = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICECORRECTIONSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus, 
            'name' => 'InvoiceCorrectionStatus',
            'required' => false,
            'type' => 5,
        ),
        self::ORIGINALINVOICENUMBER => array(
            'name' => 'OriginalInvoiceNumber',
            'required' => true,
            'type' => 7,
        ),
        self::ORIGINALINVOICEDATE => array(
            'name' => 'OriginalInvoiceDate',
            'required' => true,
            'type' => 7,
        ),
        self::ORIGINALINVOICEREVISIONNUMBER => array(
            'name' => 'OriginalInvoiceRevisionNumber',
            'required' => false,
            'type' => 7,
        ),
        self::ORIGINALINVOICEREVISIONDATE => array(
            'name' => 'OriginalInvoiceRevisionDate',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALINC => array(
            'name' => 'TotalInc',
            'required' => true,
            'type' => 7,
        ),
        self::TOTALDEC => array(
            'name' => 'TotalDec',
            'required' => true,
            'type' => 7,
        ),
        self::VATINC => array(
            'name' => 'VatInc',
            'required' => true,
            'type' => 7,
        ),
        self::VATDEC => array(
            'name' => 'VatDec',
            'required' => true,
            'type' => 7,
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
            'required' => true,
            'type' => 5,
        ),
        self::CONFIRMATIONDATETIMETICKS => array(
            'name' => 'ConfirmationDateTimeTicks',
            'required' => true,
            'type' => 3,
        ),
        self::INVOICEAMENDMENTFLAGS => array(
            'name' => 'InvoiceAmendmentFlags',
            'required' => true,
            'type' => 5,
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
        $this->values[self::INVOICECORRECTIONSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus;
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
        $this->values[self::ORIGINALINVOICEREVISIONNUMBER] = null;
        $this->values[self::ORIGINALINVOICEREVISIONDATE] = null;
        $this->values[self::TOTALINC] = null;
        $this->values[self::TOTALDEC] = null;
        $this->values[self::VATINC] = null;
        $this->values[self::VATDEC] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CONFIRMATIONDATETIMETICKS] = null;
        $this->values[self::INVOICEAMENDMENTFLAGS] = null;
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
     * Sets value of 'InvoiceCorrectionStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionStatus($value)
    {
        return $this->set(self::INVOICECORRECTIONSTATUS, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionStatus' property
     *
     * @return int
     */
    public function getInvoiceCorrectionStatus()
    {
        return $this->get(self::INVOICECORRECTIONSTATUS);
    }

    /**
     * Sets value of 'OriginalInvoiceNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceNumber($value)
    {
        return $this->set(self::ORIGINALINVOICENUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceNumber' property
     *
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->get(self::ORIGINALINVOICENUMBER);
    }

    /**
     * Sets value of 'OriginalInvoiceDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceDate($value)
    {
        return $this->set(self::ORIGINALINVOICEDATE, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceDate' property
     *
     * @return string
     */
    public function getOriginalInvoiceDate()
    {
        return $this->get(self::ORIGINALINVOICEDATE);
    }

    /**
     * Sets value of 'OriginalInvoiceRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionNumber($value)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionNumber' property
     *
     * @return string
     */
    public function getOriginalInvoiceRevisionNumber()
    {
        return $this->get(self::ORIGINALINVOICEREVISIONNUMBER);
    }

    /**
     * Sets value of 'OriginalInvoiceRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionDate($value)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONDATE, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionDate' property
     *
     * @return string
     */
    public function getOriginalInvoiceRevisionDate()
    {
        return $this->get(self::ORIGINALINVOICEREVISIONDATE);
    }

    /**
     * Sets value of 'TotalInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalInc($value)
    {
        return $this->set(self::TOTALINC, $value);
    }

    /**
     * Returns value of 'TotalInc' property
     *
     * @return string
     */
    public function getTotalInc()
    {
        return $this->get(self::TOTALINC);
    }

    /**
     * Sets value of 'TotalDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalDec($value)
    {
        return $this->set(self::TOTALDEC, $value);
    }

    /**
     * Returns value of 'TotalDec' property
     *
     * @return string
     */
    public function getTotalDec()
    {
        return $this->get(self::TOTALDEC);
    }

    /**
     * Sets value of 'VatInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatInc($value)
    {
        return $this->set(self::VATINC, $value);
    }

    /**
     * Returns value of 'VatInc' property
     *
     * @return string
     */
    public function getVatInc()
    {
        return $this->get(self::VATINC);
    }

    /**
     * Sets value of 'VatDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatDec($value)
    {
        return $this->set(self::VATDEC, $value);
    }

    /**
     * Returns value of 'VatDec' property
     *
     * @return string
     */
    public function getVatDec()
    {
        return $this->get(self::VATDEC);
    }

    /**
     * Sets value of 'Currency' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCurrency($value)
    {
        return $this->set(self::CURRENCY, $value);
    }

    /**
     * Returns value of 'Currency' property
     *
     * @return int
     */
    public function getCurrency()
    {
        return $this->get(self::CURRENCY);
    }

    /**
     * Sets value of 'ConfirmationDateTimeTicks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setConfirmationDateTimeTicks($value)
    {
        return $this->set(self::CONFIRMATIONDATETIMETICKS, $value);
    }

    /**
     * Returns value of 'ConfirmationDateTimeTicks' property
     *
     * @return int
     */
    public function getConfirmationDateTimeTicks()
    {
        return $this->get(self::CONFIRMATIONDATETIMETICKS);
    }

    /**
     * Sets value of 'InvoiceAmendmentFlags' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInvoiceAmendmentFlags($value)
    {
        return $this->set(self::INVOICEAMENDMENTFLAGS, $value);
    }

    /**
     * Returns value of 'InvoiceAmendmentFlags' property
     *
     * @return int
     */
    public function getInvoiceAmendmentFlags()
    {
        return $this->get(self::INVOICEAMENDMENTFLAGS);
    }
}
}