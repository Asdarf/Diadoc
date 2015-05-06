<?php
/**
 * Auto generated from InvoiceRevisionMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.InvoiceDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument {
/**
 * InvoiceRevisionMetadata message
 */
class InvoiceRevisionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEREVISIONSTATUS = 1;
    const ORIGINALINVOICENUMBER = 2;
    const ORIGINALINVOICEDATE = 3;
    const TOTAL = 4;
    const VAT = 5;
    const CURRENCY = 6;
    const CONFIRMATIONDATETIMETICKS = 7;
    const INVOICEAMENDMENTFLAGS = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICEREVISIONSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus, 
            'name' => 'InvoiceRevisionStatus',
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
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => 7,
        ),
        self::VAT => array(
            'name' => 'Vat',
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
        $this->values[self::INVOICEREVISIONSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus;
        $this->values[self::ORIGINALINVOICENUMBER] = null;
        $this->values[self::ORIGINALINVOICEDATE] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
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
     * Sets value of 'InvoiceRevisionStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionStatus($value)
    {
        return $this->set(self::INVOICEREVISIONSTATUS, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionStatus' property
     *
     * @return int
     */
    public function getInvoiceRevisionStatus()
    {
        return $this->get(self::INVOICEREVISIONSTATUS);
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
     * Sets value of 'Total' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'Total' property
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->get(self::TOTAL);
    }

    /**
     * Sets value of 'Vat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVat($value)
    {
        return $this->set(self::VAT, $value);
    }

    /**
     * Returns value of 'Vat' property
     *
     * @return string
     */
    public function getVat()
    {
        return $this->get(self::VAT);
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