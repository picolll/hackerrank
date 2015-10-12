<?php
/**
 * Manasa And Stones by picolll
 *
 */

$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $result = '';
    $n      = trim(fgets($handle));
    $a      = trim(fgets($handle));
    $b      = trim(fgets($handle));
    if ($a == $b) {
        $result[] = (($n - 1) * $a);
    } else {

        for ($i = 0; $i < $n; $i++) {
            $result[] = ($i * $a) + (($n - 1 - $i) * $b);
        }
        sort($result);
    }
    echo implode(' ', $result) . "\n";

}
fclose($handle);

