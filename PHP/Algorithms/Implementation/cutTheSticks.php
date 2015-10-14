<?php

$handle = fopen("php://stdin", "r");
$n      = fgets($handle);
$a      = trim(fgets($handle));
$sticks = explode(' ', $a);

while (!empty($sticks)) {
    rsort($sticks);
    $min = end($sticks);

    echo count($sticks)."\n";

    foreach ($sticks as $key => &$stick) {
        $stick -= $min;
        if ($stick == 0) {
            $sticks = array_slice($sticks, 0, $key);
            break;
        }
    }
}

fclose($handle);
