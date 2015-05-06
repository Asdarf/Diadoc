<?php
/**
 * Auto generated from PriceListMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.BilateralDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument {
/**
 * PriceListMetadata message
 */
class PriceListMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const PRICELISTEFFECTIVEDATE = 2;
    const CONTRACTDOCUMENTDATE = 3;
    const CONTRACTDOCUMENTNUMBER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'name' => 'DocumentStatus',
            'required' => true,
            'type' => 5,
        ),
        self::PRICELISTEFFECTIVEDATE => array(
            'name' => 'PriceListEffectiveDate',
            'required' => false,
            'type' => 7,
        ),
        self::CONTRACTDOCUMENTDATE => array(
            'name' => 'ContractDocumentDate',
            'required' => false,
            'type' => 7,
        ),
        self::CONTRACTDOCUMENTNUMBER => array(
            'name' => 'ContractDocumentNumber',
            'required' => false,
            'type' => 7,
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
        $this->values[self::DOCUMENTSTATUS] = null;
        $this->values[self::PRICELISTEFFECTIVEDATE] = null;
        $this->values[self::CONTRACTDOCUMENTDATE] = null;
        $this->values[self::CONTRACTDOCUMENTNUMBER] = null;
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
     * Sets value of 'DocumentStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocumentStatus($value)
    {
        return $this->set(self::DOCUMENTSTATUS, $value);
    }

    /**
     * Returns value of 'DocumentStatus' property
     *
     * @return int
     */
    public function getDocumentStatus()
    {
        return $this->get(self::DOCUMENTSTATUS);
    }

    /**
     * Sets value of 'PriceListEffectiveDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPriceListEffectiveDate($value)
    {
        return $this->set(self::PRICELISTEFFECTIVEDATE, $value);
    }

    /**
     * Returns value of 'PriceListEffectiveDate' property
     *
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        return $this->get(self::PRICELISTEFFECTIVEDATE);
    }

    /**
     * Sets value of 'ContractDocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentDate($value)
    {
        return $this->set(self::CONTRACTDOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'ContractDocumentDate' property
     *
     * @return string
     */
    public function getContractDocumentDate()
    {
        return $this->get(self::CONTRACTDOCUMENTDATE);
    }

    /**
     * Sets value of 'ContractDocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentNumber($value)
    {
        return $this->set(self::CONTRACTDOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'ContractDocumentNumber' property
     *
     * @return string
     */
    public function getContractDocumentNumber()
    {
        return $this->get(self::CONTRACTDOCUMENTNUMBER);
    }
}
}