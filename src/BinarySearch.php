<?php

namespace Ezzaze\BinarySearch;

use Ezzaze\BinarySearch\Exceptions\InvalidHaystackException;

class BinarySearch
{
    /**
     * Search for a needle in a large haystack
     *
     * @param  mixed $needle
     * @param  array $haystack
     * @param  bool $sortHaystack
     * @return bool
     * @throws InvalidHaystackException
     */
    public static function exists(mixed $needle, array $haystack, bool $sortHaystack = true): bool
    {
        if ($sortHaystack) {
            sort($haystack, SORT_ASC);
        }

        $start = 0;
        $end = count($haystack) - 1;

        return static::search($needle, $haystack, $start, $end);
    }

    /**
     * Recusively search in the haystack items for the needle
     *
     * @param  mixed $needle
     * @param  array $haystack
     * @param  int $start
     * @param  int $end
     * @return bool
     */
    private static function search(mixed $needle, array $haystack, int $start, int $end): bool
    {
        if ($end < $start) {
            return false;
        }

        $middle = floor(($end + $start) / 2);
        if ($haystack[$middle] < $needle) {
            return self::search($needle, $haystack, $middle + 1, $end);
        } elseif ($haystack[$middle] > $needle) {
            return self::search($needle, $haystack, $start, $middle - 1);
        }

        return true;
    }
}
