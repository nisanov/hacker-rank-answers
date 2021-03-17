<?php

namespace HackerRank\Algorithms\Implementation;

use HackerRank\HackerRank;

class GradingStudents extends HackerRank
{
    protected static $defaultName = 'algorithms:implementation:grading-students';

    protected static array $inputs = [
        [73, 67, 38, 33, 84, 29, 57]
    ];

    protected static array $outputs = [
        "[75,67,40,33,85,29,57]",
    ];

    protected function answer(int $index): ?string
    {
        return json_encode($this->gradingStudents(static::$inputs[$index]));
    }

    private function gradingStudents(array $grades): array
    {
        array_walk($grades, function (&$grade) {
            $difference = 5 - $grade % 5;
            if ($difference < 3) {
                if ($difference + $grade >= 40) {
                    $grade += $difference;
                }
            }
        });

        return $grades;
    }
}
