<?php
/**
 * Auto generated from Address.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Address message
 */
class Address extends \ProtobufMessage
{
    /* Field index constants */
    const RUSSIANADDRESS = 1;
    const FOREIGNADDRESS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RUSSIANADDRESS => array(
            'name' => 'RussianAddress',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\RussianAddress'
        ),
        self::FOREIGNADDRESS => array(
            'name' => 'ForeignAddress',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ForeignAddress'
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
        $this->values[self::RUSSIANADDRESS] = null;
        $this->values[self::FOREIGNADDRESS] = null;
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
     * Sets value of 'RussianAddress' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\RussianAddress $value Property value
     *
     * @return null
     */
    public function setRussianAddress(\CRM\Lib\Docflow\Api\Diadoc\Model\RussianAddress $value)
    {
        return $this->set(self::RUSSIANADDRESS, $value);
    }

    /**
     * Returns value of 'RussianAddress' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\RussianAddress
     */
    public function getRussianAddress()
    {
        return $this->get(self::RUSSIANADDRESS);
    }

    /**
     * Sets value of 'ForeignAddress' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ForeignAddress $value Property value
     *
     * @return null
     */
    public function setForeignAddress(\CRM\Lib\Docflow\Api\Diadoc\Model\ForeignAddress $value)
    {
        return $this->set(self::FOREIGNADDRESS, $value);
    }

    /**
     * Returns value of 'ForeignAddress' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ForeignAddress
     */
    public function getForeignAddress()
    {
        return $this->get(self::FOREIGNADDRESS);
    }
}
}