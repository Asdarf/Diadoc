<?php
/**
 * Auto generated from NonformalizedDocumentMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.NonformalizedDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument {
/**
 * NonformalizedDocumentMetadata message
 */
class NonformalizedDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentStatus::UnknownNonformalizedDocumentStatus, 
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => 5,
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
        $this->values[self::DOCUMENTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentStatus::UnknownNonformalizedDocumentStatus;
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
     * Sets value of 'DocumentStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocumentStatus($value)
    {
        return $this->set(self::DOCUMENTSTATUS, $value);
    }

    /**
     * Returns value of 'DocumentStatus' property
     *
     * @return int
     */
    public function getDocumentStatus()
    {
        return $this->get(self::DOCUMENTSTATUS);
    }
}
}