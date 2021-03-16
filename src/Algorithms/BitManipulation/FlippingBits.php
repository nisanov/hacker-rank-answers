<?php

namespace HackerRank\Algorithms\BitManipulation;

use HackerRank\HackerRank;

class FlippingBits extends HackerRank
{
    protected static $defaultName = 'algorithms:bit-manipulation:flipping-bits';

    protected static array $inputs = [
        2147483647,
        1,
        0,
        4,
        123456,
        802743475,
        35601423,
    ];

    protected static array $outputs = [
        2147483648,
        4294967294,
        4294967295,
        4294967291,
        4294843839,
        3492223820,
        4259365872,
    ];

    protected function answer(int $index): ?string
    {
        return $this->flippingBits(static::$inputs[$index]);
    }

    private function flippingBits(int $n): int
    {
        return bindec(substr(decbin(~$n), 32));
    }
}
