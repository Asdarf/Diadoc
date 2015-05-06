<?php
/**
 * Auto generated from Address.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * ForeignAddress message
 */
class ForeignAddress extends \ProtobufMessage
{
    /* Field index constants */
    const COUNTRY = 1;
    const ADDRESS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COUNTRY => array(
            'name' => 'Country',
            'required' => true,
            'type' => 7,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => true,
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
        $this->values[self::COUNTRY] = null;
        $this->values[self::ADDRESS] = null;
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
     * Sets value of 'Country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'Country' property
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->get(self::COUNTRY);
    }

    /**
     * Sets value of 'Address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'Address' property
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->get(self::ADDRESS);
    }
}
}