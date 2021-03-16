<?php

namespace HackerRank\Miscellaneous;

use HackerRank\HackerRank;

class Fibonacci extends HackerRank
{
    protected static $defaultName = 'miscellaneous:fibonacci';

    protected static array $inputs = [
        5,
        6,
        7,
        8,
        50,
    ];

    protected static array $outputs = [
        "5",
        "8",
        "13",
        "21",
        "12586269025",
    ];

    protected function answer(int $index): ?string
    {
        return $this->fibonacci(static::$inputs[$index]);
    }

    private function fibonacci(int $position, array &$memo = []): int
    {
        if (isset($memo[$position])) {
            return $memo[$position];
        }

        if ($position <= 2) {
            return 1;
        }

        $memo[$position] = $this->fibonacci($position - 1, $memo) + $this->fibonacci($position - 2, $memo);

        return $memo[$position];
    }
}
