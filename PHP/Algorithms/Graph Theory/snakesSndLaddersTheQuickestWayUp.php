<?php

// TODO inProgress 8.33 / 50 score
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {

    $result            = -1;
    $laddersAndLadders = [];
    $won               = false;
    $noSolution        = false;

    $nl = trim(fgets($handle));
    for ($i = 1; $i <= $nl; $i++) {
        $ab = trim(fgets($handle));
        list($a, $b) = explode(' ', $ab);
        $laddersAndLadders[$a] = $b;
    }
    $ms = trim(fgets($handle));
    for ($i = 1; $i <= $ms; $i++) {
        $ab = trim(fgets($handle));
        list($a, $b) = explode(' ', $ab);
        $laddersAndLadders[$a] = $b;
    }

    $taken   = [];
    $current = 1;
    $counter = 0;
    while (!($won || $noSolution)) {
        $counter++;
        if ($current == -1 || $counter >300) {
            $noSolution = true;
        }
        if (100 - $current <= 6) {
            $result = $counter;
            $won    = true;
        } else {

            $rolls = [];
            $maxi = 1;
            $maxRoll = -1;
            for ($i = 1; $i <= 6; $i++) {


                if (isset($taken[$i + $current])) {
                    $rolls[$i] = -1;
                } else {
                    $rolls[$i] = (isset($laddersAndLadders[$i + $current]) ? $laddersAndLadders[$i + $current] : $i + $current);
                }
                if ($rolls[$i] > $maxRoll){
                    $maxRoll = $rolls[$i];
                    $maxi = $i;
                }


            }
            $current = $maxRoll;
            $taken[$maxi + $current] = true;

        }
    }

    echo $result . "\n";


}
fclose($handle);

