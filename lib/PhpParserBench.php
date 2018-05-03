<?php

namespace Phpbench\Benchmarks\Parser;

use PhpParser\ParserFactory;

class PhpParserBench extends ParserBenchCase
{
    public function benchParser()
    {
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $parser->parse($this->getSource());
    }
}
