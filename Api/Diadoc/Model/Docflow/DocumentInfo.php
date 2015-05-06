<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocumentInfo message
 */
class DocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTTYPE = 1;
    const DOCUMENTDIRECTION = 2;
    const ISTEST = 3;
    const CUSTOMDOCUMENTID = 4;
    const FROMDEPARTMENTID = 5;
    const TODEPARTMENTID = 6;
    const COUNTERAGENTBOXID = 7;
    const DOCUMENTDATEANDNUMBER = 8;
    const BASICDOCUMENTINFO = 9;
    const INVOICEINFO = 10;
    const INVOICECORRECTIONINFO = 11;
    const PRICELISTINFO = 12;
    const CONTRACTINFO = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTTYPE => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentType::UnknownDocumentType, 
            'name' => 'DocumentType',
            'required' => false,
            'type' => 5,
        ),
        self::DOCUMENTDIRECTION => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDirection::UnknownDocumentDirection, 
            'name' => 'DocumentDirection',
            'required' => false,
            'type' => 5,
        ),
        self::ISTEST => array(
            'name' => 'IsTest',
            'required' => false,
            'type' => 8,
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => 7,
        ),
        self::FROMDEPARTMENTID => array(
            'name' => 'FromDepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::COUNTERAGENTBOXID => array(
            'name' => 'CounteragentBoxId',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENTDATEANDNUMBER => array(
            'name' => 'DocumentDateAndNumber',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber'
        ),
        self::BASICDOCUMENTINFO => array(
            'name' => 'BasicDocumentInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BasicDocumentInfo'
        ),
        self::INVOICEINFO => array(
            'name' => 'InvoiceInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceDocumentInfo'
        ),
        self::INVOICECORRECTIONINFO => array(
            'name' => 'InvoiceCorrectionInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionDocumentInfo'
        ),
        self::PRICELISTINFO => array(
            'name' => 'PriceListInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\PriceListDocumentInfo'
        ),
        self::CONTRACTINFO => array(
            'name' => 'ContractInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ContractDocumentInfo'
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
        $this->values[self::DOCUMENTTYPE] = \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentType::UnknownDocumentType;
        $this->values[self::DOCUMENTDIRECTION] = \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDirection::UnknownDocumentDirection;
        $this->values[self::ISTEST] = null;
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::FROMDEPARTMENTID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::COUNTERAGENTBOXID] = null;
        $this->values[self::DOCUMENTDATEANDNUMBER] = null;
        $this->values[self::BASICDOCUMENTINFO] = null;
        $this->values[self::INVOICEINFO] = null;
        $this->values[self::INVOICECORRECTIONINFO] = null;
        $this->values[self::PRICELISTINFO] = null;
        $this->values[self::CONTRACTINFO] = null;
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
     * Sets value of 'DocumentType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocumentType($value)
    {
        return $this->set(self::DOCUMENTTYPE, $value);
    }

    /**
     * Returns value of 'DocumentType' property
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->get(self::DOCUMENTTYPE);
    }

    /**
     * Sets value of 'DocumentDirection' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocumentDirection($value)
    {
        return $this->set(self::DOCUMENTDIRECTION, $value);
    }

    /**
     * Returns value of 'DocumentDirection' property
     *
     * @return int
     */
    public function getDocumentDirection()
    {
        return $this->get(self::DOCUMENTDIRECTION);
    }

    /**
     * Sets value of 'IsTest' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsTest($value)
    {
        return $this->set(self::ISTEST, $value);
    }

    /**
     * Returns value of 'IsTest' property
     *
     * @return bool
     */
    public function getIsTest()
    {
        return $this->get(self::ISTEST);
    }

    /**
     * Sets value of 'CustomDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomDocumentId($value)
    {
        return $this->set(self::CUSTOMDOCUMENTID, $value);
    }

    /**
     * Returns value of 'CustomDocumentId' property
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->get(self::CUSTOMDOCUMENTID);
    }

    /**
     * Sets value of 'FromDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromDepartmentId($value)
    {
        return $this->set(self::FROMDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'FromDepartmentId' property
     *
     * @return string
     */
    public function getFromDepartmentId()
    {
        return $this->get(self::FROMDEPARTMENTID);
    }

    /**
     * Sets value of 'ToDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToDepartmentId($value)
    {
        return $this->set(self::TODEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ToDepartmentId' property
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        return $this->get(self::TODEPARTMENTID);
    }

    /**
     * Sets value of 'CounteragentBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCounteragentBoxId($value)
    {
        return $this->set(self::COUNTERAGENTBOXID, $value);
    }

    /**
     * Returns value of 'CounteragentBoxId' property
     *
     * @return string
     */
    public function getCounteragentBoxId()
    {
        return $this->get(self::COUNTERAGENTBOXID);
    }

    /**
     * Sets value of 'DocumentDateAndNumber' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setDocumentDateAndNumber(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value)
    {
        return $this->set(self::DOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentDateAndNumber' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber
     */
    public function getDocumentDateAndNumber()
    {
        return $this->get(self::DOCUMENTDATEANDNUMBER);
    }

    /**
     * Sets value of 'BasicDocumentInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BasicDocumentInfo $value Property value
     *
     * @return null
     */
    public function setBasicDocumentInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BasicDocumentInfo $value)
    {
        return $this->set(self::BASICDOCUMENTINFO, $value);
    }

    /**
     * Returns value of 'BasicDocumentInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BasicDocumentInfo
     */
    public function getBasicDocumentInfo()
    {
        return $this->get(self::BASICDOCUMENTINFO);
    }

    /**
     * Sets value of 'InvoiceInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceDocumentInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceDocumentInfo $value)
    {
        return $this->set(self::INVOICEINFO, $value);
    }

    /**
     * Returns value of 'InvoiceInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceDocumentInfo
     */
    public function getInvoiceInfo()
    {
        return $this->get(self::INVOICEINFO);
    }

    /**
     * Sets value of 'InvoiceCorrectionInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionDocumentInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionDocumentInfo $value)
    {
        return $this->set(self::INVOICECORRECTIONINFO, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InvoiceCorrectionDocumentInfo
     */
    public function getInvoiceCorrectionInfo()
    {
        return $this->get(self::INVOICECORRECTIONINFO);
    }

    /**
     * Sets value of 'PriceListInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\PriceListDocumentInfo $value Property value
     *
     * @return null
     */
    public function setPriceListInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\PriceListDocumentInfo $value)
    {
        return $this->set(self::PRICELISTINFO, $value);
    }

    /**
     * Returns value of 'PriceListInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\PriceListDocumentInfo
     */
    public function getPriceListInfo()
    {
        return $this->get(self::PRICELISTINFO);
    }

    /**
     * Sets value of 'ContractInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ContractDocumentInfo $value Property value
     *
     * @return null
     */
    public function setContractInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ContractDocumentInfo $value)
    {
        return $this->set(self::CONTRACTINFO, $value);
    }

    /**
     * Returns value of 'ContractInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ContractDocumentInfo
     */
    public function getContractInfo()
    {
        return $this->get(self::CONTRACTINFO);
    }
}
}