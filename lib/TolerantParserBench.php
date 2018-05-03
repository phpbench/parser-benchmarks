<?php

namespace Phpbench\Benchmarks\Parser;

use Microsoft\PhpParser\Parser;
use PhpParser\ParserFactory;

class TolerantParserBench extends ParserBenchCase
{
    public function benchParser()
    {
        $parser = new Parser();
        $parser->parseSourceFile($this->getSource());
    }
}
