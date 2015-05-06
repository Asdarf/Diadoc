<?php
/**
 * Auto generated from Department.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Department message
 */
class Department extends \ProtobufMessage
{
    /* Field index constants */
    const DEPARTMENTID = 1;
    const PARENTDEPARTMENTID = 2;
    const NAME = 3;
    const ABBREVIATION = 4;
    const KPP = 5;
    const ADDRESS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => true,
            'type' => 7,
        ),
        self::PARENTDEPARTMENTID => array(
            'name' => 'ParentDepartmentId',
            'required' => true,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
            'type' => 7,
        ),
        self::ABBREVIATION => array(
            'name' => 'Abbreviation',
            'required' => false,
            'type' => 7,
        ),
        self::KPP => array(
            'name' => 'Kpp',
            'required' => false,
            'type' => 7,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Address'
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
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::PARENTDEPARTMENTID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::ABBREVIATION] = null;
        $this->values[self::KPP] = null;
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
     * Sets value of 'DepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartmentId($value)
    {
        return $this->set(self::DEPARTMENTID, $value);
    }

    /**
     * Returns value of 'DepartmentId' property
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->get(self::DEPARTMENTID);
    }

    /**
     * Sets value of 'ParentDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentDepartmentId($value)
    {
        return $this->set(self::PARENTDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ParentDepartmentId' property
     *
     * @return string
     */
    public function getParentDepartmentId()
    {
        return $this->get(self::PARENTDEPARTMENTID);
    }

    /**
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'Abbreviation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAbbreviation($value)
    {
        return $this->set(self::ABBREVIATION, $value);
    }

    /**
     * Returns value of 'Abbreviation' property
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->get(self::ABBREVIATION);
    }

    /**
     * Sets value of 'Kpp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKpp($value)
    {
        return $this->set(self::KPP, $value);
    }

    /**
     * Returns value of 'Kpp' property
     *
     * @return string
     */
    public function getKpp()
    {
        return $this->get(self::KPP);
    }

    /**
     * Sets value of 'Address' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Address $value Property value
     *
     * @return null
     */
    public function setAddress(\CRM\Lib\Docflow\Api\Diadoc\Model\Address $value)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'Address' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Address
     */
    public function getAddress()
    {
        return $this->get(self::ADDRESS);
    }
}
}