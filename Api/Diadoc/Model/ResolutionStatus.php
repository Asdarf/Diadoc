<?php
/**
 * Auto generated from ResolutionStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * ResolutionStatus message
 */
class ResolutionStatus extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const TARGET = 2;
    const AUTHORUSERID = 3;
    const AUTHORFIO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'Type',
            'required' => true,
            'type' => 5,
        ),
        self::TARGET => array(
            'name' => 'Target',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionTarget'
        ),
        self::AUTHORUSERID => array(
            'name' => 'AuthorUserId',
            'required' => true,
            'type' => 7,
        ),
        self::AUTHORFIO => array(
            'name' => 'AuthorFIO',
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
        $this->values[self::TYPE] = null;
        $this->values[self::TARGET] = null;
        $this->values[self::AUTHORUSERID] = null;
        $this->values[self::AUTHORFIO] = null;
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
     * Sets value of 'Type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'Type' property
     *
     * @return int
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'Target' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionTarget $value Property value
     *
     * @return null
     */
    public function setTarget(\CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionTarget $value)
    {
        return $this->set(self::TARGET, $value);
    }

    /**
     * Returns value of 'Target' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\ResolutionTarget
     */
    public function getTarget()
    {
        return $this->get(self::TARGET);
    }

    /**
     * Sets value of 'AuthorUserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthorUserId($value)
    {
        return $this->set(self::AUTHORUSERID, $value);
    }

    /**
     * Returns value of 'AuthorUserId' property
     *
     * @return string
     */
    public function getAuthorUserId()
    {
        return $this->get(self::AUTHORUSERID);
    }

    /**
     * Sets value of 'AuthorFIO' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthorFIO($value)
    {
        return $this->set(self::AUTHORFIO, $value);
    }

    /**
     * Returns value of 'AuthorFIO' property
     *
     * @return string
     */
    public function getAuthorFIO()
    {
        return $this->get(self::AUTHORFIO);
    }
}
}