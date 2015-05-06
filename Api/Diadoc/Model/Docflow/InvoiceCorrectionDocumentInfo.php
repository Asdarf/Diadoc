<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * InvoiceCorrectionDocumentInfo message
 */
class InvoiceCorrectionDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALINC = 1;
    const TOTALDEC = 2;
    const VATINC = 3;
    const VATDEC = 4;
    const CURRENCYCODE = 5;
    const ORIGINALINVOICEDATEANDNUMBER = 6;
    const ORIGINALINVOICEREVISIONDATEANDNUMBER = 7;
    const ORIGINALINVOICECORRECTIONDATEANDNUMBER = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALINC => array(
            'name' => 'TotalInc',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALDEC => array(
            'name' => 'TotalDec',
            'required' => false,
            'type' => 7,
        ),
        self::VATINC => array(
            'name' => 'VatInc',
            'required' => false,
            'type' => 7,
        ),
        self::VATDEC => array(
            'name' => 'VatDec',
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
        self::ORIGINALINVOICEREVISIONDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceRevisionDateAndNumber',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber'
        ),
        self::ORIGINALINVOICECORRECTIONDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceCorrectionDateAndNumber',
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
        $this->values[self::TOTALINC] = null;
        $this->values[self::TOTALDEC] = null;
        $this->values[self::VATINC] = null;
        $this->values[self::VATDEC] = null;
        $this->values[self::CURRENCYCODE] = null;
        $this->values[self::ORIGINALINVOICEDATEANDNUMBER] = null;
        $this->values[self::ORIGINALINVOICEREVISIONDATEANDNUMBER] = null;
        $this->values[self::ORIGINALINVOICECORRECTIONDATEANDNUMBER] = null;
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

    /**
     * Sets value of 'OriginalInvoiceRevisionDateAndNumber' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionDateAndNumber(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionDateAndNumber' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceRevisionDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICEREVISIONDATEANDNUMBER);
    }

    /**
     * Sets value of 'OriginalInvoiceCorrectionDateAndNumber' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceCorrectionDateAndNumber(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value)
    {
        return $this->set(self::ORIGINALINVOICECORRECTIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceCorrectionDateAndNumber' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceCorrectionDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICECORRECTIONDATEANDNUMBER);
    }
}
}