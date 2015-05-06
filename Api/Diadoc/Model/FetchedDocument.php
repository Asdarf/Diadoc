<?php
/**
 * Auto generated from FetchedDocument.proto at 2015-03-12 11:45:47
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * FetchedDocument message
 */
class FetchedDocument extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENT = 1;
    const INDEXKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENT => array(
            'name' => 'Document',
            'required' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow'
        ),
        self::INDEXKEY => array(
            'name' => 'IndexKey',
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
        $this->values[self::DOCUMENT] = null;
        $this->values[self::INDEXKEY] = null;
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
     * Sets value of 'Document' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setDocument(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value)
    {
        return $this->set(self::DOCUMENT, $value);
    }

    /**
     * Returns value of 'Document' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->get(self::DOCUMENT);
    }

    /**
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        return $this->get(self::INDEXKEY);
    }
}
}