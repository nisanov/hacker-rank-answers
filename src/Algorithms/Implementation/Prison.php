<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class Prison extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:prison';

    protected static array $inputs = [
        [6, 6, [4], [2]],
        [2, 2, [1], [2]],
        [3, 2, [1, 2, 3], [1, 2]],
        [5, 5, [1, 2, 5], [1, 2, 5]],
        [6, 6, [1, 2, 3, 5, 6], [1, 2, 5]],
    ];

    protected static array $outputs = [
        "4",
        "4",
        "12",
        "9",
        "12",
    ];

    protected function answer(int $index): ?string
    {
        return $this->prison(
            static::$inputs[$index][0],
            static::$inputs[$index][1],
            static::$inputs[$index][2],
            static::$inputs[$index][3],
        );
    }

    function prison(int $n, int $m, array $h, array $v): int
    {
        sort($h);
        sort($v);

        // extract the groups of sequential values
        $groupedSequential = function (array $values) {
            $groups = [[$values[0]]];
            for ($i = 1; $i < count($values); $i++) {
                $lead = end($groups);
                if ($values[$i] == end($lead) + 1) {
                    $groups[count($groups) - 1][] = $values[$i];
                } else {
                    $groups[] = [$values[$i]];
                }
            }
            return $groups;
        };

        $horizontal = $groupedSequential($h);
        $vertical = $groupedSequential($v);

        return (max(array_map('count', $horizontal)) + 1) * (max(array_map('count', $vertical)) + 1);
    }
}
