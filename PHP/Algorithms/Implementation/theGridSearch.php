<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $rc = trim(fgets($handle));
    list($R, $C) = explode(' ', $rc);
    $base = [];
    for ($i = 0; $i < $R; $i++) {
        $base[$i] = trim(fgets($handle));
    }
    $rc = trim(fgets($handle));
    list($r, $c) = explode(' ', $rc);
    $subBase = [];
    for ($i = 0; $i < $r; $i++) {
        $subBase[$i] = trim(fgets($handle));
    }
    $found = false;
    $i     = 0;
    while ($i <= $R - $r) {
        $lastPos   = 0;
        $positions = array();
        while (($lastPos = strpos($base[$i], $subBase[0], $lastPos)) !== false) {
            $positions[] = $lastPos;
            $lastPos     = $lastPos + 1;
        }
        foreach ($positions as $position) {
            $match = 1;
            for ($j = 1; $j < $r; $j++) {
                if (substr($base[$i + $j], $position, $c) == substr($subBase[$j], 0, $c)) {
                    $match++;
                } else {
                    break;
                }
            }
            if ($r == $match) {
                $i     = $R;
                $j     = $r;
                $found = true;
                break;
            }
        }
        $i++;
    }
    if ($found) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
}
fclose($handle);

