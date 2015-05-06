<?php
/**
 * Auto generated from Attachment.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * Signature message
 */
class Signature extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITY = 1;
    const SIGNERBOXID = 2;
    const SIGNERDEPARTMENTID = 3;
    const ISVALID = 4;
    const VERIFICATIONRESULT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITY => array(
            'name' => 'Entity',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity'
        ),
        self::SIGNERBOXID => array(
            'name' => 'SignerBoxId',
            'required' => false,
            'type' => 7,
        ),
        self::SIGNERDEPARTMENTID => array(
            'name' => 'SignerDepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => false,
            'type' => 8,
        ),
        self::VERIFICATIONRESULT => array(
            'name' => 'VerificationResult',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\SignatureVerificationResult'
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
        $this->values[self::ENTITY] = null;
        $this->values[self::SIGNERBOXID] = null;
        $this->values[self::SIGNERDEPARTMENTID] = null;
        $this->values[self::ISVALID] = null;
        $this->values[self::VERIFICATIONRESULT] = null;
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
     * Sets value of 'Entity' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value Property value
     *
     * @return null
     */
    public function setEntity(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value)
    {
        return $this->set(self::ENTITY, $value);
    }

    /**
     * Returns value of 'Entity' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Sets value of 'SignerBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerBoxId($value)
    {
        return $this->set(self::SIGNERBOXID, $value);
    }

    /**
     * Returns value of 'SignerBoxId' property
     *
     * @return string
     */
    public function getSignerBoxId()
    {
        return $this->get(self::SIGNERBOXID);
    }

    /**
     * Sets value of 'SignerDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerDepartmentId($value)
    {
        return $this->set(self::SIGNERDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'SignerDepartmentId' property
     *
     * @return string
     */
    public function getSignerDepartmentId()
    {
        return $this->get(self::SIGNERDEPARTMENTID);
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
     * Sets value of 'VerificationResult' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\SignatureVerificationResult $value Property value
     *
     * @return null
     */
    public function setVerificationResult(\CRM\Lib\Docflow\Api\Diadoc\Model\SignatureVerificationResult $value)
    {
        return $this->set(self::VERIFICATIONRESULT, $value);
    }

    /**
     * Returns value of 'VerificationResult' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\SignatureVerificationResult
     */
    public function getVerificationResult()
    {
        return $this->get(self::VERIFICATIONRESULT);
    }
}
}