<?php
/**
 * Auto generated from ContractMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.BilateralDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument {
/**
 * ContractMetadata message
 */
class ContractMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const CONTRACTPRICE = 2;
    const CONTRACTTYPE = 3;
    const RECEIPTSTATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus, 
            'name' => 'DocumentStatus',
            'required' => true,
            'type' => 5,
        ),
        self::CONTRACTPRICE => array(
            'name' => 'ContractPrice',
            'required' => false,
            'type' => 7,
        ),
        self::CONTRACTTYPE => array(
            'name' => 'ContractType',
            'required' => false,
            'type' => 7,
        ),
        self::RECEIPTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\ReceiptStatus::UnknownReceiptStatus, 
            'name' => 'ReceiptStatus',
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
        $this->values[self::DOCUMENTSTATUS] = null;
        $this->values[self::CONTRACTPRICE] = null;
        $this->values[self::CONTRACTTYPE] = null;
        $this->values[self::RECEIPTSTATUS] = null;
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
     * Sets value of 'ContractPrice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractPrice($value)
    {
        return $this->set(self::CONTRACTPRICE, $value);
    }

    /**
     * Returns value of 'ContractPrice' property
     *
     * @return string
     */
    public function getContractPrice()
    {
        return $this->get(self::CONTRACTPRICE);
    }

    /**
     * Sets value of 'ContractType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractType($value)
    {
        return $this->set(self::CONTRACTTYPE, $value);
    }

    /**
     * Returns value of 'ContractType' property
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->get(self::CONTRACTTYPE);
    }

    /**
     * Sets value of 'ReceiptStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReceiptStatus($value)
    {
        return $this->set(self::RECEIPTSTATUS, $value);
    }

    /**
     * Returns value of 'ReceiptStatus' property
     *
     * @return int
     */
    public function getReceiptStatus()
    {
        return $this->get(self::RECEIPTSTATUS);
    }
}
}