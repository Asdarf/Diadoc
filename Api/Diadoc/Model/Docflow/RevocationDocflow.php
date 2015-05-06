<?php
/**
 * Auto generated from RevocationDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * RevocationDocflow message
 */
class RevocationDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const REVOCATIONREQUESTATTACHMENT = 2;
    const RECIPIENTSIGNATUREDOCFLOW = 3;
    const RECIPIENTSIGNATUREREJECTIONDOCFLOW = 4;
    const INITIATORBOXID = 5;
    const ISREVOCATIONACCEPTED = 6;
    const ISREVOCATIONREJECTED = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::REVOCATIONREQUESTATTACHMENT => array(
            'name' => 'RevocationRequestAttachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment'
        ),
        self::RECIPIENTSIGNATUREDOCFLOW => array(
            'name' => 'RecipientSignatureDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureDocflow'
        ),
        self::RECIPIENTSIGNATUREREJECTIONDOCFLOW => array(
            'name' => 'RecipientSignatureRejectionDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureRejectionDocflow'
        ),
        self::INITIATORBOXID => array(
            'name' => 'InitiatorBoxId',
            'required' => false,
            'type' => 7,
        ),
        self::ISREVOCATIONACCEPTED => array(
            'name' => 'IsRevocationAccepted',
            'required' => false,
            'type' => 8,
        ),
        self::ISREVOCATIONREJECTED => array(
            'name' => 'IsRevocationRejected',
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::REVOCATIONREQUESTATTACHMENT] = null;
        $this->values[self::RECIPIENTSIGNATUREDOCFLOW] = null;
        $this->values[self::RECIPIENTSIGNATUREREJECTIONDOCFLOW] = null;
        $this->values[self::INITIATORBOXID] = null;
        $this->values[self::ISREVOCATIONACCEPTED] = null;
        $this->values[self::ISREVOCATIONREJECTED] = null;
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
     * Sets value of 'IsFinished' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->get(self::ISFINISHED);
    }

    /**
     * Sets value of 'RevocationRequestAttachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setRevocationRequestAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value)
    {
        return $this->set(self::REVOCATIONREQUESTATTACHMENT, $value);
    }

    /**
     * Returns value of 'RevocationRequestAttachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment
     */
    public function getRevocationRequestAttachment()
    {
        return $this->get(self::REVOCATIONREQUESTATTACHMENT);
    }

    /**
     * Sets value of 'RecipientSignatureDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureDocflow $value)
    {
        return $this->set(self::RECIPIENTSIGNATUREDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureDocflow
     */
    public function getRecipientSignatureDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREDOCFLOW);
    }

    /**
     * Sets value of 'RecipientSignatureRejectionDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureRejectionDocflow $value Property value
     *
     * @return null
     */
    public function setRecipientSignatureRejectionDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureRejectionDocflow $value)
    {
        return $this->set(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'RecipientSignatureRejectionDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureRejectionDocflow
     */
    public function getRecipientSignatureRejectionDocflow()
    {
        return $this->get(self::RECIPIENTSIGNATUREREJECTIONDOCFLOW);
    }

    /**
     * Sets value of 'InitiatorBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitiatorBoxId($value)
    {
        return $this->set(self::INITIATORBOXID, $value);
    }

    /**
     * Returns value of 'InitiatorBoxId' property
     *
     * @return string
     */
    public function getInitiatorBoxId()
    {
        return $this->get(self::INITIATORBOXID);
    }

    /**
     * Sets value of 'IsRevocationAccepted' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsRevocationAccepted($value)
    {
        return $this->set(self::ISREVOCATIONACCEPTED, $value);
    }

    /**
     * Returns value of 'IsRevocationAccepted' property
     *
     * @return bool
     */
    public function getIsRevocationAccepted()
    {
        return $this->get(self::ISREVOCATIONACCEPTED);
    }

    /**
     * Sets value of 'IsRevocationRejected' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsRevocationRejected($value)
    {
        return $this->set(self::ISREVOCATIONREJECTED, $value);
    }

    /**
     * Returns value of 'IsRevocationRejected' property
     *
     * @return bool
     */
    public function getIsRevocationRejected()
    {
        return $this->get(self::ISREVOCATIONREJECTED);
    }
}
}