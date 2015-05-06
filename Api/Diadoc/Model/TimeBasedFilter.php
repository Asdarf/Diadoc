<?php
/**
 * Auto generated from TimeBasedFilter.proto at 2015-03-12 11:45:32
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * TimeBasedFilter message
 */
class TimeBasedFilter extends \ProtobufMessage
{
    /* Field index constants */
    const FROMTIMESTAMP = 1;
    const TOTIMESTAMP = 2;
    const SORTDIRECTION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMTIMESTAMP => array(
            'name' => 'FromTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::TOTIMESTAMP => array(
            'name' => 'ToTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::SORTDIRECTION => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\SortDirection::Ascending, 
            'name' => 'SortDirection',
            'required' => false,
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
        $this->values[self::FROMTIMESTAMP] = null;
        $this->values[self::TOTIMESTAMP] = null;
        $this->values[self::SORTDIRECTION] = \CRM\Lib\Docflow\Api\Diadoc\Model\SortDirection::Ascending;
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
     * Sets value of 'FromTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setFromTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::FROMTIMESTAMP, $value);
    }

    /**
     * Returns value of 'FromTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getFromTimestamp()
    {
        return $this->get(self::FROMTIMESTAMP);
    }

    /**
     * Sets value of 'ToTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setToTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::TOTIMESTAMP, $value);
    }

    /**
     * Returns value of 'ToTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getToTimestamp()
    {
        return $this->get(self::TOTIMESTAMP);
    }

    /**
     * Sets value of 'SortDirection' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSortDirection($value)
    {
        return $this->set(self::SORTDIRECTION, $value);
    }

    /**
     * Returns value of 'SortDirection' property
     *
     * @return int
     */
    public function getSortDirection()
    {
        return $this->get(self::SORTDIRECTION);
    }
}
}