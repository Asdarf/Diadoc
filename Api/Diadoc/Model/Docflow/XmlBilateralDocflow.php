<?php
/**
 * Auto generated from XmlBilateralDocflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * XmlBilateralDocflow message
 */
class XmlBilateralDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const RECEIPTDOCFLOW = 2;
    const BUYERTITLEDOCFLOW = 3;
    const RECIPIENTSIGNATUREREJECTIONDOCFLOW = 4;
    const ISRECEIPTREQUESTED = 5;
    const ISDOCUMENTSIGNEDBYRECIPIENT = 6;
    const ISDOCUMENTREJECTEDBYRECIPIENT = 7;
    const CANDOCUMENTBERECEIPTED = 8;
    const CANDOCUMENTBESIGNEDBYSENDER = 9;
    const CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::RECEIPTDOCFLOW => array(
            'name' => 'ReceiptDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow'
        ),
        self::BUYERTITLEDOCFLOW => array(
            'name' => 'BuyerTitleDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BuyerTitleDocflow'
        ),
        self::RECIPIENTSIGNATUREREJECTIONDOCFLOW => array(
            'name' => 'RecipientSignatureRejectionDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RecipientSignatureRejectionDocflow'
        ),
        self::ISRECEIPTREQUESTED => array(
            'name' => 'IsReceiptRequested',
            'required' => false,
            'type' => 8,
        ),
        self::ISDOCUMENTSIGNEDBYRECIPIENT => array(
            'name' => 'IsDocumentSignedByRecipient',
            'required' => false,
            'type' => 8,
        ),
        self::ISDOCUMENTREJECTEDBYRECIPIENT => array(
            'name' => 'IsDocumentRejectedByRecipient',
            'required' => false,
            'type' => 8,
        ),
        self::CANDOCUMENTBERECEIPTED => array(
            'name' => 'CanDocumentBeReceipted',
            'required' => false,
            'type' => 8,
        ),
        self::CANDOCUMENTBESIGNEDBYSENDER => array(
            'name' => 'CanDocumentBeSignedBySender',
            'required' => false,
            'type' => 8,
        ),
        self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT => array(
            'name' => 'CanDocumentBeSignedOrRejectedByRecipient',
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
        $this->values[self::RECEIPTDOCFLOW] = null;
        $this->values[self::BUYERTITLEDOCFLOW] = null;
        $this->values[self::RECIPIENTSIGNATUREREJECTIONDOCFLOW] = null;
        $this->values[self::ISRECEIPTREQUESTED] = null;
        $this->values[self::ISDOCUMENTSIGNEDBYRECIPIENT] = null;
        $this->values[self::ISDOCUMENTREJECTEDBYRECIPIENT] = null;
        $this->values[self::CANDOCUMENTBERECEIPTED] = null;
        $this->values[self::CANDOCUMENTBESIGNEDBYSENDER] = null;
        $this->values[self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT] = null;
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
     * Sets value of 'ReceiptDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow $value Property value
     *
     * @return null
     */
    public function setReceiptDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow $value)
    {
        return $this->set(self::RECEIPTDOCFLOW, $value);
    }

    /**
     * Returns value of 'ReceiptDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->get(self::RECEIPTDOCFLOW);
    }

    /**
     * Sets value of 'BuyerTitleDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BuyerTitleDocflow $value Property value
     *
     * @return null
     */
    public function setBuyerTitleDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BuyerTitleDocflow $value)
    {
        return $this->set(self::BUYERTITLEDOCFLOW, $value);
    }

    /**
     * Returns value of 'BuyerTitleDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BuyerTitleDocflow
     */
    public function getBuyerTitleDocflow()
    {
        return $this->get(self::BUYERTITLEDOCFLOW);
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
     * Sets value of 'IsReceiptRequested' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsReceiptRequested($value)
    {
        return $this->set(self::ISRECEIPTREQUESTED, $value);
    }

    /**
     * Returns value of 'IsReceiptRequested' property
     *
     * @return bool
     */
    public function getIsReceiptRequested()
    {
        return $this->get(self::ISRECEIPTREQUESTED);
    }

    /**
     * Sets value of 'IsDocumentSignedByRecipient' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsDocumentSignedByRecipient($value)
    {
        return $this->set(self::ISDOCUMENTSIGNEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'IsDocumentSignedByRecipient' property
     *
     * @return bool
     */
    public function getIsDocumentSignedByRecipient()
    {
        return $this->get(self::ISDOCUMENTSIGNEDBYRECIPIENT);
    }

    /**
     * Sets value of 'IsDocumentRejectedByRecipient' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsDocumentRejectedByRecipient($value)
    {
        return $this->set(self::ISDOCUMENTREJECTEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'IsDocumentRejectedByRecipient' property
     *
     * @return bool
     */
    public function getIsDocumentRejectedByRecipient()
    {
        return $this->get(self::ISDOCUMENTREJECTEDBYRECIPIENT);
    }

    /**
     * Sets value of 'CanDocumentBeReceipted' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeReceipted($value)
    {
        return $this->set(self::CANDOCUMENTBERECEIPTED, $value);
    }

    /**
     * Returns value of 'CanDocumentBeReceipted' property
     *
     * @return bool
     */
    public function getCanDocumentBeReceipted()
    {
        return $this->get(self::CANDOCUMENTBERECEIPTED);
    }

    /**
     * Sets value of 'CanDocumentBeSignedBySender' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeSignedBySender($value)
    {
        return $this->set(self::CANDOCUMENTBESIGNEDBYSENDER, $value);
    }

    /**
     * Returns value of 'CanDocumentBeSignedBySender' property
     *
     * @return bool
     */
    public function getCanDocumentBeSignedBySender()
    {
        return $this->get(self::CANDOCUMENTBESIGNEDBYSENDER);
    }

    /**
     * Sets value of 'CanDocumentBeSignedOrRejectedByRecipient' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeSignedOrRejectedByRecipient($value)
    {
        return $this->set(self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT, $value);
    }

    /**
     * Returns value of 'CanDocumentBeSignedOrRejectedByRecipient' property
     *
     * @return bool
     */
    public function getCanDocumentBeSignedOrRejectedByRecipient()
    {
        return $this->get(self::CANDOCUMENTBESIGNEDORREJECTEDBYRECIPIENT);
    }
}
}