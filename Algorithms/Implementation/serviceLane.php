<?php
$handle = fopen("php://stdin", "r");

$nt                = fgets($handle);
$nt                = explode(' ', $nt);
$numberOfTestCases = (int)$nt[1];
$n                 = (int)$nt[1];
$w                 = trim(fgets($handle));
$width             = explode(' ', $w);
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $se = trim(fgets($handle));
    $se = explode(' ', $se);
    $s  = $se[0];
    $e  = $se[1];
    $r  = 3;
    for ($c = $s; $c <= $e; $c++) {
        if ($width[$c] < $r) {
            $r = $width[$c];
            if ($r == 1) {
                break;
            }
        }
    }
    echo "{$r}\n";
}
fclose($handle);

