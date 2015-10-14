<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = fgets($handle);
for ($i = 1; $i <= $numberOfTestCases; $i++) {
    list($a, $b) = explode(' ', trim(fgets($handle)));
    echo (floor(sqrt($b)) - ceil(sqrt($a)) + 1) . "\n";
}
fclose($handle);
