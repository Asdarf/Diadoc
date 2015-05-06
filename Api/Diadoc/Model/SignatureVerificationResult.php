<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * SignatureVerificationResult message
 */
class SignatureVerificationResult extends \ProtobufMessage
{
    /* Field index constants */
    const ISVALID = 1;
    const CERTIFICATESTATUS = 2;
    const SIGNATURETIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => true,
            'type' => 8,
        ),
        self::CERTIFICATESTATUS => array(
            'name' => 'CertificateStatus',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\CertificateVerificationResult'
        ),
        self::SIGNATURETIMESTAMP => array(
            'name' => 'SignatureTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
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
        $this->values[self::ISVALID] = null;
        $this->values[self::CERTIFICATESTATUS] = null;
        $this->values[self::SIGNATURETIMESTAMP] = null;
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
     * Sets value of 'IsValid' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsValid($value)
    {
        return $this->set(self::ISVALID, $value);
    }

    /**
     * Returns value of 'IsValid' property
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->get(self::ISVALID);
    }

    /**
     * Sets value of 'CertificateStatus' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\CertificateVerificationResult $value Property value
     *
     * @return null
     */
    public function setCertificateStatus(\CRM\Lib\Docflow\Api\Diadoc\Model\CertificateVerificationResult $value)
    {
        return $this->set(self::CERTIFICATESTATUS, $value);
    }

    /**
     * Returns value of 'CertificateStatus' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\CertificateVerificationResult
     */
    public function getCertificateStatus()
    {
        return $this->get(self::CERTIFICATESTATUS);
    }

    /**
     * Sets value of 'SignatureTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setSignatureTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::SIGNATURETIMESTAMP, $value);
    }

    /**
     * Returns value of 'SignatureTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getSignatureTimestamp()
    {
        return $this->get(self::SIGNATURETIMESTAMP);
    }
}
}