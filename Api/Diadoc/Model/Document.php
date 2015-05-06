<?php
/**
 * Auto generated from Document.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * Document message
 */
class Document extends \ProtobufMessage
{
    /* Field index constants */
    const INDEXKEY = 1;
    const MESSAGEID = 2;
    const ENTITYID = 3;
    const CREATIONTIMESTAMPTICKS = 4;
    const COUNTERAGENTBOXID = 5;
    const DOCUMENTTYPE = 6;
    const INITIALDOCUMENTIDS = 7;
    const SUBORDINATEDOCUMENTIDS = 8;
    const CONTENT = 9;
    const FILENAME = 10;
    const DOCUMENTDATE = 11;
    const DOCUMENTNUMBER = 12;
    const NONFORMALIZEDDOCUMENTMETADATA = 13;
    const INVOICEMETADATA = 14;
    const TRUSTCONNECTIONREQUESTMETADATA = 15;
    const TORG12METADATA = 16;
    const INVOICEREVISIONMETADATA = 17;
    const INVOICECORRECTIONMETADATA = 18;
    const INVOICECORRECTIONREVISIONMETADATA = 19;
    const ACCEPTANCECERTIFICATEMETADATA = 20;
    const PROFORMAINVOICEMETADATA = 21;
    const XMLTORG12METADATA = 22;
    const XMLACCEPTANCECERTIFICATEMETADATA = 23;
    const ISDELETED = 24;
    const DEPARTMENTID = 25;
    const ISTEST = 26;
    const FROMDEPARTMENTID = 27;
    const TODEPARTMENTID = 28;
    const PRICELISTMETADATA = 29;
    const CUSTOMDOCUMENTID = 30;
    const RESOLUTIONSTATUS = 31;
    const REVOCATIONSTATUS = 32;
    const SENDTIMESTAMPTICKS = 33;
    const DELIVERYTIMESTAMPTICKS = 34;
    const FORWARDDOCUMENTEVENTS = 35;
    const PRICELISTAGREEMENTMETADATA = 36;
    const CERTIFICATEREGISTRYMETADATA = 37;
    const RECONCILIATIONACTMETADATA = 38;
    const CONTRACTMETADATA = 39;
    const TORG13METADATA = 40;
    const SERVICEDETAILSMETADATA = 41;
    const ROAMINGNOTIFICATIONSTATUS = 42;
    const HASCUSTOMPRINTFORM = 43;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => 7,
        ),
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => 7,
        ),
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => true,
            'type' => 7,
        ),
        self::CREATIONTIMESTAMPTICKS => array(
            'name' => 'CreationTimestampTicks',
            'required' => true,
            'type' => 3,
        ),
        self::COUNTERAGENTBOXID => array(
            'name' => 'CounteragentBoxId',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENTTYPE => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentType::UnknownDocumentType, 
            'name' => 'DocumentType',
            'required' => false,
            'type' => 5,
        ),
        self::INITIALDOCUMENTIDS => array(
            'name' => 'InitialDocumentIds',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::SUBORDINATEDOCUMENTIDS => array(
            'name' => 'SubordinateDocumentIds',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId'
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Content'
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => false,
            'type' => 7,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => false,
            'type' => 7,
        ),
        self::NONFORMALIZEDDOCUMENTMETADATA => array(
            'name' => 'NonformalizedDocumentMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentMetadata'
        ),
        self::INVOICEMETADATA => array(
            'name' => 'InvoiceMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceMetadata'
        ),
        self::TRUSTCONNECTIONREQUESTMETADATA => array(
            'name' => 'TrustConnectionRequestMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\TrustConnectionRequestMetadata'
        ),
        self::TORG12METADATA => array(
            'name' => 'Torg12Metadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata'
        ),
        self::INVOICEREVISIONMETADATA => array(
            'name' => 'InvoiceRevisionMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceRevisionMetadata'
        ),
        self::INVOICECORRECTIONMETADATA => array(
            'name' => 'InvoiceCorrectionMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionMetadata'
        ),
        self::INVOICECORRECTIONREVISIONMETADATA => array(
            'name' => 'InvoiceCorrectionRevisionMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionRevisionMetadata'
        ),
        self::ACCEPTANCECERTIFICATEMETADATA => array(
            'name' => 'AcceptanceCertificateMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateMetadata'
        ),
        self::PROFORMAINVOICEMETADATA => array(
            'name' => 'ProformaInvoiceMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ProformaInvoiceMetadata'
        ),
        self::XMLTORG12METADATA => array(
            'name' => 'XmlTorg12Metadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata'
        ),
        self::XMLACCEPTANCECERTIFICATEMETADATA => array(
            'name' => 'XmlAcceptanceCertificateMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata'
        ),
        self::ISDELETED => array(
            'default' => false, 
            'name' => 'IsDeleted',
            'required' => false,
            'type' => 8,
        ),
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::ISTEST => array(
            'default' => false, 
            'name' => 'IsTest',
            'required' => false,
            'type' => 8,
        ),
        self::FROMDEPARTMENTID => array(
            'name' => 'FromDepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => 7,
        ),
        self::PRICELISTMETADATA => array(
            'name' => 'PriceListMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\PriceListMetadata'
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => 7,
        ),
        self::RESOLUTIONSTATUS => array(
            'name' => 'ResolutionStatus',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionStatus'
        ),
        self::REVOCATIONSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\RevocationStatus::UnknownRevocationStatus, 
            'name' => 'RevocationStatus',
            'required' => false,
            'type' => 5,
        ),
        self::SENDTIMESTAMPTICKS => array(
            'name' => 'SendTimestampTicks',
            'required' => false,
            'type' => 3,
        ),
        self::DELIVERYTIMESTAMPTICKS => array(
            'name' => 'DeliveryTimestampTicks',
            'required' => false,
            'type' => 3,
        ),
        self::FORWARDDOCUMENTEVENTS => array(
            'name' => 'ForwardDocumentEvents',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent'
        ),
        self::PRICELISTAGREEMENTMETADATA => array(
            'name' => 'PriceListAgreementMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata'
        ),
        self::CERTIFICATEREGISTRYMETADATA => array(
            'name' => 'CertificateRegistryMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata'
        ),
        self::RECONCILIATIONACTMETADATA => array(
            'name' => 'ReconciliationActMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata'
        ),
        self::CONTRACTMETADATA => array(
            'name' => 'ContractMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\ContractMetadata'
        ),
        self::TORG13METADATA => array(
            'name' => 'Torg13Metadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata'
        ),
        self::SERVICEDETAILSMETADATA => array(
            'name' => 'ServiceDetailsMetadata',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ServiceDetailsMetadata'
        ),
        self::ROAMINGNOTIFICATIONSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\RoamingNotificationStatus::UnknownRoamingNotificationStatus, 
            'name' => 'RoamingNotificationStatus',
            'required' => false,
            'type' => 5,
        ),
        self::HASCUSTOMPRINTFORM => array(
            'default' => false, 
            'name' => 'HasCustomPrintForm',
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
        $this->values[self::INDEXKEY] = null;
        $this->values[self::MESSAGEID] = null;
        $this->values[self::ENTITYID] = null;
        $this->values[self::CREATIONTIMESTAMPTICKS] = null;
        $this->values[self::COUNTERAGENTBOXID] = null;
        $this->values[self::DOCUMENTTYPE] = \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentType::UnknownDocumentType;
        $this->values[self::INITIALDOCUMENTIDS] = array();
        $this->values[self::SUBORDINATEDOCUMENTIDS] = array();
        $this->values[self::CONTENT] = null;
        $this->values[self::FILENAME] = null;
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::NONFORMALIZEDDOCUMENTMETADATA] = null;
        $this->values[self::INVOICEMETADATA] = null;
        $this->values[self::TRUSTCONNECTIONREQUESTMETADATA] = null;
        $this->values[self::TORG12METADATA] = null;
        $this->values[self::INVOICEREVISIONMETADATA] = null;
        $this->values[self::INVOICECORRECTIONMETADATA] = null;
        $this->values[self::INVOICECORRECTIONREVISIONMETADATA] = null;
        $this->values[self::ACCEPTANCECERTIFICATEMETADATA] = null;
        $this->values[self::PROFORMAINVOICEMETADATA] = null;
        $this->values[self::XMLTORG12METADATA] = null;
        $this->values[self::XMLACCEPTANCECERTIFICATEMETADATA] = null;
        $this->values[self::ISDELETED] = false;
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::ISTEST] = false;
        $this->values[self::FROMDEPARTMENTID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::PRICELISTMETADATA] = null;
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::RESOLUTIONSTATUS] = null;
        $this->values[self::REVOCATIONSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\RevocationStatus::UnknownRevocationStatus;
        $this->values[self::SENDTIMESTAMPTICKS] = null;
        $this->values[self::DELIVERYTIMESTAMPTICKS] = null;
        $this->values[self::FORWARDDOCUMENTEVENTS] = array();
        $this->values[self::PRICELISTAGREEMENTMETADATA] = null;
        $this->values[self::CERTIFICATEREGISTRYMETADATA] = null;
        $this->values[self::RECONCILIATIONACTMETADATA] = null;
        $this->values[self::CONTRACTMETADATA] = null;
        $this->values[self::TORG13METADATA] = null;
        $this->values[self::SERVICEDETAILSMETADATA] = null;
        $this->values[self::ROAMINGNOTIFICATIONSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\RoamingNotificationStatus::UnknownRoamingNotificationStatus;
        $this->values[self::HASCUSTOMPRINTFORM] = false;
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
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        return $this->get(self::INDEXKEY);
    }

    /**
     * Sets value of 'MessageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageId($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'MessageId' property
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->get(self::MESSAGEID);
    }

    /**
     * Sets value of 'EntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'EntityId' property
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->get(self::ENTITYID);
    }

    /**
     * Sets value of 'CreationTimestampTicks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCreationTimestampTicks($value)
    {
        return $this->set(self::CREATIONTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'CreationTimestampTicks' property
     *
     * @return int
     */
    public function getCreationTimestampTicks()
    {
        return $this->get(self::CREATIONTIMESTAMPTICKS);
    }

    /**
     * Sets value of 'CounteragentBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCounteragentBoxId($value)
    {
        return $this->set(self::COUNTERAGENTBOXID, $value);
    }

    /**
     * Returns value of 'CounteragentBoxId' property
     *
     * @return string
     */
    public function getCounteragentBoxId()
    {
        return $this->get(self::COUNTERAGENTBOXID);
    }

    /**
     * Sets value of 'DocumentType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDocumentType($value)
    {
        return $this->set(self::DOCUMENTTYPE, $value);
    }

    /**
     * Returns value of 'DocumentType' property
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->get(self::DOCUMENTTYPE);
    }

    /**
     * Appends value to 'InitialDocumentIds' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendInitialDocumentIds(\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value)
    {
        return $this->append(self::INITIALDOCUMENTIDS, $value);
    }

    /**
     * Clears 'InitialDocumentIds' list
     *
     * @return null
     */
    public function clearInitialDocumentIds()
    {
        return $this->clear(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId[]
     */
    public function getInitialDocumentIds()
    {
        return $this->get(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' iterator
     *
     * @return ArrayIterator
     */
    public function getInitialDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::INITIALDOCUMENTIDS));
    }

    /**
     * Returns element from 'InitialDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId
     */
    public function getInitialDocumentIdsAt($offset)
    {
        return $this->get(self::INITIALDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'InitialDocumentIds' list
     *
     * @return int
     */
    public function getInitialDocumentIdsCount()
    {
        return $this->count(self::INITIALDOCUMENTIDS);
    }

    /**
     * Appends value to 'SubordinateDocumentIds' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendSubordinateDocumentIds(\CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId $value)
    {
        return $this->append(self::SUBORDINATEDOCUMENTIDS, $value);
    }

    /**
     * Clears 'SubordinateDocumentIds' list
     *
     * @return null
     */
    public function clearSubordinateDocumentIds()
    {
        return $this->clear(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId[]
     */
    public function getSubordinateDocumentIds()
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' iterator
     *
     * @return ArrayIterator
     */
    public function getSubordinateDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::SUBORDINATEDOCUMENTIDS));
    }

    /**
     * Returns element from 'SubordinateDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\DocumentId
     */
    public function getSubordinateDocumentIdsAt($offset)
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'SubordinateDocumentIds' list
     *
     * @return int
     */
    public function getSubordinateDocumentIdsCount()
    {
        return $this->count(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Sets value of 'Content' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Content $value Property value
     *
     * @return null
     */
    public function setContent(\CRM\Lib\Docflow\Api\Diadoc\Model\Content $value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'FileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileName($value)
    {
        return $this->set(self::FILENAME, $value);
    }

    /**
     * Returns value of 'FileName' property
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->get(self::FILENAME);
    }

    /**
     * Sets value of 'DocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentDate($value)
    {
        return $this->set(self::DOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'DocumentDate' property
     *
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->get(self::DOCUMENTDATE);
    }

    /**
     * Sets value of 'DocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentNumber($value)
    {
        return $this->set(self::DOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentNumber' property
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->get(self::DOCUMENTNUMBER);
    }

    /**
     * Sets value of 'NonformalizedDocumentMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setNonformalizedDocumentMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentMetadata $value)
    {
        return $this->set(self::NONFORMALIZEDDOCUMENTMETADATA, $value);
    }

    /**
     * Returns value of 'NonformalizedDocumentMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\NonformalizedDocument\NonformalizedDocumentMetadata
     */
    public function getNonformalizedDocumentMetadata()
    {
        return $this->get(self::NONFORMALIZEDDOCUMENTMETADATA);
    }

    /**
     * Sets value of 'InvoiceMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceMetadata $value)
    {
        return $this->set(self::INVOICEMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceMetadata
     */
    public function getInvoiceMetadata()
    {
        return $this->get(self::INVOICEMETADATA);
    }

    /**
     * Sets value of 'TrustConnectionRequestMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\TrustConnectionRequestMetadata $value Property value
     *
     * @return null
     */
    public function setTrustConnectionRequestMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\TrustConnectionRequestMetadata $value)
    {
        return $this->set(self::TRUSTCONNECTIONREQUESTMETADATA, $value);
    }

    /**
     * Returns value of 'TrustConnectionRequestMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\TrustConnectionRequestMetadata
     */
    public function getTrustConnectionRequestMetadata()
    {
        return $this->get(self::TRUSTCONNECTIONREQUESTMETADATA);
    }

    /**
     * Sets value of 'Torg12Metadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setTorg12Metadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value)
    {
        return $this->set(self::TORG12METADATA, $value);
    }

    /**
     * Returns value of 'Torg12Metadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata
     */
    public function getTorg12Metadata()
    {
        return $this->get(self::TORG12METADATA);
    }

    /**
     * Sets value of 'InvoiceRevisionMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceRevisionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceRevisionMetadata $value)
    {
        return $this->set(self::INVOICEREVISIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceRevisionMetadata
     */
    public function getInvoiceRevisionMetadata()
    {
        return $this->get(self::INVOICEREVISIONMETADATA);
    }

    /**
     * Sets value of 'InvoiceCorrectionMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionMetadata $value)
    {
        return $this->set(self::INVOICECORRECTIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionMetadata
     */
    public function getInvoiceCorrectionMetadata()
    {
        return $this->get(self::INVOICECORRECTIONMETADATA);
    }

    /**
     * Sets value of 'InvoiceCorrectionRevisionMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionRevisionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionRevisionMetadata $value)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\InvoiceDocument\InvoiceCorrectionRevisionMetadata
     */
    public function getInvoiceCorrectionRevisionMetadata()
    {
        return $this->get(self::INVOICECORRECTIONREVISIONMETADATA);
    }

    /**
     * Sets value of 'AcceptanceCertificateMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateMetadata $value Property value
     *
     * @return null
     */
    public function setAcceptanceCertificateMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateMetadata $value)
    {
        return $this->set(self::ACCEPTANCECERTIFICATEMETADATA, $value);
    }

    /**
     * Returns value of 'AcceptanceCertificateMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateMetadata
     */
    public function getAcceptanceCertificateMetadata()
    {
        return $this->get(self::ACCEPTANCECERTIFICATEMETADATA);
    }

    /**
     * Sets value of 'ProformaInvoiceMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ProformaInvoiceMetadata $value Property value
     *
     * @return null
     */
    public function setProformaInvoiceMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ProformaInvoiceMetadata $value)
    {
        return $this->set(self::PROFORMAINVOICEMETADATA, $value);
    }

    /**
     * Returns value of 'ProformaInvoiceMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ProformaInvoiceMetadata
     */
    public function getProformaInvoiceMetadata()
    {
        return $this->get(self::PROFORMAINVOICEMETADATA);
    }

    /**
     * Sets value of 'XmlTorg12Metadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setXmlTorg12Metadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value)
    {
        return $this->set(self::XMLTORG12METADATA, $value);
    }

    /**
     * Returns value of 'XmlTorg12Metadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata
     */
    public function getXmlTorg12Metadata()
    {
        return $this->get(self::XMLTORG12METADATA);
    }

    /**
     * Sets value of 'XmlAcceptanceCertificateMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setXmlAcceptanceCertificateMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value)
    {
        return $this->set(self::XMLACCEPTANCECERTIFICATEMETADATA, $value);
    }

    /**
     * Returns value of 'XmlAcceptanceCertificateMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata
     */
    public function getXmlAcceptanceCertificateMetadata()
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATEMETADATA);
    }

    /**
     * Sets value of 'IsDeleted' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsDeleted($value)
    {
        return $this->set(self::ISDELETED, $value);
    }

    /**
     * Returns value of 'IsDeleted' property
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->get(self::ISDELETED);
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
     * Sets value of 'IsTest' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsTest($value)
    {
        return $this->set(self::ISTEST, $value);
    }

    /**
     * Returns value of 'IsTest' property
     *
     * @return bool
     */
    public function getIsTest()
    {
        return $this->get(self::ISTEST);
    }

    /**
     * Sets value of 'FromDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromDepartmentId($value)
    {
        return $this->set(self::FROMDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'FromDepartmentId' property
     *
     * @return string
     */
    public function getFromDepartmentId()
    {
        return $this->get(self::FROMDEPARTMENTID);
    }

    /**
     * Sets value of 'ToDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToDepartmentId($value)
    {
        return $this->set(self::TODEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ToDepartmentId' property
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        return $this->get(self::TODEPARTMENTID);
    }

    /**
     * Sets value of 'PriceListMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\PriceListMetadata $value Property value
     *
     * @return null
     */
    public function setPriceListMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\PriceListMetadata $value)
    {
        return $this->set(self::PRICELISTMETADATA, $value);
    }

    /**
     * Returns value of 'PriceListMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\PriceListMetadata
     */
    public function getPriceListMetadata()
    {
        return $this->get(self::PRICELISTMETADATA);
    }

    /**
     * Sets value of 'CustomDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomDocumentId($value)
    {
        return $this->set(self::CUSTOMDOCUMENTID, $value);
    }

    /**
     * Returns value of 'CustomDocumentId' property
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->get(self::CUSTOMDOCUMENTID);
    }

    /**
     * Sets value of 'ResolutionStatus' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionStatus $value Property value
     *
     * @return null
     */
    public function setResolutionStatus(\CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionStatus $value)
    {
        return $this->set(self::RESOLUTIONSTATUS, $value);
    }

    /**
     * Returns value of 'ResolutionStatus' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionStatus
     */
    public function getResolutionStatus()
    {
        return $this->get(self::RESOLUTIONSTATUS);
    }

    /**
     * Sets value of 'RevocationStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRevocationStatus($value)
    {
        return $this->set(self::REVOCATIONSTATUS, $value);
    }

    /**
     * Returns value of 'RevocationStatus' property
     *
     * @return int
     */
    public function getRevocationStatus()
    {
        return $this->get(self::REVOCATIONSTATUS);
    }

    /**
     * Sets value of 'SendTimestampTicks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSendTimestampTicks($value)
    {
        return $this->set(self::SENDTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'SendTimestampTicks' property
     *
     * @return int
     */
    public function getSendTimestampTicks()
    {
        return $this->get(self::SENDTIMESTAMPTICKS);
    }

    /**
     * Sets value of 'DeliveryTimestampTicks' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestampTicks($value)
    {
        return $this->set(self::DELIVERYTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'DeliveryTimestampTicks' property
     *
     * @return int
     */
    public function getDeliveryTimestampTicks()
    {
        return $this->get(self::DELIVERYTIMESTAMPTICKS);
    }

    /**
     * Appends value to 'ForwardDocumentEvents' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent $value Value to append
     *
     * @return null
     */
    public function appendForwardDocumentEvents(\CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent $value)
    {
        return $this->append(self::FORWARDDOCUMENTEVENTS, $value);
    }

    /**
     * Clears 'ForwardDocumentEvents' list
     *
     * @return null
     */
    public function clearForwardDocumentEvents()
    {
        return $this->clear(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent[]
     */
    public function getForwardDocumentEvents()
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' iterator
     *
     * @return ArrayIterator
     */
    public function getForwardDocumentEventsIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARDDOCUMENTEVENTS));
    }

    /**
     * Returns element from 'ForwardDocumentEvents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ForwardDocumentEvent
     */
    public function getForwardDocumentEventsAt($offset)
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS, $offset);
    }

    /**
     * Returns count of 'ForwardDocumentEvents' list
     *
     * @return int
     */
    public function getForwardDocumentEventsCount()
    {
        return $this->count(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Sets value of 'PriceListAgreementMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setPriceListAgreementMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value)
    {
        return $this->set(self::PRICELISTAGREEMENTMETADATA, $value);
    }

    /**
     * Returns value of 'PriceListAgreementMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata
     */
    public function getPriceListAgreementMetadata()
    {
        return $this->get(self::PRICELISTAGREEMENTMETADATA);
    }

    /**
     * Sets value of 'CertificateRegistryMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setCertificateRegistryMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value)
    {
        return $this->set(self::CERTIFICATEREGISTRYMETADATA, $value);
    }

    /**
     * Returns value of 'CertificateRegistryMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata
     */
    public function getCertificateRegistryMetadata()
    {
        return $this->get(self::CERTIFICATEREGISTRYMETADATA);
    }

    /**
     * Sets value of 'ReconciliationActMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setReconciliationActMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata $value)
    {
        return $this->set(self::RECONCILIATIONACTMETADATA, $value);
    }

    /**
     * Returns value of 'ReconciliationActMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BilateralDocumentMetadata
     */
    public function getReconciliationActMetadata()
    {
        return $this->get(self::RECONCILIATIONACTMETADATA);
    }

    /**
     * Sets value of 'ContractMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\ContractMetadata $value Property value
     *
     * @return null
     */
    public function setContractMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\ContractMetadata $value)
    {
        return $this->set(self::CONTRACTMETADATA, $value);
    }

    /**
     * Returns value of 'ContractMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\ContractMetadata
     */
    public function getContractMetadata()
    {
        return $this->get(self::CONTRACTMETADATA);
    }

    /**
     * Sets value of 'Torg13Metadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setTorg13Metadata(\CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata $value)
    {
        return $this->set(self::TORG13METADATA, $value);
    }

    /**
     * Returns value of 'Torg13Metadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\BilateralDocument\BasicDocumentMetadata
     */
    public function getTorg13Metadata()
    {
        return $this->get(self::TORG13METADATA);
    }

    /**
     * Sets value of 'ServiceDetailsMetadata' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ServiceDetailsMetadata $value Property value
     *
     * @return null
     */
    public function setServiceDetailsMetadata(\CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ServiceDetailsMetadata $value)
    {
        return $this->set(self::SERVICEDETAILSMETADATA, $value);
    }

    /**
     * Returns value of 'ServiceDetailsMetadata' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\ServiceDetailsMetadata
     */
    public function getServiceDetailsMetadata()
    {
        return $this->get(self::SERVICEDETAILSMETADATA);
    }

    /**
     * Sets value of 'RoamingNotificationStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRoamingNotificationStatus($value)
    {
        return $this->set(self::ROAMINGNOTIFICATIONSTATUS, $value);
    }

    /**
     * Returns value of 'RoamingNotificationStatus' property
     *
     * @return int
     */
    public function getRoamingNotificationStatus()
    {
        return $this->get(self::ROAMINGNOTIFICATIONSTATUS);
    }

    /**
     * Sets value of 'HasCustomPrintForm' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setHasCustomPrintForm($value)
    {
        return $this->set(self::HASCUSTOMPRINTFORM, $value);
    }

    /**
     * Returns value of 'HasCustomPrintForm' property
     *
     * @return bool
     */
    public function getHasCustomPrintForm()
    {
        return $this->get(self::HASCUSTOMPRINTFORM);
    }
}
}