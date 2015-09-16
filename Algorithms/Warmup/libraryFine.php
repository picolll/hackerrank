<?php

function intIt($a)
{
    return (int)$a;
}

function calculateFine($a, $e)
{
    $a = array_map('intIt', $a);
    $e = array_map('intIt', $e);

    if ($a[2] > $e[2]) {
        return 10000;
    } else if ($a[2] < $e[2]) {
        return 0;
    } else {
        if ($a[1] > $e[1]) {
            return 500 * ($a[1] - $e[1]);
        } else if ($a[1] < $e[1]) {
            return 0;
        } else {
            if ($a[0] > $e[0]) {
                return 15 * ($a[0] - $e[0]);
            } else {
                return 0;
            }
        }
    }
}

$handle   = fopen("php://stdin", "r");
$a        = fgets($handle);
$e        = fgets($handle);
$actual   = explode(' ', $a);
$expected = explode(' ', $e);

echo calculateFine($actual, $expected);

fclose($handle);

