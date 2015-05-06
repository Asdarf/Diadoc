<?php
/**
 * Auto generated from GetDocflowsByPacketIdResponse.proto at 2015-03-12 11:45:47
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowsByPacketIdResponse message
 */
class GetDocflowsByPacketIdResponse extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTS = 1;
    const NEXTPAGEINDEXKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTS => array(
            'name' => 'Documents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\FetchedDocument'
        ),
        self::NEXTPAGEINDEXKEY => array(
            'name' => 'NextPageIndexKey',
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
        $this->values[self::DOCUMENTS] = array();
        $this->values[self::NEXTPAGEINDEXKEY] = null;
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
     * Appends value to 'Documents' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\FetchedDocument $value Value to append
     *
     * @return null
     */
    public function appendDocuments(\CRM\Lib\Docflow\Api\Diadoc\Model\FetchedDocument $value)
    {
        return $this->append(self::DOCUMENTS, $value);
    }

    /**
     * Clears 'Documents' list
     *
     * @return null
     */
    public function clearDocuments()
    {
        return $this->clear(self::DOCUMENTS);
    }

    /**
     * Returns 'Documents' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\FetchedDocument[]
     */
    public function getDocuments()
    {
        return $this->get(self::DOCUMENTS);
    }

    /**
     * Returns 'Documents' iterator
     *
     * @return ArrayIterator
     */
    public function getDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::DOCUMENTS));
    }

    /**
     * Returns element from 'Documents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\FetchedDocument
     */
    public function getDocumentsAt($offset)
    {
        return $this->get(self::DOCUMENTS, $offset);
    }

    /**
     * Returns count of 'Documents' list
     *
     * @return int
     */
    public function getDocumentsCount()
    {
        return $this->count(self::DOCUMENTS);
    }

    /**
     * Sets value of 'NextPageIndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNextPageIndexKey($value)
    {
        return $this->set(self::NEXTPAGEINDEXKEY, $value);
    }

    /**
     * Returns value of 'NextPageIndexKey' property
     *
     * @return string
     */
    public function getNextPageIndexKey()
    {
        return $this->get(self::NEXTPAGEINDEXKEY);
    }
}
}