<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = fgets($handle);
$results           = [];
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $n     = fgets($handle);
    $count = 0;
    for ($j = 0; $j < strlen($n); $j++) {

        if ($n[$j] == 0) {
            continue;
        } else {
            if ($n % $n[$j] == 0) {
                $count++;
            }
        }

    }
    echo $count . "\n";
}
fclose($handle);

