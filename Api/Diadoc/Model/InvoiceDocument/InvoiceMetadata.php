<?php
/**
 * Auto generated from InvoiceMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.InvoiceDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument {
/**
 * InvoiceMetadata message
 */
class InvoiceMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICESTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const CURRENCY = 4;
    const CONFIRMATIONDATETIMETICKS = 5;
    const INVOICEAMENDMENTFLAGS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICESTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus, 
            'name' => 'InvoiceStatus',
            'required' => false,
            'type' => 5,
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
        $this->values[self::INVOICESTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus;
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
     * Sets value of 'InvoiceStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInvoiceStatus($value)
    {
        return $this->set(self::INVOICESTATUS, $value);
    }

    /**
     * Returns value of 'InvoiceStatus' property
     *
     * @return int
     */
    public function getInvoiceStatus()
    {
        return $this->get(self::INVOICESTATUS);
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