<?php
/**
 * Auto generated from Counteragent.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CounteragentList message
 */
class CounteragentList extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALCOUNT = 1;
    const COUNTERAGENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALCOUNT => array(
            'name' => 'TotalCount',
            'required' => true,
            'type' => 5,
        ),
        self::COUNTERAGENTS => array(
            'name' => 'Counteragents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Counteragent'
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
        $this->values[self::COUNTERAGENTS] = array();
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
     * Appends value to 'Counteragents' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Counteragent $value Value to append
     *
     * @return null
     */
    public function appendCounteragents(\CRM\Lib\Docflow\Api\Diadoc\Model\Counteragent $value)
    {
        return $this->append(self::COUNTERAGENTS, $value);
    }

    /**
     * Clears 'Counteragents' list
     *
     * @return null
     */
    public function clearCounteragents()
    {
        return $this->clear(self::COUNTERAGENTS);
    }

    /**
     * Returns 'Counteragents' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Counteragent[]
     */
    public function getCounteragents()
    {
        return $this->get(self::COUNTERAGENTS);
    }

    /**
     * Returns 'Counteragents' iterator
     *
     * @return ArrayIterator
     */
    public function getCounteragentsIterator()
    {
        return new \ArrayIterator($this->get(self::COUNTERAGENTS));
    }

    /**
     * Returns element from 'Counteragents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Counteragent
     */
    public function getCounteragentsAt($offset)
    {
        return $this->get(self::COUNTERAGENTS, $offset);
    }

    /**
     * Returns count of 'Counteragents' list
     *
     * @return int
     */
    public function getCounteragentsCount()
    {
        return $this->count(self::COUNTERAGENTS);
    }
}
}