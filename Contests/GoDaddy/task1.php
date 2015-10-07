<?php
$handle = fopen("php://stdin", "r");
$nd     = trim(fgets($handle));
list($n, $d) = explode(' ', $nd);
$half   = ceil($n / 2);
$result = $half + $d;
echo $result;
fclose($handle);

