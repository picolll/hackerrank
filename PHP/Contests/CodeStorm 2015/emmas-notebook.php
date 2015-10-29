<?php

$handle = fopen("php://stdin", "r");
$t      = trim(fgets($handle));
$sum    = 1;
for ($i = 2; $i <= $t; $i++) {

    $sum +=floor($i / 2) + 1;
}
echo $sum;
