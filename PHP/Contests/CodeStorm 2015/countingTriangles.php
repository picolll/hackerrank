<?php

$handle = fopen("php://stdin", "r");

$n      = trim(fgets($handle));
$abc    = trim(fgets($handle));
$abc    = explode(' ', $abc);
$right  = 0;
$acute  = 0;
$obtuse = 0;
$abc2   = [];
$breaks = [0];
for ($i = 0; $i < $n; $i++) {
    $abc2[$i] = pow($abc[$i], 2);
}


for ($a = 0; $a < $n - 2; $a++) {
    for ($b = $a + 1; $b < $n - 1; $b++) {

        if (($abc[$a] + $abc[$b]) <= $abc[$b + 1]) {
            continue;
        }

        for ($c = $b + 1; $c < $n; $c++) {
            //            echo "\n$abc[$a] $abc[$b] $abc[$c]";
            if (($abc[$a] + $abc[$b]) > $abc[$c]) {
                //                echo ' T';
                $a2b2 = ($abc2[$a] + $abc2[$b]);
                if ($abc2[$c] == $a2b2) {
                    $right++;
                    //                    echo ' R ';
                } elseif ($abc2[$c] < $a2b2) {
                    $acute++;
                    //                    echo ' A ';
                } elseif ($abc2[$c] > $a2b2) {
                    $obtuse++;
                    //                    echo ' O ';
                }
            } else {
                break;
            }
        }

    }

}
echo "$acute $right $obtuse";
