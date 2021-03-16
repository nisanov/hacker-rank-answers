<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class CompareTriplets extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:compare-triplets';

    protected static array $inputs = [
        [[1, 2, 3], [3, 2, 1]],
        [[5, 6, 7], [3, 6, 10]],
        [[17, 28, 30], [99, 16, 8]],
    ];

    protected static array $outputs = [
        "[1,1]",
        "[1,1]",
        "[2,1]",
    ];

    protected function answer(int $index): string
    {
        return json_encode($this->compareTriplets(static::$inputs[$index][0], static::$inputs[$index][1]));
    }

    private function compareTriplets(array $a, array $b): array
    {
        $c = [];
        $d = [];

        foreach ($a as $i => $r) {
            $c[] = ($r <=> $b[$i]) > 0 ? 1 : 0;
            $d[] = ($b[$i] <=> $r) > 0 ? 1 : 0;
        }

        return [array_sum($c), array_sum($d)];
    }
}
