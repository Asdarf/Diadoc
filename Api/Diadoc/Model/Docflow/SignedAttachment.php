<?php
/**
 * Auto generated from Attachment.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * SignedAttachment message
 */
class SignedAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const ATTACHMENT = 1;
    const SIGNATURE = 2;
    const COMMENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ATTACHMENT => array(
            'name' => 'Attachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Attachment'
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Signature'
        ),
        self::COMMENT => array(
            'name' => 'Comment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity'
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
        $this->values[self::ATTACHMENT] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::COMMENT] = null;
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
     * Sets value of 'Attachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Attachment $value Property value
     *
     * @return null
     */
    public function setAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Attachment $value)
    {
        return $this->set(self::ATTACHMENT, $value);
    }

    /**
     * Returns value of 'Attachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Attachment
     */
    public function getAttachment()
    {
        return $this->get(self::ATTACHMENT);
    }

    /**
     * Sets value of 'Signature' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Signature $value Property value
     *
     * @return null
     */
    public function setSignature(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Signature $value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'Signature' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Signature
     */
    public function getSignature()
    {
        return $this->get(self::SIGNATURE);
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value Property value
     *
     * @return null
     */
    public function setComment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity
     */
    public function getComment()
    {
        return $this->get(self::COMMENT);
    }
}
}