<?php

namespace HackerRank\Algorithms\Warmup;

use HackerRank\HackerRank;

class PlusMinus extends HackerRank
{
    protected static $defaultName = 'algorithms:warmup:plus-minus';

    protected static array $inputs = [
        [1,1,0,-1,-1],
        [-4,3,-9,0,4,1],
    ];

    protected static array $outputs = [
        '"0.400000\n0.400000\n0.200000\n"',
        '"0.500000\n0.333333\n0.166667\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->plusMinus(static::$inputs[$index]);

        return null;
    }

    private function plusMinus(array $arr): void
    {
        $range = ['positive' => 0, 'negative' => 0, 'zero' => 0];

        foreach ($arr as $i) {
            switch ($i <=> 0) {
                case 1:
                    $range['positive']++;
                    break;
                case -1:
                    $range['negative']++;
                    break;
                default:
                    $range['zero']++;
            }
        }

        $count = count($arr);

        echo sprintf("%01.6f\n", $range['positive'] / $count);
        echo sprintf("%01.6f\n", $range['negative'] / $count);
        echo sprintf("%01.6f\n", $range['zero'] / $count);
    }
}
