<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class RepeatedString extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:repeated-string';

    protected static array $inputs = [
        ["aba", 10],
        ["a", 1000000000000],
    ];

    protected static array $outputs = [
        "7",
        "1000000000000",
    ];

    protected function answer(int $index): ?string
    {
        return $this->repeatedString(static::$inputs[$index][0], static::$inputs[$index][1]);
    }

    private function repeatedString(string $s, int $n): int
    {
        $length = strlen($s);
        $stringOccurrences = floor($n / $length);
        $characterRemainder = $n - $stringOccurrences * $length;
        $stringRemainder = substr($s, 0, $characterRemainder);
        $aInString = count_chars($s, 1)[97] ?? 0;
        $aInRemainder = count_chars($stringRemainder, 1)[97] ?? 0;

        return  $aInString * $stringOccurrences + $aInRemainder;
    }
}
