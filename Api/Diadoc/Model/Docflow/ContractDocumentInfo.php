<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * ContractDocumentInfo message
 */
class ContractDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CONTRACTPRICE = 1;
    const CONTRACTTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::CONTRACTPRICE] = null;
        $this->values[self::CONTRACTTYPE] = null;
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
}
}