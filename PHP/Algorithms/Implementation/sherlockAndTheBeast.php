<?php

function display($fives = 0, $threes = 0)
{
    for ($i = 1; $i <= $fives; $i++) {
        echo 5;
    }
    for ($j = 1; $j <= $threes; $j++) {
        echo 3;
    }
}

function decentNumber($n)
{
    $fives  = 0;
    $threes = 0;
    if ($n / 3 == 0) {
        $fives = $n;
        display($fives, $threes);
        return true;
    }

    $max = floor($n / 3);
    for (; $max > 0; $max--) {
        $fives  = $max * 3;
        $threes = $n - $fives;
        if ($threes % 5 == 0) {
            display($fives, $threes);
            return true;
        }
    }

    $max = floor($n / 5);
    for (; $max >= 1; $max--) {
        $threes = $max * 5;
        $fives  = $n - $threes;
        if ($fives % 3 == 0) {
            display($fives, $threes);
            return true;
        }
    }

    return false;
}


$handle            = fopen("php://stdin", "r");
$numberOfTestCases = (int)fgets($handle);

for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $n = (int)fgets($handle);
    if (!decentNumber($n)) {
        echo -1;
    };
    echo "\n";

}

fclose($handle);

