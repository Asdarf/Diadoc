<?php
/**
 * Auto generated from Attachment.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * Entity message
 */
class Entity extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITYID = 1;
    const CREATIONTIMESTAMP = 2;
    const CONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => false,
            'type' => 7,
        ),
        self::CREATIONTIMESTAMP => array(
            'name' => 'CreationTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Content'
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
        $this->values[self::ENTITYID] = null;
        $this->values[self::CREATIONTIMESTAMP] = null;
        $this->values[self::CONTENT] = null;
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

    /**
     * Sets value of 'CreationTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setCreationTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::CREATIONTIMESTAMP, $value);
    }

    /**
     * Returns value of 'CreationTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getCreationTimestamp()
    {
        return $this->get(self::CREATIONTIMESTAMP);
    }

    /**
     * Sets value of 'Content' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Content $value Property value
     *
     * @return null
     */
    public function setContent(\CRM\Lib\Docflow\Api\Diadoc\Model\Content $value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }
}
}