<?php
/**
 * Auto generated from RevocationStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * RevocationStatus enum
 */
final class RevocationStatus
{
    const UnknownRevocationStatus = 0;
    const RevocationStatusNone = 1;
    const RevocationIsRequestedByMe = 2;
    const RequestsMyRevocation = 3;
    const RevocationAccepted = 4;
    const RevocationRejected = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownRevocationStatus' => self::UnknownRevocationStatus,
            'RevocationStatusNone' => self::RevocationStatusNone,
            'RevocationIsRequestedByMe' => self::RevocationIsRequestedByMe,
            'RequestsMyRevocation' => self::RequestsMyRevocation,
            'RevocationAccepted' => self::RevocationAccepted,
            'RevocationRejected' => self::RevocationRejected,
        );
    }
}
}