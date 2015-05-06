<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * InvoiceDocumentInfo message
 */
class InvoiceDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTAL = 1;
    const VAT = 2;
    const CURRENCYCODE = 3;
    const ORIGINALINVOICEDATEANDNUMBER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'Total',
            'required' => false,
            'type' => 7,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => 7,
        ),
        self::CURRENCYCODE => array(
            'name' => 'CurrencyCode',
            'required' => false,
            'type' => 5,
        ),
        self::ORIGINALINVOICEDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceDateAndNumber',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber'
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
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::CURRENCYCODE] = null;
        $this->values[self::ORIGINALINVOICEDATEANDNUMBER] = null;
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
     * Sets value of 'CurrencyCode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCurrencyCode($value)
    {
        return $this->set(self::CURRENCYCODE, $value);
    }

    /**
     * Returns value of 'CurrencyCode' property
     *
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->get(self::CURRENCYCODE);
    }

    /**
     * Sets value of 'OriginalInvoiceDateAndNumber' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceDateAndNumber(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value)
    {
        return $this->set(self::ORIGINALINVOICEDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceDateAndNumber' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICEDATEANDNUMBER);
    }
}
}