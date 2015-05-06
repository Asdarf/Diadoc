<?php
/**
 * Auto generated from Counteragent.proto at 2015-03-12 11:47:14
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * CounteragentStatus enum
 */
final class CounteragentStatus
{
    const UnknownCounteragentStatus = 0;
    const IsMyCounteragent = 1;
    const InvitesMe = 2;
    const IsInvitedByMe = 3;
    const RejectsMe = 5;
    const IsRejectedByMe = 6;
    const NotInCounteragentList = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownCounteragentStatus' => self::UnknownCounteragentStatus,
            'IsMyCounteragent' => self::IsMyCounteragent,
            'InvitesMe' => self::InvitesMe,
            'IsInvitedByMe' => self::IsInvitedByMe,
            'RejectsMe' => self::RejectsMe,
            'IsRejectedByMe' => self::IsRejectedByMe,
            'NotInCounteragentList' => self::NotInCounteragentList,
        );
    }
}
}