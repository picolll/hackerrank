<?php
function solveMeSecond($a, $b)
{
    return $a + $b;
}

$handle = fopen("php://stdin", "r");
$t      = fgets($handle);
if ((int)$t > 0) {
    for ($i = 1; $i <= $t; $i++) {
        $ab = fgets($handle);
        list($a, $b) = explode(' ', $ab);
        $sum[] = solveMeSecond((int)$a, (int)$b);

    }
}

foreach ($sum as $r) {
    print($r . "\n");
}
fclose($handle);

