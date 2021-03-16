<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class SolveMeFirst extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:solve-me-first';

    protected static array $inputs = [
        [7, 3],
        [3, 2]
    ];

    protected static array $outputs = [
        "10",
        "5",
    ];

    protected function answer(int $index): string
    {
        return $this->solveMeFirst(static::$inputs[$index][0], static::$inputs[$index][1]);
    }

    private function solveMeFirst(int $a, int $b): int
    {
        return $a + $b;
    }
}
