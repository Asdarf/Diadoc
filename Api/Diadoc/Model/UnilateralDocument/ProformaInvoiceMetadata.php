<?php
/**
 * Auto generated from ProformaInvoiceMetadata.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.UnilateralDocument package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument {
/**
 * ProformaInvoiceMetadata message
 */
class ProformaInvoiceMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTSTATUS = 1;
    const TOTAL = 2;
    const VAT = 3;
    const GROUNDS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTSTATUS => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus, 
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
        $this->values[self::DOCUMENTSTATUS] = \CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus;
        $this->values[self::TOTAL] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
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
}
}