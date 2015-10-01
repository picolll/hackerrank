<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = fgets($handle);
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    $nc  = (int)trim(fgets($handle));
    $sum = 0;
    $n2  = 1;
    $n1  = 1;
    $n   = 1;

    while ($n <= $nc) {

        if ($n % 2 == 0) {
            $sum += $n;
        }
        $n = $n2 + $n1;

        $n2 = $n1;
        $n1 = $n;
    }
    echo "$sum\n";
}
fclose($handle);

