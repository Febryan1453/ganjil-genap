<?php

require 'vendor/autoload.php';

use Ryan\CheckEvenOdd\EvenOddChecker;

$checker = new EvenOddChecker();

echo $checker->isEven(2) ? '2 adalah bilangan genap' : '2 adalah bilangan ganjil';
echo "\n";
echo $checker->isOdd(3) ? '3 adalah bilangan ganjil' : '3 adalah bilangan genap';
