<?php

namespace HackerRank\Miscellaneous;

use HackerRank\HackerRank;

class MinimumSwaps extends HackerRank
{
    protected static $defaultName = 'miscellaneous:minimum-swaps';

    protected static array $inputs = [
        [4, 3, 1, 2],
        [4,3,2,1],
        [7,2,4,3,5,6,1],
    ];

    protected static array $outputs = [
        "3",
        "2",
        "2",
    ];

    protected function answer(int $index): ?string
    {
        return $this->minimumSwaps(static::$inputs[$index]);
    }

    private function minimumSwaps(array $arr): int
    {
        $i = 0;
        while ($i < count($arr)) {
            $arr[$i++]--;
        }

        $swaps = 0;
        $i = 0;
        while ($i < count($arr) - 1) {
            if ($arr[$i] != $i) {
                $tmp = $arr[$arr[$i]];
                $arr[$arr[$i]] = $arr[$i];
                $arr[$i] = $tmp;
                $swaps++;
            } else {
                $i++;
            }
        }

        return $swaps;
    }
}
