<?php
/**
 * Auto generated from GetDocflowsByPacketIdRequest.proto at 2015-03-12 11:45:41
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowsByPacketIdRequest message
 */
class GetDocflowsByPacketIdRequest extends \ProtobufMessage
{
    /* Field index constants */
    const PACKETID = 1;
    const COUNT = 2;
    const INJECTENTITYCONTENT = 3;
    const AFTERINDEXKEY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => true,
            'type' => 7,
        ),
        self::COUNT => array(
            'default' => 100, 
            'name' => 'Count',
            'required' => false,
            'type' => 5,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false, 
            'name' => 'InjectEntityContent',
            'required' => false,
            'type' => 8,
        ),
        self::AFTERINDEXKEY => array(
            'name' => 'AfterIndexKey',
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
        $this->values[self::PACKETID] = null;
        $this->values[self::COUNT] = 100;
        $this->values[self::INJECTENTITYCONTENT] = false;
        $this->values[self::AFTERINDEXKEY] = null;
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
     * Sets value of 'PacketId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPacketId($value)
    {
        return $this->set(self::PACKETID, $value);
    }

    /**
     * Returns value of 'PacketId' property
     *
     * @return string
     */
    public function getPacketId()
    {
        return $this->get(self::PACKETID);
    }

    /**
     * Sets value of 'Count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'Count' property
     *
     * @return int
     */
    public function getCount()
    {
        return $this->get(self::COUNT);
    }

    /**
     * Sets value of 'InjectEntityContent' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setInjectEntityContent($value)
    {
        return $this->set(self::INJECTENTITYCONTENT, $value);
    }

    /**
     * Returns value of 'InjectEntityContent' property
     *
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return $this->get(self::INJECTENTITYCONTENT);
    }

    /**
     * Sets value of 'AfterIndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAfterIndexKey($value)
    {
        return $this->set(self::AFTERINDEXKEY, $value);
    }

    /**
     * Returns value of 'AfterIndexKey' property
     *
     * @return string
     */
    public function getAfterIndexKey()
    {
        return $this->get(self::AFTERINDEXKEY);
    }
}
}