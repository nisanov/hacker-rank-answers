<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class Staircase extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:staircase';

    protected static array $inputs = [
        6,
    ];

    protected static array $outputs = [
        '"     #\n    ##\n   ###\n  ####\n #####\n######\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->staircase(static::$inputs[$index]);

        return null;
    }

    private function staircase(int $n): void
    {
        for ($i = 1; $i <= $n; $i++) {
            echo str_pad(str_repeat("#", $i), $n, " ", STR_PAD_LEFT), PHP_EOL;
        }
    }
}
