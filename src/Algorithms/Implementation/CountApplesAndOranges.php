<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class CountApplesAndOranges extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:count-apples-and-oranges';

    protected static array $inputs = [
        [7, 10, 4, 12, "2, 3, -4", "3, -2, -4"],
        [7, 11, 5, 15, "-2, 2, 1", "5, -6"],
    ];

    protected static array $outputs = [
        '"1\n2\n"',
        '"1\n1\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->countApplesAndOranges(
            static::$inputs[$index][0],
            static::$inputs[$index][1],
            static::$inputs[$index][2],
            static::$inputs[$index][3],
            explode(" ", static::$inputs[$index][4]),
            explode(" ", static::$inputs[$index][5]),
        );

        return null;
    }

    private function countApplesAndOranges(int $s, int $t, int $a, int $b, array $apples, array $oranges): void
    {
        $applesInHouse = 0;
        foreach ($apples as $apple) {
            $apple = $a + (int)$apple;
            if ($s <= $apple && $apple <= $t) {
                $applesInHouse++;
            }
        }

        echo $applesInHouse, PHP_EOL;

        $orangesInHouse = 0;
        foreach ($oranges as $orange) {
            $orange = $b + (int)$orange;
            if ($s <= $orange && $orange <= $t) {
                $orangesInHouse++;
            }
        }

        echo $orangesInHouse, PHP_EOL;
    }
}
