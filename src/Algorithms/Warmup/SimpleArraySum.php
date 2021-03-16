<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class SimpleArraySum extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:simple-array-sum';

    protected static array $inputs = [
        [1, 2, 3],
        [1, 2, 3, 4, 10, 11]
    ];

    protected static array $outputs = [
        "6",
        "31",
    ];

    protected function answer(int $index): string
    {
        return $this->simpleArraySum(static::$inputs[$index]);
    }

    private function simpleArraySum(array $array): int
    {
        return array_sum($array);
    }
}
