<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class MiniMaxSum extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:mini-max-sum';

    protected static array $inputs = [
        [1, 3, 5, 7, 9],
        [1, 2, 3, 4, 5],
    ];

    protected static array $outputs = [
        '"16 24\n"',
        '"10 14\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->miniMaxSum(static::$inputs[$index]);

        return null;
    }

    private function miniMaxSum(array $arr): void
    {
        sort($arr);

        echo array_sum(array_slice($arr, 0, -1)), " ", array_sum(array_slice($arr, 1)), PHP_EOL;
    }
}
