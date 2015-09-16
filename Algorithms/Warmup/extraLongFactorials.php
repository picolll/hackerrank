<?php

/**
 * factorial is loosing precision for numbers bigger then 20 due to the fact taht in in PHP is 32-
 * Factorial without loosing precision can be solved with extensions like GMP
 *
 * @param $n
 * @return int|string
 */
function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result = bcmul($result, $i);
    }

    return $result;
}

$handle = fopen("php://stdin", "r");
$n      = fgets($handle);
$result = factorial($n);

echo $result;
fclose($handle);
