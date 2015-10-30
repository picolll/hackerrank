<?php
/**
 * Counting Triangles by picolll
 * Done 0-8
 * TimeOut: 9-16
 *
 */
$handle = fopen("php://stdin", "r");

$n      = trim(fgets($handle));
$abc    = trim(fgets($handle));
$abc    = explode(' ', $abc);
$right  = 0;
$acute  = 0;
$obtuse = 0;
$abc2   = [];
for ($i = 0; $i < $n; $i++) {
    $abc2[$i] = pow($abc[$i], 2);
}

for ($a = 0; $a < $n - 2; $a++) {
    for ($b = $a + 1; $b < $n - 1; $b++) {
        $ab = $abc[$a] + $abc[$b];
        if ($ab <= $abc[$b + 1]) {
            continue;
        }

        for ($c = $b + 1; $c < $n; $c++) {
            if ($ab > $abc[$c]) {
                $a2b2 = ($abc2[$a] + $abc2[$b]);
                if ($abc2[$c] == $a2b2) {
                    $right++;
                } elseif ($abc2[$c] < $a2b2) {
                    $acute++;
                } else {
                    $obtuse++;
                }
            } else {
                break;
            }
        }

    }

}
echo "$acute $right $obtuse";
