<?php

namespace HackerRank\DataStructures\Arrays;

use HackerRank\HackerRank;

class HourglassSum extends HackerRank
{
    protected static $defaultName = 'data-structures:arrays:hourglass-sum';

    protected static array $inputs = [
        [
            [1, 1, 1, 0, 0, 0],
            [0, 1, 0, 0, 0, 0],
            [1, 1, 1, 0, 0, 0],
            [0, 0, 2, 4, 4, 0],
            [0, 0, 0, 2, 0, 0],
            [0, 0, 1, 2, 4, 0],
        ],
        [
            [1, 1, 1, 0, 0, 0],
            [0, 1, 0, 0, 0, 0],
            [1, 1, 1, 0, 0, 0],
            [0, 9, 2, -4, -4, 0],
            [0, 0, 0, -2, 0, 0],
            [0, 0, -1, -2, -4, 0],
        ],
        [
            [-9, -9, -9, 1, 1, 1],
            [0, -9, 0, 4, 3, 2],
            [-9, -9, -9, 1, 2, 3],
            [0, 0, 8, 6, 6, 0],
            [0, 0, 0, -2, 0, 0],
            [0, 0, 1, 2, 4, 0],
        ],
    ];

    protected static array $outputs = [
        "19",
        "13",
        "28",
    ];

    protected function answer(int $index): ?string
    {
        return $this->hourglassSum(static::$inputs[$index]);
    }

    private function hourglassSum(array $array): int
    {
        $hourglass = [];
        $array = array_merge(...$array);
        for ($i = 0, $n = 1; $i <= count($array) - 15; $i++, $n++) {
            $hourglass[] = $array[$i] + $array[$i + 1] + $array[$i + 2] + $array[$i + 7] + $array[$i + 12] + $array[$i + 13] + $array[$i + 14];
            if ($n === 4) {
                $n = 0;
                $i += 2;
            }
        }

        return max($hourglass);
    }
}
