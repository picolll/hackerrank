<?php
//D-land
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
$field =[];
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $xyw = trim(fgets($handle));
    $xyw = explode(' ', $xyw);
    $x = $xyw[0];
    $y = $xyw[1];
    $w = $xyw[2];

$field[$x][$y] = $w;
//    sort($field,SORT_NUMERIC);

    echo'';



//    for ($i = 1; $i <= $n; $i++) {
//
//    }

}
fclose($handle);

