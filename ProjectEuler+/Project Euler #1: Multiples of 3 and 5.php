<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));

for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $n = (int)(fgets($handle));
    $n--;

    $n3 = floor($n / 3);
    if ($n3 % 2 == 1) {
        $sum3 = bcmul((($n3 + 1) / 2), ($n3 * 3));
    } else {
        $sum3 = bcmul(($n3 / 2), (3 + ($n3 * 3)));
    }

    $n5 = floor($n / 5);
    if ($n5 % 2 == 1) {
        $sum5 = bcmul((($n5 + 1) / 2), ($n5 * 5));
    } else {
        $sum5 = bcmul(($n5 / 2), (5 + ($n5 * 5)));
    }

    $n15 = floor($n / 15);
    if ($n15 % 2 == 1) {
        $sum15 = bcmul((($n15 + 1) / 2), ($n15 * 15));
    } else {
        $sum15 = bcmul(($n15 / 2), (15 + ($n15 * 15)));
    }

    $sum = $sum3 + $sum5 - $sum15;

    echo "$sum\n";
}
fclose($handle);

