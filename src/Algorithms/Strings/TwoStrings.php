<?php

namespace HackerRank\Algorithms\Strings;

use HackerRank\HackerRank;

class TwoStrings extends HackerRank
{
    protected static $defaultName = 'algorithms:strings:two-strings';

    protected static array $inputs = [
        ["hello", "world"],
        ["hi", "world"],
    ];

    protected static array $outputs = [
        "YES",
        "NO",
    ];

    protected function answer(int $index): ?string
    {
        return $this->twoStrings(static::$inputs[$index][0], static::$inputs[$index][1]);
    }

    private function twoStrings(string $s1, string $s2): string
    {
        $s1 = str_split($s1);
        $s2 = str_split($s2);

        return (!array_intersect($s1, $s2) ? "NO" : "YES");
    }
}
