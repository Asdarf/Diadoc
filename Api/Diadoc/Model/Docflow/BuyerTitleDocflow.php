<?php
/**
 * Auto generated from XmlBilateralDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * BuyerTitleDocflow message
 */
class BuyerTitleDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const BUYERTITLEATTACHMENT = 2;
    const SENDTIMESTAMP = 3;
    const DELIVERYTIMESTAMP = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::BUYERTITLEATTACHMENT => array(
            'name' => 'BuyerTitleAttachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment'
        ),
        self::SENDTIMESTAMP => array(
            'name' => 'SendTimestamp',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp'
        ),
        self::DELIVERYTIMESTAMP => array(
            'name' => 'DeliveryTimestamp',
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::BUYERTITLEATTACHMENT] = null;
        $this->values[self::SENDTIMESTAMP] = null;
        $this->values[self::DELIVERYTIMESTAMP] = null;
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
     * Sets value of 'BuyerTitleAttachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setBuyerTitleAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value)
    {
        return $this->set(self::BUYERTITLEATTACHMENT, $value);
    }

    /**
     * Returns value of 'BuyerTitleAttachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment
     */
    public function getBuyerTitleAttachment()
    {
        return $this->get(self::BUYERTITLEATTACHMENT);
    }

    /**
     * Sets value of 'SendTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setSendTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::SENDTIMESTAMP, $value);
    }

    /**
     * Returns value of 'SendTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getSendTimestamp()
    {
        return $this->get(self::SENDTIMESTAMP);
    }

    /**
     * Sets value of 'DeliveryTimestamp' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestamp(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::DELIVERYTIMESTAMP, $value);
    }

    /**
     * Returns value of 'DeliveryTimestamp' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getDeliveryTimestamp()
    {
        return $this->get(self::DELIVERYTIMESTAMP);
    }
}
}