<?php
/**
 * Auto generated from Docflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocflowStatusModel message
 */
class DocflowStatusModel extends \ProtobufMessage
{
    /* Field index constants */
    const SEVERITY = 1;
    const STATUSTEXT = 2;
    const STATUSHINT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SEVERITY => array(
            'default' => \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusSeverity::UnknownDocflowStatusSeverity, 
            'name' => 'Severity',
            'required' => false,
            'type' => 5,
        ),
        self::STATUSTEXT => array(
            'name' => 'StatusText',
            'required' => false,
            'type' => 7,
        ),
        self::STATUSHINT => array(
            'name' => 'StatusHint',
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
        $this->values[self::SEVERITY] = \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusSeverity::UnknownDocflowStatusSeverity;
        $this->values[self::STATUSTEXT] = null;
        $this->values[self::STATUSHINT] = null;
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
     * Sets value of 'Severity' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSeverity($value)
    {
        return $this->set(self::SEVERITY, $value);
    }

    /**
     * Returns value of 'Severity' property
     *
     * @return int
     */
    public function getSeverity()
    {
        return $this->get(self::SEVERITY);
    }

    /**
     * Sets value of 'StatusText' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusText($value)
    {
        return $this->set(self::STATUSTEXT, $value);
    }

    /**
     * Returns value of 'StatusText' property
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->get(self::STATUSTEXT);
    }

    /**
     * Sets value of 'StatusHint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusHint($value)
    {
        return $this->set(self::STATUSHINT, $value);
    }

    /**
     * Returns value of 'StatusHint' property
     *
     * @return string
     */
    public function getStatusHint()
    {
        return $this->get(self::STATUSHINT);
    }
}
}