<?php
/**
 * Auto generated from GetDocflowRequest.proto at 2015-03-12 11:46:16
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowRequest message
 */
class GetDocflowRequest extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const LASTEVENTID = 2;
    const INJECTENTITYCONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::LASTEVENTID => array(
            'name' => 'LastEventId',
            'required' => false,
            'type' => 7,
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::LASTEVENTID] = null;
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