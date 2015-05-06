<?php
/**
 * Auto generated from CloudSignConfirmResult.proto at 2015-03-24 12:27:29
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CloudSignConfirmResult message
 */
class CloudSignConfirmResult extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNATURES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNATURES => array(
            'name' => 'Signatures',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2'
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
        $this->values[self::SIGNATURES] = array();
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
     * Appends value to 'Signatures' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2 $value Value to append
     *
     * @return null
     */
    public function appendSignatures(\CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2 $value)
    {
        return $this->append(self::SIGNATURES, $value);
    }

    /**
     * Clears 'Signatures' list
     *
     * @return null
     */
    public function clearSignatures()
    {
        return $this->clear(self::SIGNATURES);
    }

    /**
     * Returns 'Signatures' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2[]
     */
    public function getSignatures()
    {
        return $this->get(self::SIGNATURES);
    }

    /**
     * Returns 'Signatures' iterator
     *
     * @return ArrayIterator
     */
    public function getSignaturesIterator()
    {
        return new \ArrayIterator($this->get(self::SIGNATURES));
    }

    /**
     * Returns element from 'Signatures' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ContentV2
     */
    public function getSignaturesAt($offset)
    {
        return $this->get(self::SIGNATURES, $offset);
    }

    /**
     * Returns count of 'Signatures' list
     *
     * @return int
     */
    public function getSignaturesCount()
    {
        return $this->count(self::SIGNATURES);
    }
}
}