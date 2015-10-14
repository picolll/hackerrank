<?php
/**
 * cavity Map by picolll
 */

$handle = fopen("php://stdin", "r");
$n      = trim(fgets($handle));
$map    = [];
$mapX   = [];
for ($t = 0; $t < $n; $t++) {
    $nRow    = trim(fgets($handle));
    $map[$t] = $nRow;
}

for ($x = 0; $x < $n; $x++) {
    for ($y = 0; $y < $n; $y++) {
        $c   = $map[$x][$y];
        $x1  = ($x == $n - 1) ? $n - 1 : $x + 1;
        $y1  = ($y == $n - 1) ? $n - 1 : $y + 1;
        $x_1 = ($x == 0) ? 0 : $x - 1;
        $y_1 = ($y == 0) ? 0 : $y - 1;
        if ($c > $map[$x][$y_1] &&
            $c > $map[$x][$y1] &&
            $c > $map[$x1][$y] &&
            $c > $map[$x_1][$y]
        ) {
            $mapX[$x][$y] = 'X';
        } else {
            $mapX[$x][$y] = $c;
        }

    }
}

for ($x = 0; $x < $n; $x++) {
    for ($y = 0; $y < $n; $y++) {
        echo $mapX[$x][$y];
    }
    echo "\n";
}

fclose($handle);

