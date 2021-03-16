<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class BirthdayCakeCandles extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:birthday-cake-candles';

    protected static array $inputs = [
        [4, 4, 1, 3],
        [3, 2, 1, 3]
    ];

    protected static array $outputs = [
        "2",
        "2",
    ];

    protected function answer(int $index): string
    {
        return $this->birthdayCakeCandles(static::$inputs[$index]);
    }

    private function birthdayCakeCandles(array $candles): int
    {
        sort($candles);

        $values = array_count_values($candles);

        return array_pop($values);
    }
}
