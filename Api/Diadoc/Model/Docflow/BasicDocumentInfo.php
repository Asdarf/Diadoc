<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * BasicDocumentInfo message
 */
class BasicDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTAL = 1;
    const NOVAT = 2;
    const VAT = 3;
    const GROUNDS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'Total',
            'required' => false,
            'type' => 7,
        ),
        self::NOVAT => array(
            'name' => 'NoVat',
            'required' => false,
            'type' => 8,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => 7,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::NOVAT] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
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
     * Sets value of 'NoVat' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setNoVat($value)
    {
        return $this->set(self::NOVAT, $value);
    }

    /**
     * Returns value of 'NoVat' property
     *
     * @return bool
     */
    public function getNoVat()
    {
        return $this->get(self::NOVAT);
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
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        return $this->get(self::GROUNDS);
    }
}
}