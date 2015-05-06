<?php
/**
 * Auto generated from CloudSignResult.proto at 2015-03-24 12:26:59
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CloudSignResult message
 */
class CloudSignResult extends \ProtobufMessage
{
    /* Field index constants */
    const TOKEN = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOKEN => array(
            'name' => 'Token',
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
        $this->values[self::TOKEN] = null;
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
     * Sets value of 'Token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'Token' property
     *
     * @return string
     */
    public function getToken()
    {
        return $this->get(self::TOKEN);
    }
}
}