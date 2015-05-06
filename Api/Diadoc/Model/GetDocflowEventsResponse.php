<?php
/**
 * Auto generated from GetDocflowEventsResponse.proto at 2015-03-12 11:45:02
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowEventsResponse message
 */
class GetDocflowEventsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALCOUNT = 1;
    const EVENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALCOUNT => array(
            'name' => 'TotalCount',
            'required' => false,
            'type' => 5,
        ),
        self::EVENTS => array(
            'name' => 'Events',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowEvent'
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
        $this->values[self::TOTALCOUNT] = null;
        $this->values[self::EVENTS] = array();
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
     * Sets value of 'TotalCount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalCount($value)
    {
        return $this->set(self::TOTALCOUNT, $value);
    }

    /**
     * Returns value of 'TotalCount' property
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->get(self::TOTALCOUNT);
    }

    /**
     * Appends value to 'Events' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'Events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'Events' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'Events' iterator
     *
     * @return ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'Events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'Events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }
}
}