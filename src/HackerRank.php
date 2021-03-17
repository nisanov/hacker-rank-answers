<?php

namespace HackerRank;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class HackerRank extends Command
{
    abstract protected function answer(int $index): ?string;

    protected static array $inputs = [];
    protected static array $outputs = [];

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln((new \ReflectionClass($this))->getName());

        for ($i = 0; $i < count(static::$inputs); $i++) {

            $question = $i + 1;

            ob_start();

            $started = microtime(true);
            $answer = $this->answer($i);
            $finished = (microtime(true) - $started) * 1000;

            if ($answer === null) {
                $answer = json_encode(ob_get_contents());
            }

            ob_end_clean();

            if ($answer == static::$outputs[$i]) {
                $response = "correctly";
                $addendum = ".";
            } else {
                $response = "incorrectly";
                $addendum = ", the correct answer is " . static::$outputs[$i] . ".";
            }

            $output->writeln("#{$question} answered {$answer} {$response} in {$finished} ms{$addendum}");
        }

        return Command::SUCCESS;
    }
}
