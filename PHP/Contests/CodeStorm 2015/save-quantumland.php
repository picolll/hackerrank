<?php

$handle = fopen("php://stdin", "r");

$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {

    $n        = trim(fgets($handle));
    $c        = trim(fgets($handle));
    $c        = explode(' ', $c);
    $soldiers = 0;
    for ($i = 0; $i < $n - 1; $i++) {

        if ($c[$i] == 0) {
            if ($c[$i + 1] == 0) {
                $c[$i + 1] = 1;
                $soldiers++;
            }
        }
    }
    echo $soldiers . "\n";
}


