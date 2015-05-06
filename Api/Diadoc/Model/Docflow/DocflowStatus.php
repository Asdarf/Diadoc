<?php
/**
 * Auto generated from Docflow.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocflowStatus message
 */
class DocflowStatus extends \ProtobufMessage
{
    /* Field index constants */
    const PRIMARYSTATUS = 1;
    const SECONDARYSTATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRIMARYSTATUS => array(
            'name' => 'PrimaryStatus',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel'
        ),
        self::SECONDARYSTATUS => array(
            'name' => 'SecondaryStatus',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel'
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
        $this->values[self::PRIMARYSTATUS] = null;
        $this->values[self::SECONDARYSTATUS] = null;
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
     * Sets value of 'PrimaryStatus' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel $value Property value
     *
     * @return null
     */
    public function setPrimaryStatus(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel $value)
    {
        return $this->set(self::PRIMARYSTATUS, $value);
    }

    /**
     * Returns value of 'PrimaryStatus' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel
     */
    public function getPrimaryStatus()
    {
        return $this->get(self::PRIMARYSTATUS);
    }

    /**
     * Sets value of 'SecondaryStatus' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel $value Property value
     *
     * @return null
     */
    public function setSecondaryStatus(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel $value)
    {
        return $this->set(self::SECONDARYSTATUS, $value);
    }

    /**
     * Returns value of 'SecondaryStatus' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\DocflowStatusModel
     */
    public function getSecondaryStatus()
    {
        return $this->get(self::SECONDARYSTATUS);
    }
}
}