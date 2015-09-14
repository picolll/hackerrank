<?php

$handle        = fopen("php://stdin", "r");
$n             = fgets($handle);
$sum           = 0;
$ab            = fgets($handle);
$integersArray = explode(' ', $ab);
foreach ($integersArray as $num) {
    $sum += (int)$num;
}
print($sum);
fclose($handle);

