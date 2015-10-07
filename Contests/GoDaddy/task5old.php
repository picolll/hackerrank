<?php

//LCS It should be longest common subsequence,
//I did Longest common substring

$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $n  = trim(fgets($handle));
    $a1 = trim(fgets($handle));
    $a1 = str_replace(' ', '', $a1);
    $a2 = trim(fgets($handle));
    $a2 = str_replace(' ', '', $a2);
    $a3 = trim(fgets($handle));
    $a3 = str_replace(' ', '', $a3);

    $found = false;
    for ($i = 0; $i < $n; $i++) {
        $sublen = $n - $i;;
        for ($j = 0; $j < $n - $i; $j++) {
            $potSubStr = substr($a1, $i, $sublen);
            if (strpos($a2, $potSubStr) != false) {
                if (strpos($a3, $potSubStr) != false) {
                    $winner = strlen($potSubStr);
                    $found = true;
                    echo $winner."\n";
                    break;
                }
            }
            $sublen--;
        }
        if ($found){
            break;
        }
    }

}
fclose($handle);

