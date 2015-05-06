<?php
/**
 * Auto generated from GetDocflowEventsRequest.proto at 2015-03-12 11:45:32
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowEventsRequest message
 */
class GetDocflowEventsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FILTER = 1;
    const AFTERINDEXKEY = 2;
    const POPULATEDOCUMENTS = 3;
    const INJECTENTITYCONTENT = 4;
    const POPULATEPREVIOUSDOCUMENTSTATES = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILTER => array(
            'name' => 'Filter',
            'required' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\TimeBasedFilter'
        ),
        self::AFTERINDEXKEY => array(
            'name' => 'AfterIndexKey',
            'required' => false,
            'type' => 7,
        ),
        self::POPULATEDOCUMENTS => array(
            'default' => false, 
            'name' => 'PopulateDocuments',
            'required' => false,
            'type' => 8,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false, 
            'name' => 'InjectEntityContent',
            'required' => false,
            'type' => 8,
        ),
        self::POPULATEPREVIOUSDOCUMENTSTATES => array(
            'default' => false, 
            'name' => 'PopulatePreviousDocumentStates',
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
        $this->values[self::FILTER] = null;
        $this->values[self::AFTERINDEXKEY] = null;
        $this->values[self::POPULATEDOCUMENTS] = false;
        $this->values[self::INJECTENTITYCONTENT] = false;
        $this->values[self::POPULATEPREVIOUSDOCUMENTSTATES] = false;
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
     * Sets value of 'Filter' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\TimeBasedFilter $value Property value
     *
     * @return null
     */
    public function setFilter(\CRM\Lib\Docflow\Api\Diadoc\Model\TimeBasedFilter $value)
    {
        return $this->set(self::FILTER, $value);
    }

    /**
     * Returns value of 'Filter' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\TimeBasedFilter
     */
    public function getFilter()
    {
        return $this->get(self::FILTER);
    }

    /**
     * Sets value of 'AfterIndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAfterIndexKey($value)
    {
        return $this->set(self::AFTERINDEXKEY, $value);
    }

    /**
     * Returns value of 'AfterIndexKey' property
     *
     * @return string
     */
    public function getAfterIndexKey()
    {
        return $this->get(self::AFTERINDEXKEY);
    }

    /**
     * Sets value of 'PopulateDocuments' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setPopulateDocuments($value)
    {
        return $this->set(self::POPULATEDOCUMENTS, $value);
    }

    /**
     * Returns value of 'PopulateDocuments' property
     *
     * @return bool
     */
    public function getPopulateDocuments()
    {
        return $this->get(self::POPULATEDOCUMENTS);
    }

    /**
     * Sets value of 'InjectEntityContent' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setInjectEntityContent($value)
    {
        return $this->set(self::INJECTENTITYCONTENT, $value);
    }

    /**
     * Returns value of 'InjectEntityContent' property
     *
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return $this->get(self::INJECTENTITYCONTENT);
    }

    /**
     * Sets value of 'PopulatePreviousDocumentStates' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setPopulatePreviousDocumentStates($value)
    {
        return $this->set(self::POPULATEPREVIOUSDOCUMENTSTATES, $value);
    }

    /**
     * Returns value of 'PopulatePreviousDocumentStates' property
     *
     * @return bool
     */
    public function getPopulatePreviousDocumentStates()
    {
        return $this->get(self::POPULATEPREVIOUSDOCUMENTSTATES);
    }
}
}