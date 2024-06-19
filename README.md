# Check Even Odd

Library sederhana untuk memeriksa apakah sebuah bilangan adalah genap atau ganjil.

## Instalasi

Anda dapat menginstal library ini menggunakan Composer. Pastikan Composer sudah terinstal di sistem Anda sebelum melanjutkan.

```bash
composer require vendor/check-even-odd

<?php

require 'vendor/autoload.php';

use Ryan\CheckEvenOdd\EvenOddChecker;

$checker = new EvenOddChecker();

echo $checker->isEven(2) ? '2 adalah bilangan genap' : '2 adalah bilangan ganjil';
echo "\n";
echo $checker->isOdd(3) ? '3 adalah bilangan ganjil' : '3 adalah bilangan genap';

2 adalah bilangan genap
3 adalah bilangan ganjil
