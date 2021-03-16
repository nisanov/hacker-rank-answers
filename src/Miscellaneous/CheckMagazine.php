<?php

namespace HackerRank\Miscellaneous;

use HackerRank\HackerRank;

class CheckMagazine extends HackerRank
{
    protected static $defaultName = 'miscellaneous:check-magazine';

    protected static array $inputs = [
        [["give", "me", "one", "grand", "today", "night"], ["give", "one", "grand", "today"]],
        [["two", "times", "three", "is", "not", "four"], ["two", "times", "two", "is", "four"]],
        [["ive", "got", "a", "lovely", "bunch", "of", "coconuts"], ["ive", "got", "some", "coconuts"]],
        [["apgo", "clm", "w", "lxkvg", "mwz", "elo", "bg", "elo", "lxkvg", "elo", "apgo", "apgo", "w", "elo", "bg"], ["elo", "lxkvg", "bg", "mwz", "clm", "w"]],
    ];

    protected static array $outputs = [
        '"Yes\n"',
        '"No\n"',
        '"No\n"',
        '"Yes\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->checkMagazine(static::$inputs[$index][0], static::$inputs[$index][1]);

        return null;
    }

    private function checkMagazine(array $magazine, array $note): void
    {
        foreach ($note as $word) {
            $position = array_search($word, $magazine, true);
            if ($position === false) {
                echo "No", PHP_EOL;
                return;
            }
            unset($magazine[$position]);
        }
        echo "Yes", PHP_EOL;
    }
}
