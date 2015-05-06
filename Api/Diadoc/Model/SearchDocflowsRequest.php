<?php
/**
 * Auto generated from SearchDocflowsRequest.proto at 2015-03-12 11:46:40
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * SearchDocflowsRequest message
 */
class SearchDocflowsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const QUERYSTRING = 1;
    const COUNT = 2;
    const FIRSTINDEX = 3;
    const SCOPE = 4;
    const INJECTENTITYCONTENT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUERYSTRING => array(
            'name' => 'QueryString',
            'required' => true,
            'type' => 7,
        ),
        self::COUNT => array(
            'default' => 100, 
            'name' => 'Count',
            'required' => false,
            'type' => 5,
        ),
        self::FIRSTINDEX => array(
            'name' => 'FirstIndex',
            'required' => false,
            'type' => 5,
        ),
        self::SCOPE => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\SearchScope::SearchScopeAny, 
            'name' => 'Scope',
            'required' => false,
            'type' => 5,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false, 
            'name' => 'InjectEntityContent',
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
        $this->values[self::QUERYSTRING] = null;
        $this->values[self::COUNT] = 100;
        $this->values[self::FIRSTINDEX] = null;
        $this->values[self::SCOPE] = \CRM\Lib\Docflow\Api\Diadoc\Model\SearchScope::SearchScopeAny;
        $this->values[self::INJECTENTITYCONTENT] = false;
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
     * Sets value of 'QueryString' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQueryString($value)
    {
        return $this->set(self::QUERYSTRING, $value);
    }

    /**
     * Returns value of 'QueryString' property
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->get(self::QUERYSTRING);
    }

    /**
     * Sets value of 'Count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'Count' property
     *
     * @return int
     */
    public function getCount()
    {
        return $this->get(self::COUNT);
    }

    /**
     * Sets value of 'FirstIndex' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFirstIndex($value)
    {
        return $this->set(self::FIRSTINDEX, $value);
    }

    /**
     * Returns value of 'FirstIndex' property
     *
     * @return int
     */
    public function getFirstIndex()
    {
        return $this->get(self::FIRSTINDEX);
    }

    /**
     * Sets value of 'Scope' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setScope($value)
    {
        return $this->set(self::SCOPE, $value);
    }

    /**
     * Returns value of 'Scope' property
     *
     * @return int
     */
    public function getScope()
    {
        return $this->get(self::SCOPE);
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
}
}