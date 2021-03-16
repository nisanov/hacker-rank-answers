<?php

namespace HackerRank\Algorithms\ConstructiveAlgorithms;

use HackerRank\HackerRank;

class MinimumBribes extends HackerRank
{
    protected static $defaultName = 'algorithms:constructive-algorithms:minimum-bribes';

    protected static array $inputs = [
        [2, 1, 5, 3, 4],
        [2, 5, 1, 3, 4],
        [5, 1, 2, 3, 7, 8, 6, 4],
        [1, 2, 5, 3, 7, 8, 6, 4],
        [1, 2, 5, 3, 4, 7, 8, 6],
    ];

    protected static array $outputs = [
        '"3\n"',
        '"Too chaotic\n"',
        '"Too chaotic\n"',
        '"7\n"',
        '"4\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->minimumBribes(static::$inputs[$index]);

        return null;
    }

    private function minimumBribes(array $q): void
    {
        $totalBribes = 0;
        for ($i = count($q); $i > 1; $i--) {
            if ($i != $q[$i - 1]) {
                switch (true) {
                    case $i == $q[$i - 2]:
                        $q[$i - 2] = $q[$i - 1];
                        $totalBribes += 1;
                        break;
                    case $i == $q[$i - 3]:
                        $q[$i - 3] = $q[$i - 2];
                        $q[$i - 2] = $q[$i - 1];
                        $totalBribes += 2;
                        break;
                    default:
                        echo "Too chaotic", PHP_EOL;
                        return;
                }
            }
        }
        echo $totalBribes, PHP_EOL;
    }
}
