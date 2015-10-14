<?php

//TODO
$handle = fopen("php://stdin", "r");
$nk     = trim(fgets($handle));
list($n, $k) = explode(' ', $nk);

$digits = trim(fgets($handle));

$kPlusOne = $n % $k;
$kLength  = $n - $kPlusOne;
