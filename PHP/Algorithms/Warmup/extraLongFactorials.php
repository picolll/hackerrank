<?php
/**
 * Usage:
 *      ms(12345, 3) # returns "37035"
 *      ms(999, 3) # returns "2997"
 *      ms("1111", 24) # returns "26664"
 *
 * @param   int|stirng $s A string containing a positive integer
 * @param   int $m The multiplier
 * @return  string          The product of the multiplication (as a string)
 */
function ms($s, $m)
{
    $l  = str_split($s);
    $cs = 0;
    $r  = array_reduce(array_reverse($l), function ($c, $x) use ($m, &$cs) {
        $p = $x * $m + $cs;
        if ($p > 9) {
            $cs = substr($p, 0, -1); // tens
            $p  = substr($p, -1);
        } else {
            $cs = 0;
        }

        return $p . $c;
    }, "");
    if ($cs) {
        $r = $cs . $r;
    }

    return $r;
}

function fac($n)
{
    $x = 1;
    for ($i = $n; $i > 1; $i--) {
        $x = ms((string)$x, $i);
    }

    echo $x;
}

function fac_bcmul($n){
    $result = $n;
    for ($i = $n-1; $i > 1; $i--) {
        $result = bcmul($result, $i);
    }
    echo $result;
}

function fac_bcmul_rev($n){
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result = bcmul($result, $i);
    }
    echo $result;
}

$handle = fopen("php://stdin", "r");
$n      = trim(fgets($handle));

fac_bcmul_rev($n);
//fac_bcmul($n);
//fac($n);

fclose($handle);
