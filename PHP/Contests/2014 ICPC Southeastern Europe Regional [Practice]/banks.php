<?php
function isPositive(array $array)
{
    foreach ($array as $value) {
        if ($value < 0) {
            return false;
        }
    }

    return true;
}

function doMagicMove(array &$array, $pos, $length)
{
    $val = -$array[$pos];

    if ($pos == 0) {
        $l = $length - 1;
    } else {
        $l = $pos - 1;
    }
    if ($pos == $length - 1) {
        $r = 0;
    } else {
        $r = $pos + 1;
    }
    $array[$l] -= $val;
    $array[$r] -= $val;
    $array[$pos] = -$array[$pos];

    return $array;
}

$handle = fopen("php://stdin", "r");
$length = trim(fgets($handle));

$n     = trim(fgets($handle));
$banks = explode(' ', $n);
$sum   = array_sum($banks);

$magicMove = 0;
while (!isPositive($banks)) {

    $min      = min($banks);
    $whereMin = array_search($min, $banks, $length);
    doMagicMove($banks, $whereMin, $length);
    $magicMove++;
}
echo $magicMove;
fclose($handle);
