<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $n = trim(fgets($handle));

    $ab = trim(fgets($handle));
    $ab = explode(' ', $ab);

    for ($i = 1; $i <= $n; $i++) {

    }

}
fclose($handle);

