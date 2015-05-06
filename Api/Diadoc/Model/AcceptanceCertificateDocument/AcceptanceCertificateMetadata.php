<?php
/**
 * Auto generated from AcceptanceCertificateMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.AcceptanceCertificateDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument {
/**
 * AcceptanceCertificateMetadata message
 */
class AcceptanceCertificateMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const GROUNDS = 4;
    const RECEIPTSTATUS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus::UnknownAcceptanceCertificateDocumentStatus, 
            'name' => 'DocumentStatus',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => 7,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => 7,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => 7,
        ),
        self::RECEIPTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\ReceiptStatus::UnknownReceiptStatus, 
            'name' => 'ReceiptStatus',
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
        $this->values[self::DOCUMENTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus::UnknownAcceptanceCertificateDocumentStatus;
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::RECEIPTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\ReceiptStatus::UnknownReceiptStatus;
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

    /**
     * Sets value of 'Total' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'Total' property
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->get(self::TOTAL);
    }

    /**
     * Sets value of 'Vat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVat($value)
    {
        return $this->set(self::VAT, $value);
    }

    /**
     * Returns value of 'Vat' property
     *
     * @return string
     */
    public function getVat()
    {
        return $this->get(self::VAT);
    }

    /**
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        return $this->get(self::GROUNDS);
    }

    /**
     * Sets value of 'ReceiptStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReceiptStatus($value)
    {
        return $this->set(self::RECEIPTSTATUS, $value);
    }

    /**
     * Returns value of 'ReceiptStatus' property
     *
     * @return int
     */
    public function getReceiptStatus()
    {
        return $this->get(self::RECEIPTSTATUS);
    }
}
}