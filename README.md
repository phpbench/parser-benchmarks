PHP Parser Benchmarks
=====================

Comparison of [nikic/php-parser](https://github.com/nikic/PHP-Parser) and the
[Tolerant PHP Parser](https://github.com/Microsoft/tolerant-php-parser) when
parsing the PHPUnit TestCase (version 5.0 for no particular reason other than
it's huge).

Example result:

```
./vendor/bin/phpbench report --uuid=latest --report='extends:aggregate,cols:[benchmark,revs,its,mem_peak,mode,rstdev]' --time-unit=milliseconds           master ◼
suite: 133ee179a3d6f266c949f9486ba0dc8c918fd348, date: 2018-05-03, stime: 22:26:30
+---------------------+------+-----+-------------+----------+--------+
| benchmark           | revs | its | mem_peak    | mode     | rstdev |
+---------------------+------+-----+-------------+----------+--------+
| TolerantParserBench | 10   | 33  | 21,043,208b | 53.934ms | 3.37%  |
| PhpParserBench      | 10   | 33  | 42,620,512b | 62.045ms | 5.27%  |
+---------------------+------+-----+-------------+----------+--------+
```

