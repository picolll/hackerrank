<?php

$handle           = fopen("php://stdin", "r");
$n                = fgets($handle);
$sum              = 0;
$ab               = fgets($handle);
$integersArray    = explode(' ', $ab);
$fracturePositive = 0;
$fractureNegative = 0;
$fractureZero     = 0;
foreach ($integersArray as $num) {
    ($num > 0) ? $fracturePositive++ : (($num < 0) ? $fractureNegative++ : $fractureZero++);
}
$a1 = (int)$fracturePositive / $n;
$a2 = (int)$fractureNegative / $n;
$a3 = (int)$fractureZero / $n;
print($a1. "\n");
print($a2. "\n");
print($a3. "\n");
fclose($handle);

