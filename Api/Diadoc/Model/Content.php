<?php
/**
 * Auto generated from Content.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Content message
 */
class Content extends \ProtobufMessage
{
    /* Field index constants */
    const SIZE = 1;
    const DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIZE => array(
            'name' => 'Size',
            'required' => true,
            'type' => 2,
        ),
        self::DATA => array(
            'name' => 'Data',
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
        $this->values[self::SIZE] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'Size' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSize($value)
    {
        return $this->set(self::SIZE, $value);
    }

    /**
     * Returns value of 'Size' property
     *
     * @return int
     */
    public function getSize()
    {
        return $this->get(self::SIZE);
    }

    /**
     * Sets value of 'Data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'Data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }
}
}