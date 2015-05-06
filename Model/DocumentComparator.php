<?php

namespace CRM\Lib\Docflow\Model;

class DocumentComparator {

    public static function compare(Document $a, Document $b)
    {
        switch ($a->getStatusId()) {
            case Document::STATUS_SIGNED:
                if ($b->getStatusId() != Document::STATUS_SIGNED) {
                    return -1;
                }
                return ($a->getSignedAt() > $b->getSignedAt()) ? -1 : 1;
                break;

            case Document::STATUS_SENT:
                if ($b->getStatusId() == Document::STATUS_SIGNED) {
                    return 1;
                }
                if ($b->getStatusId() != Document::STATUS_SENT) {
                    return -1;
                }
                return ($a->getSentAt() > $b->getSentAt()) ? -1 : 1;
                break;

            case Document::STATUS_REJECTED:
                if ($b->getStatusId() == Document::STATUS_SIGNED || $b->getStatusId() == Document::STATUS_SENT) {
                    return 1;
                }
                if ($b->getStatusId() != Document::STATUS_REJECTED) {
                    return -1;
                }
                return ($a->getSentAt() > $b->getSentAt()) ? -1 : 1;
                break;

            default:
                return ($a->getCreatedAt() > $b->getCreatedAt()) ? -1 : 1;
        }
    }
}
/*============================================================================*
 *  END OF DocumentComparator                                              *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/