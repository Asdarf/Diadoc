<?php
/**
 * Auto generated from Counteragent.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Counteragent message
 */
class Counteragent extends \ProtobufMessage
{
    /* Field index constants */
    const INDEXKEY = 1;
    const ORGANIZATION = 2;
    const CURRENTSTATUS = 3;
    const LASTEVENTTIMESTAMPTICKS = 4;
    const MESSAGEFROMCOUNTERAGENT = 6;
    const MESSAGETOCOUNTERAGENT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => 7,
        ),
        self::ORGANIZATION => array(
            'name' => 'Organization',
            'required' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Organization'
        ),
        self::CURRENTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\CounteragentStatus::UnknownCounteragentStatus, 
            'name' => 'CurrentStatus',
            'required' => false,
            'type' => 5,
        ),
        self::LASTEVENTTIMESTAMPTICKS => array(
            'name' => 'LastEventTimestampTicks',
            'required' => true,
            'type' => 3,
        ),
        self::MESSAGEFROMCOUNTERAGENT => array(
            'name' => 'MessageFromCounteragent',
            'required' => false,
            'type' => 7,
        ),
        self::MESSAGETOCOUNTERAGENT => array(
            'name' => 'MessageToCounteragent',
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
        $this->values[self::INDEXKEY] = null;
        $this->values[self::ORGANIZATION] = null;
        $this->values[self::CURRENTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\CounteragentStatus::UnknownCounteragentStatus;
        $this->values[self::LASTEVENTTIMESTAMPTICKS] = null;
        $this->values[self::MESSAGEFROMCOUNTERAGENT] = null;
        $this->values[self::MESSAGETOCOUNTERAGENT] = null;
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
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        return $this->get(self::INDEXKEY);
    }

    /**
     * Sets value of 'Organization' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Organization $value Property value
     *
     * @return null
     */
    public function setOrganization(\CRM\Lib\Docflow\Api\Diadoc\Model\Organization $value)
    {
        return $this->set(self::ORGANIZATION, $value);
    }

    /**
     * Returns value of 'Organization' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Organization
     */
    public function getOrganization()
    {
        return $this->get(self::ORGANIZATION);
    }

    /**
     * Sets value of 'CurrentStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCurrentStatus($value)
    {
        return $this->set(self::CURRENTSTATUS, $value);
    }

    /**
     * Returns value of 'CurrentStatus' property
     *
     * @return int
     */
    public function getCurrentStatus()
    {
        return $this->get(self::CURRENTSTATUS);
    }

    /**
     * Sets value of 'LastEventTimestampTicks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastEventTimestampTicks($value)
    {
        return $this->set(self::LASTEVENTTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'LastEventTimestampTicks' property
     *
     * @return int
     */
    public function getLastEventTimestampTicks()
    {
        return $this->get(self::LASTEVENTTIMESTAMPTICKS);
    }

    /**
     * Sets value of 'MessageFromCounteragent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageFromCounteragent($value)
    {
        return $this->set(self::MESSAGEFROMCOUNTERAGENT, $value);
    }

    /**
     * Returns value of 'MessageFromCounteragent' property
     *
     * @return string
     */
    public function getMessageFromCounteragent()
    {
        return $this->get(self::MESSAGEFROMCOUNTERAGENT);
    }

    /**
     * Sets value of 'MessageToCounteragent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageToCounteragent($value)
    {
        return $this->set(self::MESSAGETOCOUNTERAGENT, $value);
    }

    /**
     * Returns value of 'MessageToCounteragent' property
     *
     * @return string
     */
    public function getMessageToCounteragent()
    {
        return $this->get(self::MESSAGETOCOUNTERAGENT);
    }
}
}