<?php
/**
 * Auto generated from Address.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * RussianAddress message
 */
class RussianAddress extends \ProtobufMessage
{
    /* Field index constants */
    const ZIPCODE = 1;
    const REGION = 2;
    const TERRITORY = 3;
    const CITY = 4;
    const LOCALITY = 5;
    const STREET = 6;
    const BUILDING = 7;
    const BLOCK = 8;
    const APARTMENT = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZIPCODE => array(
            'name' => 'ZipCode',
            'required' => false,
            'type' => 7,
        ),
        self::REGION => array(
            'name' => 'Region',
            'required' => true,
            'type' => 7,
        ),
        self::TERRITORY => array(
            'name' => 'Territory',
            'required' => false,
            'type' => 7,
        ),
        self::CITY => array(
            'name' => 'City',
            'required' => false,
            'type' => 7,
        ),
        self::LOCALITY => array(
            'name' => 'Locality',
            'required' => false,
            'type' => 7,
        ),
        self::STREET => array(
            'name' => 'Street',
            'required' => false,
            'type' => 7,
        ),
        self::BUILDING => array(
            'name' => 'Building',
            'required' => false,
            'type' => 7,
        ),
        self::BLOCK => array(
            'name' => 'Block',
            'required' => false,
            'type' => 7,
        ),
        self::APARTMENT => array(
            'name' => 'Apartment',
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
        $this->values[self::ZIPCODE] = null;
        $this->values[self::REGION] = null;
        $this->values[self::TERRITORY] = null;
        $this->values[self::CITY] = null;
        $this->values[self::LOCALITY] = null;
        $this->values[self::STREET] = null;
        $this->values[self::BUILDING] = null;
        $this->values[self::BLOCK] = null;
        $this->values[self::APARTMENT] = null;
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
     * Sets value of 'ZipCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setZipCode($value)
    {
        return $this->set(self::ZIPCODE, $value);
    }

    /**
     * Returns value of 'ZipCode' property
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->get(self::ZIPCODE);
    }

    /**
     * Sets value of 'Region' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegion($value)
    {
        return $this->set(self::REGION, $value);
    }

    /**
     * Returns value of 'Region' property
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->get(self::REGION);
    }

    /**
     * Sets value of 'Territory' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTerritory($value)
    {
        return $this->set(self::TERRITORY, $value);
    }

    /**
     * Returns value of 'Territory' property
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->get(self::TERRITORY);
    }

    /**
     * Sets value of 'City' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'City' property
     *
     * @return string
     */
    public function getCity()
    {
        return $this->get(self::CITY);
    }

    /**
     * Sets value of 'Locality' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocality($value)
    {
        return $this->set(self::LOCALITY, $value);
    }

    /**
     * Returns value of 'Locality' property
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->get(self::LOCALITY);
    }

    /**
     * Sets value of 'Street' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreet($value)
    {
        return $this->set(self::STREET, $value);
    }

    /**
     * Returns value of 'Street' property
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->get(self::STREET);
    }

    /**
     * Sets value of 'Building' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuilding($value)
    {
        return $this->set(self::BUILDING, $value);
    }

    /**
     * Returns value of 'Building' property
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->get(self::BUILDING);
    }

    /**
     * Sets value of 'Block' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBlock($value)
    {
        return $this->set(self::BLOCK, $value);
    }

    /**
     * Returns value of 'Block' property
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->get(self::BLOCK);
    }

    /**
     * Sets value of 'Apartment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setApartment($value)
    {
        return $this->set(self::APARTMENT, $value);
    }

    /**
     * Returns value of 'Apartment' property
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->get(self::APARTMENT);
    }
}
}