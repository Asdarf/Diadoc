<?php
/**
 * Auto generated from DocumentInfo.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * DocumentDirection enum
 */
final class DocumentDirection
{
    const UnknownDocumentDirection = 0;
    const Inbound = 1;
    const Outbound = 2;
    const Internal = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocumentDirection' => self::UnknownDocumentDirection,
            'Inbound' => self::Inbound,
            'Outbound' => self::Outbound,
            'Internal' => self::Internal,
        );
    }
}
}