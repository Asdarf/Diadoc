<?php
/**
 * Auto generated from UnilateralDocumentStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.UnilateralDocument package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model\UnilateralDocument {
/**
 * UnilateralDocumentStatus enum
 */
final class UnilateralDocumentStatus
{
    const UnknownUnilateralDocumentStatus = 0;
    const Outbound = 1;
    const OutboundWaitingForSenderSignature = 4;
    const OutboundInvalidSenderSignature = 5;
    const Inbound = 2;
    const Internal = 3;
    const InternalWaitingForSenderSignature = 6;
    const InternalInvalidSenderSignature = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownUnilateralDocumentStatus' => self::UnknownUnilateralDocumentStatus,
            'Outbound' => self::Outbound,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'Inbound' => self::Inbound,
            'Internal' => self::Internal,
            'InternalWaitingForSenderSignature' => self::InternalWaitingForSenderSignature,
            'InternalInvalidSenderSignature' => self::InternalInvalidSenderSignature,
        );
    }
}
}