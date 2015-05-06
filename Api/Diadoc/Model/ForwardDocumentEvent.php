<?php
/**
 * Auto generated from ForwardDocumentEvent.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * ForwardDocumentEvent message
 */
class ForwardDocumentEvent extends \ProtobufMessage
{
    /* Field index constants */
    const TIMESTAMP = 1;
    const TOBOXID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::TOBOXID => array(
            'name' => 'ToBoxId',
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
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::TOBOXID] = null;
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
     * Sets value of 'Timestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'Timestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getTimestamp()
    {
        return $this->get(self::TIMESTAMP);
    }

    /**
     * Sets value of 'ToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToBoxId($value)
    {
        return $this->set(self::TOBOXID, $value);
    }

    /**
     * Returns value of 'ToBoxId' property
     *
     * @return string
     */
    public function getToBoxId()
    {
        return $this->get(self::TOBOXID);
    }
}
}