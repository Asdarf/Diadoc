<?php
/**
 * Auto generated from DocumentId.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * DocumentId message
 */
class DocumentId extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGEID = 1;
    const ENTITYID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => 7,
        ),
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => true,
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
        $this->values[self::MESSAGEID] = null;
        $this->values[self::ENTITYID] = null;
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
     * Sets value of 'MessageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageId($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'MessageId' property
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->get(self::MESSAGEID);
    }

    /**
     * Sets value of 'EntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'EntityId' property
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->get(self::ENTITYID);
    }
}
}