<?php

namespace HackerRank;

use Symfony\Component\Console\CommandLoader\CommandLoaderInterface;

class CommandLoader implements CommandLoaderInterface
{
    public function get(string $name): HackerRank
    {
        $command = $this->convertCommandNameToClassName($name);

        return new $command;
    }

    public function has(string $name): bool
    {
        return class_exists($this->convertCommandNameToClassName($name));
    }

    public function getNames(): array
    {
        return [];
    }

    public function convertCommandNameToClassName(string $name): string
    {
        $parts = explode(':', $name);

        array_walk($parts, fn(&$part) => $part = str_replace(' ', '', ucwords(str_replace('-', ' ', $part))));

        return "HackerRank\\" . implode("\\", $parts);
    }
}
