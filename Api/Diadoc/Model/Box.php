<?php
/**
 * Auto generated from Box.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Box message
 */
class Box extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const TITLE = 2;
    const ORGANIZATION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'Title',
            'required' => true,
            'type' => 7,
        ),
        self::ORGANIZATION => array(
            'name' => 'Organization',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Organization'
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
        $this->values[self::BOXID] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::ORGANIZATION] = null;
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        return $this->get(self::BOXID);
    }

    /**
     * Sets value of 'Title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'Title' property
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'Organization' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Organization $value Property value
     *
     * @return null
     */
    public function setOrganization(\CRM\Lib\Docflow\Api\Diadoc\Model\Organization $value)
    {
        return $this->set(self::ORGANIZATION, $value);
    }

    /**
     * Returns value of 'Organization' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Organization
     */
    public function getOrganization()
    {
        return $this->get(self::ORGANIZATION);
    }
}
}