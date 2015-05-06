<?php
/**
 * Auto generated from DocflowEvent.proto at 2015-03-12 11:45:02
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocflowEvent message
 */
class DocflowEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTID = 1;
    const TIMESTAMP = 2;
    const DOCUMENTID = 3;
    const INDEXKEY = 4;
    const DOCUMENT = 5;
    const PREVIOUSEVENTID = 6;
    const PREVIOUSDOCUMENTSTATE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTID => array(
            'name' => 'EventId',
            'required' => false,
            'type' => 7,
        ),
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENT => array(
            'name' => 'Document',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow'
        ),
        self::PREVIOUSEVENTID => array(
            'name' => 'PreviousEventId',
            'required' => false,
            'type' => 7,
        ),
        self::PREVIOUSDOCUMENTSTATE => array(
            'name' => 'PreviousDocumentState',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow'
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
        $this->values[self::EVENTID] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::INDEXKEY] = null;
        $this->values[self::DOCUMENT] = null;
        $this->values[self::PREVIOUSEVENTID] = null;
        $this->values[self::PREVIOUSDOCUMENTSTATE] = null;
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
     * Sets value of 'EventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENTID, $value);
    }

    /**
     * Returns value of 'EventId' property
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->get(self::EVENTID);
    }

    /**
     * Sets value of 'Timestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'Timestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getTimestamp()
    {
        return $this->get(self::TIMESTAMP);
    }

    /**
     * Sets value of 'DocumentId' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value Property value
     *
     * @return null
     */
    public function setDocumentId(\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId
     */
    public function getDocumentId()
    {
        return $this->get(self::DOCUMENTID);
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
     * Sets value of 'PreviousEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPreviousEventId($value)
    {
        return $this->set(self::PREVIOUSEVENTID, $value);
    }

    /**
     * Returns value of 'PreviousEventId' property
     *
     * @return string
     */
    public function getPreviousEventId()
    {
        return $this->get(self::PREVIOUSEVENTID);
    }

    /**
     * Sets value of 'PreviousDocumentState' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value Property value
     *
     * @return null
     */
    public function setPreviousDocumentState(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value)
    {
        return $this->set(self::PREVIOUSDOCUMENTSTATE, $value);
    }

    /**
     * Returns value of 'PreviousDocumentState' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow
     */
    public function getPreviousDocumentState()
    {
        return $this->get(self::PREVIOUSDOCUMENTSTATE);
    }
}
}