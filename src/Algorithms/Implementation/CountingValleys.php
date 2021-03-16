<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class CountingValleys extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:counting-valleys';

    protected static array $inputs = [
        [8, "DDUUUUDD"],
        [8, "UDDDUDUU"],
    ];

    protected static array $outputs = [
        "1",
        "1",
    ];

    protected function answer(int $index): ?string
    {
        return $this->countingValleys(static::$inputs[$index][0], static::$inputs[$index][1]);
    }

    private function countingValleys(int $steps, string $path): int
    {
        $valley = 0;
        for ($i = 0, $level = 0; $i < $steps; $i++) {
            $level += $path[$i] === "D" ? -1 : 1;
            if ($level === 0 && $path[$i] === "U") {
                $valley++;
            }
        }

        return $valley;
    }
}
