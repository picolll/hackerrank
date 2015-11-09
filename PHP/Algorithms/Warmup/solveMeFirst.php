<?php
/**
 * Let's start simple. Can you complete the function solveMeFirst to return the sum of the two integers passed as input parameters?
 * You can pick your favorite programming language.
 */
function solveMeFirst($a,$b){
    return $a + $b;

}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
