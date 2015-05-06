<?php
/**
 * Auto generated from CloudSignFile.proto at 2015-03-24 12:26:24
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CloudSignFile message
 */
class CloudSignFile extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const FILENAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2'
        ),
        self::FILENAME => array(
            'name' => 'FileName',
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
        $this->values[self::FILENAME] = null;
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
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2 $value Property value
     *
     * @return null
     */
    public function setContent(\CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2 $value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'FileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileName($value)
    {
        return $this->set(self::FILENAME, $value);
    }

    /**
     * Returns value of 'FileName' property
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->get(self::FILENAME);
    }
}
}