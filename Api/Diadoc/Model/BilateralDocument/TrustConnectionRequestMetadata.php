<?php
/**
 * Auto generated from TrustConnectionRequestMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.BilateralDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument {
/**
 * TrustConnectionRequestMetadata message
 */
class TrustConnectionRequestMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const TRUSTCONNECTIONREQUESTSTATUS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRUSTCONNECTIONREQUESTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus, 
            'name' => 'TrustConnectionRequestStatus',
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
        $this->values[self::TRUSTCONNECTIONREQUESTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus;
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
     * Sets value of 'TrustConnectionRequestStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTrustConnectionRequestStatus($value)
    {
        return $this->set(self::TRUSTCONNECTIONREQUESTSTATUS, $value);
    }

    /**
     * Returns value of 'TrustConnectionRequestStatus' property
     *
     * @return int
     */
    public function getTrustConnectionRequestStatus()
    {
        return $this->get(self::TRUSTCONNECTIONREQUESTSTATUS);
    }
}
}