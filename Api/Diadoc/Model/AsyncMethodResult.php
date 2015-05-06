<?php
/**
 * Auto generated from AsyncMethodResult.proto at 2015-03-24 12:27:37
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * AsyncMethodResult message
 */
class AsyncMethodResult extends \ProtobufMessage
{
    /* Field index constants */
    const TASKID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TASKID => array(
            'name' => 'TaskId',
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
        $this->values[self::TASKID] = null;
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
     * Sets value of 'TaskId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTaskId($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'TaskId' property
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->get(self::TASKID);
    }
}
}