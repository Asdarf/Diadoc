<?php
/**
 * Auto generated from Timestamp.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Timestamp message
 */
class Timestamp extends \ProtobufMessage
{
    /* Field index constants */
    const TICKS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TICKS => array(
            'name' => 'Ticks',
            'required' => true,
            'type' => 3,
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
        $this->values[self::TICKS] = null;
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
     * Sets value of 'Ticks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTicks($value)
    {
        return $this->set(self::TICKS, $value);
    }

    /**
     * Returns value of 'Ticks' property
     *
     * @return int
     */
    public function getTicks()
    {
        return $this->get(self::TICKS);
    }
}
}