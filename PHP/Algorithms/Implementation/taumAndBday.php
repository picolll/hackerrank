<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $bw = trim(fgets($handle));
    list($b, $w) = explode(' ', $bw);
    $xyz = trim(fgets($handle));
    list($x, $y, $z) = explode(' ', $xyz);
    $x   = min($x, $y + $z);
    $y   = min($y, $x + $z);
    $sum = ($x * $b) + ($y * $w);
    echo $sum . "\n";
}
fclose($handle);

