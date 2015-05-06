<?php
/**
 * Auto generated from Organization.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Organization message
 */
class Organization extends \ProtobufMessage
{
    /* Field index constants */
    const ORGID = 1;
    const INN = 2;
    const KPP = 3;
    const FULLNAME = 4;
    const SHORTNAME = 5;
    const BOXES = 7;
    const OGRN = 8;
    const FNSPARTICIPANTID = 9;
    const ADDRESS = 10;
    const FNSREGISTRATIONDATE = 11;
    const DEPARTMENTS = 12;
    const IFNSCODE = 13;
    const ISPILOT = 14;
    const ISACTIVE = 15;
    const ISTEST = 16;
    const ISBRANCH = 17;
    const ISROAMING = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGID => array(
            'name' => 'OrgId',
            'required' => true,
            'type' => 7,
        ),
        self::INN => array(
            'name' => 'Inn',
            'required' => true,
            'type' => 7,
        ),
        self::KPP => array(
            'name' => 'Kpp',
            'required' => false,
            'type' => 7,
        ),
        self::FULLNAME => array(
            'name' => 'FullName',
            'required' => true,
            'type' => 7,
        ),
        self::SHORTNAME => array(
            'name' => 'ShortName',
            'required' => false,
            'type' => 7,
        ),
        self::BOXES => array(
            'name' => 'Boxes',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Box'
        ),
        self::OGRN => array(
            'name' => 'Ogrn',
            'required' => false,
            'type' => 7,
        ),
        self::FNSPARTICIPANTID => array(
            'name' => 'FnsParticipantId',
            'required' => false,
            'type' => 7,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Address'
        ),
        self::FNSREGISTRATIONDATE => array(
            'name' => 'FnsRegistrationDate',
            'required' => false,
            'type' => 7,
        ),
        self::DEPARTMENTS => array(
            'name' => 'Departments',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Department'
        ),
        self::IFNSCODE => array(
            'name' => 'IfnsCode',
            'required' => false,
            'type' => 7,
        ),
        self::ISPILOT => array(
            'name' => 'IsPilot',
            'required' => false,
            'type' => 8,
        ),
        self::ISACTIVE => array(
            'name' => 'IsActive',
            'required' => false,
            'type' => 8,
        ),
        self::ISTEST => array(
            'name' => 'IsTest',
            'required' => false,
            'type' => 8,
        ),
        self::ISBRANCH => array(
            'name' => 'IsBranch',
            'required' => false,
            'type' => 8,
        ),
        self::ISROAMING => array(
            'name' => 'IsRoaming',
            'required' => false,
            'type' => 8,
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
        $this->values[self::ORGID] = null;
        $this->values[self::INN] = null;
        $this->values[self::KPP] = null;
        $this->values[self::FULLNAME] = null;
        $this->values[self::SHORTNAME] = null;
        $this->values[self::BOXES] = array();
        $this->values[self::OGRN] = null;
        $this->values[self::FNSPARTICIPANTID] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::FNSREGISTRATIONDATE] = null;
        $this->values[self::DEPARTMENTS] = array();
        $this->values[self::IFNSCODE] = null;
        $this->values[self::ISPILOT] = null;
        $this->values[self::ISACTIVE] = null;
        $this->values[self::ISTEST] = null;
        $this->values[self::ISBRANCH] = null;
        $this->values[self::ISROAMING] = null;
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
     * Sets value of 'OrgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgId($value)
    {
        return $this->set(self::ORGID, $value);
    }

    /**
     * Returns value of 'OrgId' property
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->get(self::ORGID);
    }

    /**
     * Sets value of 'Inn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInn($value)
    {
        return $this->set(self::INN, $value);
    }

    /**
     * Returns value of 'Inn' property
     *
     * @return string
     */
    public function getInn()
    {
        return $this->get(self::INN);
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
     * Sets value of 'FullName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFullName($value)
    {
        return $this->set(self::FULLNAME, $value);
    }

    /**
     * Returns value of 'FullName' property
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->get(self::FULLNAME);
    }

    /**
     * Sets value of 'ShortName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShortName($value)
    {
        return $this->set(self::SHORTNAME, $value);
    }

    /**
     * Returns value of 'ShortName' property
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->get(self::SHORTNAME);
    }

    /**
     * Appends value to 'Boxes' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Box $value Value to append
     *
     * @return null
     */
    public function appendBoxes(\CRM\Lib\Docflow\Api\Diadoc\Model\Box $value)
    {
        return $this->append(self::BOXES, $value);
    }

    /**
     * Clears 'Boxes' list
     *
     * @return null
     */
    public function clearBoxes()
    {
        return $this->clear(self::BOXES);
    }

    /**
     * Returns 'Boxes' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Box[]
     */
    public function getBoxes()
    {
        return $this->get(self::BOXES);
    }

    /**
     * Returns 'Boxes' iterator
     *
     * @return ArrayIterator
     */
    public function getBoxesIterator()
    {
        return new \ArrayIterator($this->get(self::BOXES));
    }

    /**
     * Returns element from 'Boxes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Box
     */
    public function getBoxesAt($offset)
    {
        return $this->get(self::BOXES, $offset);
    }

    /**
     * Returns count of 'Boxes' list
     *
     * @return int
     */
    public function getBoxesCount()
    {
        return $this->count(self::BOXES);
    }

    /**
     * Sets value of 'Ogrn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOgrn($value)
    {
        return $this->set(self::OGRN, $value);
    }

    /**
     * Returns value of 'Ogrn' property
     *
     * @return string
     */
    public function getOgrn()
    {
        return $this->get(self::OGRN);
    }

    /**
     * Sets value of 'FnsParticipantId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFnsParticipantId($value)
    {
        return $this->set(self::FNSPARTICIPANTID, $value);
    }

    /**
     * Returns value of 'FnsParticipantId' property
     *
     * @return string
     */
    public function getFnsParticipantId()
    {
        return $this->get(self::FNSPARTICIPANTID);
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

    /**
     * Sets value of 'FnsRegistrationDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFnsRegistrationDate($value)
    {
        return $this->set(self::FNSREGISTRATIONDATE, $value);
    }

    /**
     * Returns value of 'FnsRegistrationDate' property
     *
     * @return string
     */
    public function getFnsRegistrationDate()
    {
        return $this->get(self::FNSREGISTRATIONDATE);
    }

    /**
     * Appends value to 'Departments' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Department $value Value to append
     *
     * @return null
     */
    public function appendDepartments(\CRM\Lib\Docflow\Api\Diadoc\Model\Department $value)
    {
        return $this->append(self::DEPARTMENTS, $value);
    }

    /**
     * Clears 'Departments' list
     *
     * @return null
     */
    public function clearDepartments()
    {
        return $this->clear(self::DEPARTMENTS);
    }

    /**
     * Returns 'Departments' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Department[]
     */
    public function getDepartments()
    {
        return $this->get(self::DEPARTMENTS);
    }

    /**
     * Returns 'Departments' iterator
     *
     * @return ArrayIterator
     */
    public function getDepartmentsIterator()
    {
        return new \ArrayIterator($this->get(self::DEPARTMENTS));
    }

    /**
     * Returns element from 'Departments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Department
     */
    public function getDepartmentsAt($offset)
    {
        return $this->get(self::DEPARTMENTS, $offset);
    }

    /**
     * Returns count of 'Departments' list
     *
     * @return int
     */
    public function getDepartmentsCount()
    {
        return $this->count(self::DEPARTMENTS);
    }

    /**
     * Sets value of 'IfnsCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIfnsCode($value)
    {
        return $this->set(self::IFNSCODE, $value);
    }

    /**
     * Returns value of 'IfnsCode' property
     *
     * @return string
     */
    public function getIfnsCode()
    {
        return $this->get(self::IFNSCODE);
    }

    /**
     * Sets value of 'IsPilot' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsPilot($value)
    {
        return $this->set(self::ISPILOT, $value);
    }

    /**
     * Returns value of 'IsPilot' property
     *
     * @return bool
     */
    public function getIsPilot()
    {
        return $this->get(self::ISPILOT);
    }

    /**
     * Sets value of 'IsActive' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsActive($value)
    {
        return $this->set(self::ISACTIVE, $value);
    }

    /**
     * Returns value of 'IsActive' property
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->get(self::ISACTIVE);
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
     * Sets value of 'IsBranch' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsBranch($value)
    {
        return $this->set(self::ISBRANCH, $value);
    }

    /**
     * Returns value of 'IsBranch' property
     *
     * @return bool
     */
    public function getIsBranch()
    {
        return $this->get(self::ISBRANCH);
    }

    /**
     * Sets value of 'IsRoaming' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsRoaming($value)
    {
        return $this->set(self::ISROAMING, $value);
    }

    /**
     * Returns value of 'IsRoaming' property
     *
     * @return bool
     */
    public function getIsRoaming()
    {
        return $this->get(self::ISROAMING);
    }
}
}