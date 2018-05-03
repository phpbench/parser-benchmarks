<?php

namespace Phpbench\Benchmarks\Parser;

/**
 * @Revs(10)
 * @Iterations(33)
 */
abstract class ParserBenchCase
{
    public function getSource(): string
    {
        return file_get_contents(__DIR__ . '/../vendor/phpunit/phpunit/src/Framework/TestCase.php');
    }

    abstract public function benchParser();
}
