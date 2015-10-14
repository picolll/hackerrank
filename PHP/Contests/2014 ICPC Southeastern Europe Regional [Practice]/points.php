<?php


$a = 999999;
$b = 999999;
$a2 = pow($a,2);
$b2 = pow($b,2);
$a2bc = bcpow($a,2);
$c = sqrt($a2+$b2);
$cbc = bcsqrt($a2);
echo sqrt(2);
