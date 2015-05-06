<?php
/**
 * Auto generated from Docflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * Docflow message
 */
class Docflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const DOCUMENTATTACHMENT = 2;
    const DEPARTMENTID = 3;
    const DOCUMENTISDELETED = 4;
    const DOCFLOWSTATUS = 5;
    const SENDTIMESTAMP = 6;
    const DELIVERYTIMESTAMP = 7;
    const INBOUNDINVOICEDOCFLOW = 8;
    const OUTBOUNDINVOICEDOCFLOW = 9;
    const XMLBILATERALDOCFLOW = 10;
    const BILATERALDOCFLOW = 11;
    const UNILATERALDOCFLOW = 12;
    const REVOCATIONDOCFLOW = 13;
    const RESOLUTIONDOCFLOW = 14;
    const CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER = 15;
    const PACKETID = 16;
    const CUSTOMDATA = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => 8,
        ),
        self::DOCUMENTATTACHMENT => array(
            'name' => 'DocumentAttachment',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment'
        ),
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENTISDELETED => array(
            'name' => 'DocumentIsDeleted',
            'required' => false,
            'type' => 8,
        ),
        self::DOCFLOWSTATUS => array(
            'name' => 'DocflowStatus',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatus'
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
        self::INBOUNDINVOICEDOCFLOW => array(
            'name' => 'InboundInvoiceDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceDocflow'
        ),
        self::OUTBOUNDINVOICEDOCFLOW => array(
            'name' => 'OutboundInvoiceDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\OutboundInvoiceDocflow'
        ),
        self::XMLBILATERALDOCFLOW => array(
            'name' => 'XmlBilateralDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\XmlBilateralDocflow'
        ),
        self::BILATERALDOCFLOW => array(
            'name' => 'BilateralDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BilateralDocflow'
        ),
        self::UNILATERALDOCFLOW => array(
            'name' => 'UnilateralDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\UnilateralDocflow'
        ),
        self::REVOCATIONDOCFLOW => array(
            'name' => 'RevocationDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RevocationDocflow'
        ),
        self::RESOLUTIONDOCFLOW => array(
            'name' => 'ResolutionDocflow',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ResolutionDocflow'
        ),
        self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER => array(
            'name' => 'CanDocumentBeRevokedUnilaterallyBySender',
            'required' => false,
            'type' => 8,
        ),
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => false,
            'type' => 7,
        ),
        self::CUSTOMDATA => array(
            'name' => 'CustomData',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\CustomDataItem'
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
        $this->values[self::DOCUMENTATTACHMENT] = null;
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::DOCUMENTISDELETED] = null;
        $this->values[self::DOCFLOWSTATUS] = null;
        $this->values[self::SENDTIMESTAMP] = null;
        $this->values[self::DELIVERYTIMESTAMP] = null;
        $this->values[self::INBOUNDINVOICEDOCFLOW] = null;
        $this->values[self::OUTBOUNDINVOICEDOCFLOW] = null;
        $this->values[self::XMLBILATERALDOCFLOW] = null;
        $this->values[self::BILATERALDOCFLOW] = null;
        $this->values[self::UNILATERALDOCFLOW] = null;
        $this->values[self::REVOCATIONDOCFLOW] = null;
        $this->values[self::RESOLUTIONDOCFLOW] = null;
        $this->values[self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER] = null;
        $this->values[self::PACKETID] = null;
        $this->values[self::CUSTOMDATA] = array();
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
     * Sets value of 'DocumentAttachment' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setDocumentAttachment(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment $value)
    {
        return $this->set(self::DOCUMENTATTACHMENT, $value);
    }

    /**
     * Returns value of 'DocumentAttachment' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\SignedAttachment
     */
    public function getDocumentAttachment()
    {
        return $this->get(self::DOCUMENTATTACHMENT);
    }

    /**
     * Sets value of 'DepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartmentId($value)
    {
        return $this->set(self::DEPARTMENTID, $value);
    }

    /**
     * Returns value of 'DepartmentId' property
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->get(self::DEPARTMENTID);
    }

    /**
     * Sets value of 'DocumentIsDeleted' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setDocumentIsDeleted($value)
    {
        return $this->set(self::DOCUMENTISDELETED, $value);
    }

    /**
     * Returns value of 'DocumentIsDeleted' property
     *
     * @return bool
     */
    public function getDocumentIsDeleted()
    {
        return $this->get(self::DOCUMENTISDELETED);
    }

    /**
     * Sets value of 'DocflowStatus' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatus $value Property value
     *
     * @return null
     */
    public function setDocflowStatus(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatus $value)
    {
        return $this->set(self::DOCFLOWSTATUS, $value);
    }

    /**
     * Returns value of 'DocflowStatus' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatus
     */
    public function getDocflowStatus()
    {
        return $this->get(self::DOCFLOWSTATUS);
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

    /**
     * Sets value of 'InboundInvoiceDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceDocflow $value Property value
     *
     * @return null
     */
    public function setInboundInvoiceDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceDocflow $value)
    {
        return $this->set(self::INBOUNDINVOICEDOCFLOW, $value);
    }

    /**
     * Returns value of 'InboundInvoiceDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\InboundInvoiceDocflow
     */
    public function getInboundInvoiceDocflow()
    {
        return $this->get(self::INBOUNDINVOICEDOCFLOW);
    }

    /**
     * Sets value of 'OutboundInvoiceDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\OutboundInvoiceDocflow $value Property value
     *
     * @return null
     */
    public function setOutboundInvoiceDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\OutboundInvoiceDocflow $value)
    {
        return $this->set(self::OUTBOUNDINVOICEDOCFLOW, $value);
    }

    /**
     * Returns value of 'OutboundInvoiceDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\OutboundInvoiceDocflow
     */
    public function getOutboundInvoiceDocflow()
    {
        return $this->get(self::OUTBOUNDINVOICEDOCFLOW);
    }

    /**
     * Sets value of 'XmlBilateralDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\XmlBilateralDocflow $value Property value
     *
     * @return null
     */
    public function setXmlBilateralDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\XmlBilateralDocflow $value)
    {
        return $this->set(self::XMLBILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'XmlBilateralDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\XmlBilateralDocflow
     */
    public function getXmlBilateralDocflow()
    {
        return $this->get(self::XMLBILATERALDOCFLOW);
    }

    /**
     * Sets value of 'BilateralDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BilateralDocflow $value Property value
     *
     * @return null
     */
    public function setBilateralDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BilateralDocflow $value)
    {
        return $this->set(self::BILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'BilateralDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\BilateralDocflow
     */
    public function getBilateralDocflow()
    {
        return $this->get(self::BILATERALDOCFLOW);
    }

    /**
     * Sets value of 'UnilateralDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\UnilateralDocflow $value Property value
     *
     * @return null
     */
    public function setUnilateralDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\UnilateralDocflow $value)
    {
        return $this->set(self::UNILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'UnilateralDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\UnilateralDocflow
     */
    public function getUnilateralDocflow()
    {
        return $this->get(self::UNILATERALDOCFLOW);
    }

    /**
     * Sets value of 'RevocationDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RevocationDocflow $value Property value
     *
     * @return null
     */
    public function setRevocationDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RevocationDocflow $value)
    {
        return $this->set(self::REVOCATIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'RevocationDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\RevocationDocflow
     */
    public function getRevocationDocflow()
    {
        return $this->get(self::REVOCATIONDOCFLOW);
    }

    /**
     * Sets value of 'ResolutionDocflow' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ResolutionDocflow $value Property value
     *
     * @return null
     */
    public function setResolutionDocflow(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ResolutionDocflow $value)
    {
        return $this->set(self::RESOLUTIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'ResolutionDocflow' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\ResolutionDocflow
     */
    public function getResolutionDocflow()
    {
        return $this->get(self::RESOLUTIONDOCFLOW);
    }

    /**
     * Sets value of 'CanDocumentBeRevokedUnilaterallyBySender' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeRevokedUnilaterallyBySender($value)
    {
        return $this->set(self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER, $value);
    }

    /**
     * Returns value of 'CanDocumentBeRevokedUnilaterallyBySender' property
     *
     * @return bool
     */
    public function getCanDocumentBeRevokedUnilaterallyBySender()
    {
        return $this->get(self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER);
    }

    /**
     * Sets value of 'PacketId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPacketId($value)
    {
        return $this->set(self::PACKETID, $value);
    }

    /**
     * Returns value of 'PacketId' property
     *
     * @return string
     */
    public function getPacketId()
    {
        return $this->get(self::PACKETID);
    }

    /**
     * Appends value to 'CustomData' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\CustomDataItem $value Value to append
     *
     * @return null
     */
    public function appendCustomData(\CRM\Lib\Docflow\Api\Diadoc\Model\CustomDataItem $value)
    {
        return $this->append(self::CUSTOMDATA, $value);
    }

    /**
     * Clears 'CustomData' list
     *
     * @return null
     */
    public function clearCustomData()
    {
        return $this->clear(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\CustomDataItem[]
     */
    public function getCustomData()
    {
        return $this->get(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' iterator
     *
     * @return ArrayIterator
     */
    public function getCustomDataIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMDATA));
    }

    /**
     * Returns element from 'CustomData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\CustomDataItem
     */
    public function getCustomDataAt($offset)
    {
        return $this->get(self::CUSTOMDATA, $offset);
    }

    /**
     * Returns count of 'CustomData' list
     *
     * @return int
     */
    public function getCustomDataCount()
    {
        return $this->count(self::CUSTOMDATA);
    }
}
}