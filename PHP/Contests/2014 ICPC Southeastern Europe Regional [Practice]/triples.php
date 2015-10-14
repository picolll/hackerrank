<?php
/**
 * Triples by picolll
 *
 * x=0 y=z dla j>2
 * x >= 0
 * y >= x
 * z >= y
 * m >= z
 * 100 >= m >=5
 * 2 <= n <= 100
 *
 */

function solve($m, $n)
{
    $sum = 0;
    for ($j = 2; $j <= $n; $j++) {

        if ($j > 2) {
            $sum += ($m + 1);
            continue;
        }

        for ($x = 0; $x <= $m; $x++) {
            for ($y = $x; $y <= $m; $y++) {

                if ($x == 0) {
                    $sum++;
                    continue;
                }

                $x2   = bcpow($x, $j);
                $y2   = bcpow($y, $j);
                $x2y2 = bcadd($x2, $y2);
                if ($x2y2 == 0) {
                    $sum++;
                    continue;
                }

                for ($z = $y; $z <= $m; $z++) {
                    $z2 = bcpow($z, $j);
                    if (($x2y2 == $z2)) {
                        $sum++;
                        if ($x != 0) {
                        }
                        continue;
                    }
                }
            }
        }
    }

    return $sum;
}

$handle = fopen("php://stdin", "r");
$m      = trim(fgets($handle));
$n      = trim(fgets($handle));
echo solve($m, $n);
fclose($handle);
