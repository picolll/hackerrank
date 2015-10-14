<?php

/**
 * 1 ≤ T ≤ 1000
 * 2 ≤ N ≤ 100000
 * 1 ≤ C ≤ N
 * 2 ≤ M ≤ N
 */
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = fgets($handle);
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $row       = trim(fgets($handle));
    $row       = explode(' ', $row);
    $n         = $row[0];
    $c         = $row[1];
    $m         = $row[2];
    $ec        = 0;
    $wrappers  = 0;
    $wrappers1 = 0;

    while ($n >= $c) {
        $wrappers1 = floor($n / $c);
        $ec += $wrappers1;
        $n -= ($wrappers1 * $c);
        $wrappers += $wrappers1;
        $nn       = floor($wrappers / $m) * $c;
        $wrappers = ($wrappers % $m);
        $n        = $n + $nn;
    }
    echo "$ec\n";
}
fclose($handle);

