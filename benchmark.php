<?php
require __DIR__ . '/vendor/autoload.php';

$fast = new Datapp\RandomString\FastRandomStringGenerator();
$flexible = new \Datapp\RandomString\FlexibleRandomStringGenerator();

$loop = 100;
$strlen = 10;

$start = microtime(true);
for ($i = 0; $i < $loop; $i++) {
    echo $fast->generate($strlen) . PHP_EOL;
}
$time1 = (microtime(true) - $start) / $loop;
echo $time1 . PHP_EOL;

$start = microtime(true);
for ($i = 0; $i < $loop; $i++) {
    echo $flexible->generate($strlen) . PHP_EOL;
}
$time2 = (microtime(true) - $start) / $loop;
echo $time2 . PHP_EOL;
echo ($time2 / $time1 * 100) - 100 . PHP_EOL;
