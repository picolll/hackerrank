<?php

$handle = fopen("php://stdin", "r");
$_a     = trim(fgets($handle));
$_b     = trim(fgets($handle));
fclose($handle);

