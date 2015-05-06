<?php
/**
 * Auto generated from SignatureVerificationResult.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CertificateVerificationResult message
 */
class CertificateVerificationResult extends \ProtobufMessage
{
    /* Field index constants */
    const ISVALID = 2;
    const CERTIFICATECHAIN = 3;
    const VERIFICATIONTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISVALID => array(
            'name' => 'IsValid',
            'required' => true,
            'type' => 8,
        ),
        self::CERTIFICATECHAIN => array(
            'name' => 'CertificateChain',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\CertificateChainElement'
        ),
        self::VERIFICATIONTIME => array(
            'name' => 'VerificationTime',
            'required' => true,
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
        $this->values[self::ISVALID] = null;
        $this->values[self::CERTIFICATECHAIN] = array();
        $this->values[self::VERIFICATIONTIME] = null;
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
     * Appends value to 'CertificateChain' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\CertificateChainElement $value Value to append
     *
     * @return null
     */
    public function appendCertificateChain(\CRM\Lib\Docflow\Api\Diadoc\Model\CertificateChainElement $value)
    {
        return $this->append(self::CERTIFICATECHAIN, $value);
    }

    /**
     * Clears 'CertificateChain' list
     *
     * @return null
     */
    public function clearCertificateChain()
    {
        return $this->clear(self::CERTIFICATECHAIN);
    }

    /**
     * Returns 'CertificateChain' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\CertificateChainElement[]
     */
    public function getCertificateChain()
    {
        return $this->get(self::CERTIFICATECHAIN);
    }

    /**
     * Returns 'CertificateChain' iterator
     *
     * @return ArrayIterator
     */
    public function getCertificateChainIterator()
    {
        return new \ArrayIterator($this->get(self::CERTIFICATECHAIN));
    }

    /**
     * Returns element from 'CertificateChain' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\CertificateChainElement
     */
    public function getCertificateChainAt($offset)
    {
        return $this->get(self::CERTIFICATECHAIN, $offset);
    }

    /**
     * Returns count of 'CertificateChain' list
     *
     * @return int
     */
    public function getCertificateChainCount()
    {
        return $this->count(self::CERTIFICATECHAIN);
    }

    /**
     * Sets value of 'VerificationTime' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value Property value
     *
     * @return null
     */
    public function setVerificationTime(\CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp $value)
    {
        return $this->set(self::VERIFICATIONTIME, $value);
    }

    /**
     * Returns value of 'VerificationTime' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Timestamp
     */
    public function getVerificationTime()
    {
        return $this->get(self::VERIFICATIONTIME);
    }
}
}