<?php
/**
 * Auto generated from DocumentWithDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocumentWithDocflow message
 */
class DocumentWithDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const LASTEVENTID = 2;
    const LASTEVENTTIMESTAMP = 3;
    const DOCUMENTINFO = 4;
    const DOCFLOW = 5;
    const INITIALDOCUMENTIDS = 6;
    const SUBORDINATEDOCUMENTIDS = 7;
    const FORWARDDOCUMENTEVENTS = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::LASTEVENTID => array(
            'name' => 'LastEventId',
            'required' => false,
            'type' => 7,
        ),
        self::LASTEVENTTIMESTAMP => array(
            'name' => 'LastEventTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::DOCUMENTINFO => array(
            'name' => 'DocumentInfo',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentInfo'
        ),
        self::DOCFLOW => array(
            'name' => 'Docflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Docflow'
        ),
        self::INITIALDOCUMENTIDS => array(
            'name' => 'InitialDocumentIds',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::SUBORDINATEDOCUMENTIDS => array(
            'name' => 'SubordinateDocumentIds',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::FORWARDDOCUMENTEVENTS => array(
            'name' => 'ForwardDocumentEvents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent'
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::LASTEVENTID] = null;
        $this->values[self::LASTEVENTTIMESTAMP] = null;
        $this->values[self::DOCUMENTINFO] = null;
        $this->values[self::DOCFLOW] = null;
        $this->values[self::INITIALDOCUMENTIDS] = array();
        $this->values[self::SUBORDINATEDOCUMENTIDS] = array();
        $this->values[self::FORWARDDOCUMENTEVENTS] = array();
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
     * Sets value of 'LastEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastEventId($value)
    {
        return $this->set(self::LASTEVENTID, $value);
    }

    /**
     * Returns value of 'LastEventId' property
     *
     * @return string
     */
    public function getLastEventId()
    {
        return $this->get(self::LASTEVENTID);
    }

    /**
     * Sets value of 'LastEventTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setLastEventTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::LASTEVENTTIMESTAMP, $value);
    }

    /**
     * Returns value of 'LastEventTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getLastEventTimestamp()
    {
        return $this->get(self::LASTEVENTTIMESTAMP);
    }

    /**
     * Sets value of 'DocumentInfo' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentInfo $value Property value
     *
     * @return null
     */
    public function setDocumentInfo(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentInfo $value)
    {
        return $this->set(self::DOCUMENTINFO, $value);
    }

    /**
     * Returns value of 'DocumentInfo' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentInfo
     */
    public function getDocumentInfo()
    {
        return $this->get(self::DOCUMENTINFO);
    }

    /**
     * Sets value of 'Docflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Docflow $value Property value
     *
     * @return null
     */
    public function setDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Docflow $value)
    {
        return $this->set(self::DOCFLOW, $value);
    }

    /**
     * Returns value of 'Docflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Docflow
     */
    public function getDocflow()
    {
        return $this->get(self::DOCFLOW);
    }

    /**
     * Appends value to 'InitialDocumentIds' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendInitialDocumentIds(\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value)
    {
        return $this->append(self::INITIALDOCUMENTIDS, $value);
    }

    /**
     * Clears 'InitialDocumentIds' list
     *
     * @return null
     */
    public function clearInitialDocumentIds()
    {
        return $this->clear(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId[]
     */
    public function getInitialDocumentIds()
    {
        return $this->get(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' iterator
     *
     * @return ArrayIterator
     */
    public function getInitialDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::INITIALDOCUMENTIDS));
    }

    /**
     * Returns element from 'InitialDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId
     */
    public function getInitialDocumentIdsAt($offset)
    {
        return $this->get(self::INITIALDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'InitialDocumentIds' list
     *
     * @return int
     */
    public function getInitialDocumentIdsCount()
    {
        return $this->count(self::INITIALDOCUMENTIDS);
    }

    /**
     * Appends value to 'SubordinateDocumentIds' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendSubordinateDocumentIds(\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value)
    {
        return $this->append(self::SUBORDINATEDOCUMENTIDS, $value);
    }

    /**
     * Clears 'SubordinateDocumentIds' list
     *
     * @return null
     */
    public function clearSubordinateDocumentIds()
    {
        return $this->clear(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId[]
     */
    public function getSubordinateDocumentIds()
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' iterator
     *
     * @return ArrayIterator
     */
    public function getSubordinateDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::SUBORDINATEDOCUMENTIDS));
    }

    /**
     * Returns element from 'SubordinateDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId
     */
    public function getSubordinateDocumentIdsAt($offset)
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'SubordinateDocumentIds' list
     *
     * @return int
     */
    public function getSubordinateDocumentIdsCount()
    {
        return $this->count(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Appends value to 'ForwardDocumentEvents' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent $value Value to append
     *
     * @return null
     */
    public function appendForwardDocumentEvents(\CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent $value)
    {
        return $this->append(self::FORWARDDOCUMENTEVENTS, $value);
    }

    /**
     * Clears 'ForwardDocumentEvents' list
     *
     * @return null
     */
    public function clearForwardDocumentEvents()
    {
        return $this->clear(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent[]
     */
    public function getForwardDocumentEvents()
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' iterator
     *
     * @return ArrayIterator
     */
    public function getForwardDocumentEventsIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARDDOCUMENTEVENTS));
    }

    /**
     * Returns element from 'ForwardDocumentEvents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent
     */
    public function getForwardDocumentEventsAt($offset)
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS, $offset);
    }

    /**
     * Returns count of 'ForwardDocumentEvents' list
     *
     * @return int
     */
    public function getForwardDocumentEventsCount()
    {
        return $this->count(self::FORWARDDOCUMENTEVENTS);
    }
}
}