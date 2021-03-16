<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class SalesByMatch extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:sales-by-match';

    protected static array $inputs = [
        [7, [1, 2, 1, 2, 1, 3, 2]],
        [9, [10, 20, 20, 10, 10, 30, 50, 10, 20]],
    ];

    protected static array $outputs = [
        "2",
        "3",
    ];

    protected function answer(int $index): ?string
    {
        return $this->sockMerchant(static::$inputs[$index][0], static::$inputs[$index][1]);
    }

    private function sockMerchant(int $n, array $ar): int
    {
        $count = array_count_values($ar);
        return array_reduce($count, function ($pairs, $socks) {
            $pairs += floor($socks / 2);
            return $pairs;
        });
    }
}
