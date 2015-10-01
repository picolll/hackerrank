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
    $row = trim(fgets($handle));
    $row = explode(' ', $row);
    $n   = $row[0];
    $c   = $row[1];
    $m   = $row[2];


    echo '';

}
fclose($handle);

