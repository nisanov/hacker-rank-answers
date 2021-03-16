<?php

namespace HackerRank\ArtificialIntelligence\BotBuilding;

use HackerRank\HackerRank;

class DisplayPathToPrincess extends HackerRank
{
    protected static $defaultName = 'artificial-intelligence:bot-building:display-path-to-princess';

    protected static array $inputs = [
        [
            3,
            [
                "---",
                "-m-",
                "p--",
            ],
        ],
    ];

    protected static array $outputs = [
        '"DOWN\nLEFT\n"',
    ];

    protected function answer(int $index): ?string
    {
        $this->displayPathToPrincess(static::$inputs[$index][0], static::$inputs[$index][1]);

        return null;
    }

    private function displayPathToPrincess(int $n, array $grid): void
    {
        foreach ($grid as $row => $line) {
            $line = str_split($line);
            if (($column = array_search('m', $line)) !== false) {
                $m = ['x' => $row, 'y' => $column];
                if (isset($p)) {
                    break;
                }
            }
            if (($column = array_search('p', $line)) !== false) {
                $p = ['x' => $row, 'y' => $column];
                if (isset($m)) {
                    break;
                }
            }
        }

        $xUnits = $m['x'] - $p['x'];
        $xDirection = $xUnits > 0 ? 'UP' : 'DOWN';
        while ($xUnits !== 0) {
            echo $xDirection, PHP_EOL;
            $xUnits += ($xDirection === 'UP') ? -1 : 1;
        }

        $yUnits = $m['y'] - $p['y'];
        $yDirection = $yUnits > 0 ? 'LEFT' : 'RIGHT';
        while ($yUnits !== 0) {
            echo $yDirection, PHP_EOL;
            $yUnits += ($yDirection === 'LEFT') ? -1 : 1;
        }
    }
}
