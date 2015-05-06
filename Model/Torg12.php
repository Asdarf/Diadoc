<?php


namespace CRM\Lib\Docflow\Model;


class Torg12 extends Document {

    /** @var Document */
    protected $act;

    function __construct()
    {
        $this->act = new Act();
        parent::__construct();
    }

    /**
     * @return Document
     */
    public function getAct()
    {
        return $this->act;
    }

    /**
     *
     * @param Document $act
     */
    public function setAct($act)
    {
        $this->act = $act;
    }
}
/*============================================================================*
 *  END OF Torg12                                              *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/