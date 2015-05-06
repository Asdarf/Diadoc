<?php
/**
 * Auto generated from ResolutionStatusType.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * ResolutionStatusType enum
 */
final class ResolutionStatusType
{
    const None = 0;
    const Approved = 1;
    const Disapproved = 2;
    const ApprovementRequested = 3;
    const SignatureRequested = 4;
    const SignatureDenied = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'None' => self::None,
            'Approved' => self::Approved,
            'Disapproved' => self::Disapproved,
            'ApprovementRequested' => self::ApprovementRequested,
            'SignatureRequested' => self::SignatureRequested,
            'SignatureDenied' => self::SignatureDenied,
        );
    }
}
}