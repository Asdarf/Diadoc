<?php
/**
 * Auto generated from DocumentList.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * DocumentList message
 */
class DocumentList extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALCOUNT = 1;
    const DOCUMENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALCOUNT => array(
            'name' => 'TotalCount',
            'required' => true,
            'type' => 5,
        ),
        self::DOCUMENTS => array(
            'name' => 'Documents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Document'
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
        $this->values[self::TOTALCOUNT] = null;
        $this->values[self::DOCUMENTS] = array();
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
     * Sets value of 'TotalCount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalCount($value)
    {
        return $this->set(self::TOTALCOUNT, $value);
    }

    /**
     * Returns value of 'TotalCount' property
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->get(self::TOTALCOUNT);
    }

    /**
     * Appends value to 'Documents' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Document $value Value to append
     *
     * @return null
     */
    public function appendDocuments(\CRM\Lib\Docflow\Api\Diadoc\Model\Document $value)
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
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Document[]
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
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Document
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
}
}