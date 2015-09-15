<?php

$handle = fopen("php://stdin", "r");
$n      = fgets($handle);
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n; $j >= 1; $j--) {
        if ($j <= $i) {
            echo '#';
        } else {
            echo ' ';
        }
    }
    echo "\n";
}
fclose($handle);

