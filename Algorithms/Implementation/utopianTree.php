<?php

function grow($n)
{
    $an = 1;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $an++;
        } else {
            $an *= 2;
        }
    }

    echo $an;
    echo "\n";
}

$handle            = fopen("php://stdin", "r");
$numberOfTestCases = (int)fgets($handle);
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $n = (int)fgets($handle);
    grow($n);

}

fclose($handle);

