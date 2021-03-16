<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class JumpingOnClouds extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:jumping-on-clouds';

    protected static array $inputs = [
        [0, 0, 1, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0],
    ];

    protected static array $outputs = [
        "4",
        "3",
        "3",
        "3",
    ];

    protected function answer(int $index): ?string
    {
        return $this->jumpingOnClouds(static::$inputs[$index]);
    }

    private function jumpingOnClouds(array $c): int
    {
        $jumps = 0;

        for ($i = 0; $i < count($c); $i++) {
            $jumps++;
            if (isset($c[$i + 2]) && $c[$i + 2] === 0) {
                $i++;
            }
        }

        return --$jumps;
    }
}
