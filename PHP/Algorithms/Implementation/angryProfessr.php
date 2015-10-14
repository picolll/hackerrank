<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = fgets($handle);
$results           = [];
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $nk     = fgets($handle);
    $nk     = explode(' ', $nk);
    $n      = $nk[0];
    $k      = $nk[1];
    $times  = fgets($handle);
    $times  = explode(' ', $times);
    $onTime = 0;

    foreach ($times as $time) {
        if ($time <= 0) {
            $onTime++;

        }
    }
    $results[] = ($onTime >= $k) ? false : true;
}

foreach ($results as $result) {
    echo ($result) ? 'YES' : 'NO';
    echo "\n";
}
fclose($handle);

