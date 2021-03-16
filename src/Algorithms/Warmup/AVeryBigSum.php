<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class AVeryBigSum extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:a-very-big-sum';

    protected static array $inputs = [
        [1000000001, 1000000002, 1000000003, 1000000004, 1000000005],
    ];

    protected static array $outputs = [
        "5000000015",
    ];

    protected function answer(int $index): string
    {
        return json_encode($this->aVeryBigSum(static::$inputs[$index]));
    }

    private function aVeryBigSum(array $array): int
    {
        return array_sum($array);
    }
}
