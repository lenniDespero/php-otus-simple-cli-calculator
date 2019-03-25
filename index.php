<?php

require './vendor/autoload.php';

use Otus\Lessons\Lesson5\Classes\Calc;
use Otus\Lessons\Lesson5\Classes\StrategyContext;

$ops = "";
$ops .= "f:"; //Первое число
$ops .= "o:"; //Операция
$ops .= "s:"; //Второе число
$ops .= "i"; //interactive mode

$operations = ['+', '-', '/', 'x'];
$options = getopt($ops, ['help']);
if (array_key_exists('help', $options)) {
    echo 'Использование скрипта: ' . PHP_EOL;
    echo '-f [Первое число]' . PHP_EOL;
    echo '-s [Второе число]' . PHP_EOL;
    echo '-o [Операция] (доступные варианты: ' . implode(', ', $operations) . PHP_EOL;
    exit();
}
if (!is_numeric($options['f']) || !is_numeric($options['s'])) {
    die("ERROR: Параметр -f и -s должны быть числами!\nДля справки вызовите скрипт с ключём --help" . PHP_EOL);
}
if (!in_array($options['o'], $operations)) {
    die("ERROR: Параметр -o неизвестен!\nДля справки вызовите скрипт с ключём --help" . PHP_EOL);
}

$calc = new Calc($options['f'], $options['s']);
$strategyContext = new StrategyContext($options['o']);
echo $strategyContext->getResult($calc) . PHP_EOL;
exit();