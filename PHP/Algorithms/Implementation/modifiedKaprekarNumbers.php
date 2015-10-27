<?php
/**
 * Modified Kaprekar Numbers by picolll
 */
$handle = fopen("php://stdin", "r");
$p      = trim(fgets($handle));
$q      = trim(fgets($handle));
$result = null;

for ($i = $p; $i <= $q; $i++) {

    $square = pow($i, 2);
    $d      = strlen($i);
    $d2     = strlen($square);

    $r = substr($square, $d2 - $d, $d);
    $l = substr($square, 0, $d2 - $d);

    if ($i == $r + $l) {
        $result .= $i . ' ';
    }
}
if (!$result) {
    echo 'INVALID RANGE';
} else {
    echo $result;
}

fclose($handle);

