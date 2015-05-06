<?php
/**
 * Auto generated from CustomDataItem.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CustomDataItem message
 */
class CustomDataItem extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'Key',
            'required' => true,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'Value',
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'Key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'Key' property
     *
     * @return string
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Sets value of 'Value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'Value' property
     *
     * @return string
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }
}
}