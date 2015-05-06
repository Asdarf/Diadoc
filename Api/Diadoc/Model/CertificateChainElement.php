<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CertificateChainElement message
 */
class CertificateChainElement extends \ProtobufMessage
{
    /* Field index constants */
    const CERTIFICATECHAINSTATUSFLAGS = 1;
    const DERCERTIFICATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CERTIFICATECHAINSTATUSFLAGS => array(
            'name' => 'CertificateChainStatusFlags',
            'required' => true,
            'type' => 5,
        ),
        self::DERCERTIFICATE => array(
            'name' => 'DerCertificate',
            'required' => true,
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
        $this->values[self::CERTIFICATECHAINSTATUSFLAGS] = null;
        $this->values[self::DERCERTIFICATE] = null;
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
     * Sets value of 'CertificateChainStatusFlags' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCertificateChainStatusFlags($value)
    {
        return $this->set(self::CERTIFICATECHAINSTATUSFLAGS, $value);
    }

    /**
     * Returns value of 'CertificateChainStatusFlags' property
     *
     * @return int
     */
    public function getCertificateChainStatusFlags()
    {
        return $this->get(self::CERTIFICATECHAINSTATUSFLAGS);
    }

    /**
     * Sets value of 'DerCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDerCertificate($value)
    {
        return $this->set(self::DERCERTIFICATE, $value);
    }

    /**
     * Returns value of 'DerCertificate' property
     *
     * @return string
     */
    public function getDerCertificate()
    {
        return $this->get(self::DERCERTIFICATE);
    }
}
}