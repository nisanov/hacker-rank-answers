<?php

namespace HackerRank\Miscellaneous;

use HackerRank\HackerRank;

class ComparatorValue extends HackerRank
{
    protected static $defaultName = 'miscellaneous:comparator-value';

    protected static array $inputs = [
        [[7, 5, 9], [13, 1, 4], 3],
    ];

    protected static array $outputs = [
        "1",
    ];

    protected function answer(int $index): ?string
    {
        return $this->comparatorValue(static::$inputs[$index][0], static::$inputs[$index][1], static::$inputs[$index][2]);
    }

    private function comparatorValue(array $a, array $b, int $d): int
    {
        $comparator = 0;
        foreach ($a as $first) {
            $adheres = true;
            foreach ($b as $second) {
                // absolute difference is not greater than d
                if (abs($first - $second) <= $d) {
                    $adheres = false;
                    break;
                }
            }
            if ($adheres) {
                $comparator++;
            }
        }

        return $comparator;
    }
}
