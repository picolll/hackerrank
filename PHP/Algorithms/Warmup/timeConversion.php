<?php

$handle = fopen("php://stdin", "r");
$line   = fgets($handle);
$array  = explode(':', $line);
$result = '';

$isPM     = strpos($array[2], 'PM');
$array[2] = (int)$array[2];
if ($array[2] < 10) {
    $array[2] = '0' . $array[2];
}

if ($isPM) {
    if ($array[0] != 12) {
        $array[0] += 12;
    }

    if ($array[0] == 24) {
        $array[0] = '00';
    }
} else {
    if ($array[0] == 12) {
        $array[0] = '00';
    }
}
$result = implode(':', $array);
echo $result;

fclose($handle);

