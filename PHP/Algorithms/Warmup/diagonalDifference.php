<?php

$handle     = fopen("php://stdin", "r");
$n          = fgets($handle);
$finalArray = [];
$d1         = 0;
$d2         = 0;

for ($i = 1; $i <= $n; $i++) {
    $row          = fgets($handle);
    $finalArray[] = explode(' ', $row);
    $d1 += $finalArray[$i - 1][$i - 1];
    $d2 += $finalArray[$i - 1][$n - $i];

}
fclose($handle);
print abs($d1 - $d2);

