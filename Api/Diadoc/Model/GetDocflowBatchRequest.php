<?php
/**
 * Auto generated from GetDocflowBatchRequest.proto at 2015-03-12 11:46:16
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * GetDocflowBatchRequest message
 */
class GetDocflowBatchRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUESTS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUESTS => array(
            'name' => 'Requests',
            'repeated' => true,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\GetDocflowRequest'
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
        $this->values[self::REQUESTS] = array();
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
     * Appends value to 'Requests' list
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\GetDocflowRequest $value Value to append
     *
     * @return null
     */
    public function appendRequests(\CRM\Lib\Docflow\Api\Diadoc\Model\GetDocflowRequest $value)
    {
        return $this->append(self::REQUESTS, $value);
    }

    /**
     * Clears 'Requests' list
     *
     * @return null
     */
    public function clearRequests()
    {
        return $this->clear(self::REQUESTS);
    }

    /**
     * Returns 'Requests' list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\GetDocflowRequest[]
     */
    public function getRequests()
    {
        return $this->get(self::REQUESTS);
    }

    /**
     * Returns 'Requests' iterator
     *
     * @return ArrayIterator
     */
    public function getRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::REQUESTS));
    }

    /**
     * Returns element from 'Requests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\GetDocflowRequest
     */
    public function getRequestsAt($offset)
    {
        return $this->get(self::REQUESTS, $offset);
    }

    /**
     * Returns count of 'Requests' list
     *
     * @return int
     */
    public function getRequestsCount()
    {
        return $this->count(self::REQUESTS);
    }
}
}