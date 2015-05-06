<?php
/**
 * Auto generated from SearchDocflowsResponse.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * SearchDocflowsResponse message
 */
class SearchDocflowsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTS = 1;
    const HAVEMOREDOCUMENTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTS => array(
            'name' => 'Documents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow'
        ),
        self::HAVEMOREDOCUMENTS => array(
            'name' => 'HaveMoreDocuments',
            'required' => false,
            'type' => 8,
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
        $this->values[self::HAVEMOREDOCUMENTS] = null;
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
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value Value to append
     *
     * @return null
     */
    public function appendDocuments(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow $value)
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
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow[]
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
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocumentWithDocflow
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
     * Sets value of 'HaveMoreDocuments' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setHaveMoreDocuments($value)
    {
        return $this->set(self::HAVEMOREDOCUMENTS, $value);
    }

    /**
     * Returns value of 'HaveMoreDocuments' property
     *
     * @return bool
     */
    public function getHaveMoreDocuments()
    {
        return $this->get(self::HAVEMOREDOCUMENTS);
    }
}
}