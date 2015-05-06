<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * PriceListDocumentInfo message
 */
class PriceListDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PRICELISTEFFECTIVEDATE = 1;
    const CONTRACTDOCUMENTDATEANDNUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRICELISTEFFECTIVEDATE => array(
            'name' => 'PriceListEffectiveDate',
            'required' => false,
            'type' => 7,
        ),
        self::CONTRACTDOCUMENTDATEANDNUMBER => array(
            'name' => 'ContractDocumentDateAndNumber',
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
        $this->values[self::PRICELISTEFFECTIVEDATE] = null;
        $this->values[self::CONTRACTDOCUMENTDATEANDNUMBER] = null;
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
     * Sets value of 'ContractDocumentDateAndNumber' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setContractDocumentDateAndNumber(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber $value)
    {
        return $this->set(self::CONTRACTDOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'ContractDocumentDateAndNumber' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentDateAndNumber
     */
    public function getContractDocumentDateAndNumber()
    {
        return $this->get(self::CONTRACTDOCUMENTDATEANDNUMBER);
    }
}
}