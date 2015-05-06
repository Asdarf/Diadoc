<?php
/**
 * Auto generated from RoamingNotificationStatus.proto at 2015-03-12 11:46:35
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * RoamingNotificationStatus enum
 */
final class RoamingNotificationStatus
{
    const UnknownRoamingNotificationStatus = 0;
    const NotificationStatusNone = 1;
    const NotificationStatusSuccess = 2;
    const NotificationStatusError = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownRoamingNotificationStatus' => self::UnknownRoamingNotificationStatus,
            'NotificationStatusNone' => self::NotificationStatusNone,
            'NotificationStatusSuccess' => self::NotificationStatusSuccess,
            'NotificationStatusError' => self::NotificationStatusError,
        );
    }
}
}