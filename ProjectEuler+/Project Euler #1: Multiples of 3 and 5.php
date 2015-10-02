<?php
$handle = fopen("php://stdin", "r");
//$numberOfTestCases = trim(fgets($handle));

$numberOfTestCases = 1;

for ($t = 1; $t <= $numberOfTestCases; $t++) {
    //    $n = (int)(fgets($handle));
    $n = 1000000000;

//PRECISION FIX for pow(1,8) and higher

    $n3 = floor($n / 3);
    if ($n3 % 2 == 1) {
        $sum3 = (($n3 + 1) / 2) * ($n3 * 3);
    } else {
        $sum3 = ($n3 / 2) * (3 + ($n3 * 3));
    }


    $n5 = floor($n / 5);
    if ($n5 % 2 == 1) {
        $sum5 = (($n5 + 1) / 2) * ($n5 * 5);
    } else {
        $sum5 = ($n5 / 2) * (5 + ($n5 * 5));
    }


    $n15 = floor($n / 15);
    if ($n15 % 2 == 1) {
        $sum15 = (($n15 + 1) / 2) * ($n15 * 15);
    } else {
        $sum15 = ($n15 / 2) * (15 + ($n15 * 15));
    }

    //    15 30 45 60 75 90

    $sum = $sum3 + $sum5 - $sum15;

    echo "$sum\n";
}
fclose($handle);

