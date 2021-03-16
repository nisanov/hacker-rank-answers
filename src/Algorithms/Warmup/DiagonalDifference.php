<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class DiagonalDifference extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:diagonal-difference';

    protected static array $inputs = [
        [[1, 2, 3], [4, 5, 6], [9, 8, 9]],
        [[11, 2, 4], [4, 5, 6], [10, 8, -12]],
    ];

    protected static array $outputs = [
        "2",
        "15",
    ];

    protected function answer(int $index): string
    {
        return $this->diagonalDifference(static::$inputs[$index]);
    }

    private function diagonalDifference($arr): int
    {
        $d1 = [];
        $d2 = [];

        $m = count($arr[0]);
        for ($i = 0; $i < $m; $i++) {
            $d1[] = $arr[$i][$i];
            $d2[] = $arr[$i][$m - $i - 1];
        }

        return abs(array_sum($d1) - array_sum($d2));
    }
}
