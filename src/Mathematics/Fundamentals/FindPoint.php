<?php

namespace HackerRank\Mathematics\Fundamentals;

use HackerRank\HackerRank;

class FindPoint extends HackerRank
{
    protected static $defaultName = 'mathematics:fundamentals:find-point';

    protected static array $inputs = [
        [0, 0, 1, 1],
        [1, 1, 2, 2],
    ];

    protected static array $outputs = [
        "[2,2]",
        "[3,3]",
    ];

    protected function answer(int $index): string
    {
        return json_encode($this->findPoint(
            static::$inputs[$index][0],
            static::$inputs[$index][1],
            static::$inputs[$index][2],
            static::$inputs[$index][3],
        ));
    }

    private function findPoint(int $px, int $py, int $qx, int $qy): array
    {
        $rx = $qx - $px + $qx;
        $ry = $qy - $py + $qy;

        return [$rx, $ry];
    }
}
