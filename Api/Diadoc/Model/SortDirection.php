<?php
/**
 * Auto generated from TimeBasedFilter.proto at 2015-03-12 11:45:32
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model package
 */
namespace CRM\Lib\Docflow\Api\Diadoc\Model {
/**
 * SortDirection enum
 */
final class SortDirection
{
    const UnknownSortDirection = 0;
    const Ascending = 1;
    const Descending = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownSortDirection' => self::UnknownSortDirection,
            'Ascending' => self::Ascending,
            'Descending' => self::Descending,
        );
    }
}
}