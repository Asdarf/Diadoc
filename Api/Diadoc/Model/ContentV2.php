<?php
/**
 * Auto generated from Content_v2.proto at 2015-03-24 12:27:29
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Content_v2 message
 */
class ContentV2 extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const NAMEONSHELF = 2;
    const PATCHEDCONTENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => 7,
        ),
        self::NAMEONSHELF => array(
            'name' => 'NameOnShelf',
            'required' => false,
            'type' => 7,
        ),
        self::PATCHEDCONTENTID => array(
            'name' => 'PatchedContentId',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::NAMEONSHELF] = null;
        $this->values[self::PATCHEDCONTENTID] = null;
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
     * Sets value of 'Content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return string
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'NameOnShelf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNameOnShelf($value)
    {
        return $this->set(self::NAMEONSHELF, $value);
    }

    /**
     * Returns value of 'NameOnShelf' property
     *
     * @return string
     */
    public function getNameOnShelf()
    {
        return $this->get(self::NAMEONSHELF);
    }

    /**
     * Sets value of 'PatchedContentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPatchedContentId($value)
    {
        return $this->set(self::PATCHEDCONTENTID, $value);
    }

    /**
     * Returns value of 'PatchedContentId' property
     *
     * @return string
     */
    public function getPatchedContentId()
    {
        return $this->get(self::PATCHEDCONTENTID);
    }
}
}