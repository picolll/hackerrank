<?php
/**
 * Strange Antennas by picolll
 *
 * Not efficient enough Timeout
 *
 * Orientation (0:SW, 1:SE, 2:NE, 3:NW).
 * 0 <  n <= 30000
 * 0 <= a <= 100
 * 0 <  p <= 2 * n
 */
$handle = fopen("php://stdin", "r");
$n      = (int)trim(fgets($handle));
$a      = (int)trim(fgets($handle));
//$s      = (memory_get_usage());
$signal = [];
$result = 0;

for ($t = 1; $t <= $a; $t++) {
    $xypo = trim(fgets($handle));
    list($x, $y, $p, $o) = explode(' ', $xypo);
    $x = (int)$x;
    $y = (int)$y;
    $p = (int)$p;
    $o = (int)$o;

    $sum = 0;

    if ($p > 2 * $n) {
        $p = (2 * $n) - 1;
    }
    $px = $p;
    $py = $p;
    //    var_dump(memory_get_usage());
    if ($o == 0) {
        if ($y == 0) {
            continue;
        }
        $y -= 1;
        if ($p > $n - $x) {
            $px = $n - $x;
        }
        if ($p > 1 + $y) {
            $py = $y + 1;
        }

        for ($i = 0; $i <= $px - 1; $i++) {
            $newX            = $x + $i;
            $newY            = $y + 1 - min($p - $i, $py);
            $signal[$newX][] = [$newY => min($p - $i, $py)];

        }
    } elseif ($o == 1) {

        if ($p > $n - $x) {
            $px = $n - $x;
        }
        if ($p > $n - $y) {
            $py = $n - $y;
        }

        for ($i = 0; $i <= $px - 1; $i++) {
            $newX            = $x + $i;
            $newY            = $y;
            $signal[$newX][] = [$newY => min($p - $i, $py)];
        }
    } elseif ($o == 2) {
        if ($x == 0) {
            continue;
        }
        $x -= 1;
        if ($p > 1 + $x) {
            $px = $x + 1;
        }
        if ($p > $n - $y) {
            $py = $n - $y;
        }

        for ($i = 0; $i <= $px - 1; $i++) {
            $newX            = $x - $i;
            $newY            = $y;
            $signal[$newX][] = [$newY => min($p - $i, $py)];
        }
    } elseif ($o == 3) {
        if ($y == 0 || $x == 0) {
            continue;
        }
        $x -= 1;
        $y -= 1;
        if ($p > 1 + $x) {
            $px = $x + 1;
        }
        if ($p > 1 + $y) {
            $py = $y + 1;
        }

        for ($i = 0; $i <= $px - 1; $i++) {
            $newX            = $x - $i;
            $newY            = $y + 1 - min($p - $i, $py);
            $signal[$newX][] = [$newY => min($p - $i, $py)];
        }
    }

}
foreach ($signal as $sigRow) {
    $partialResult = 0;
//    $partialRow    = new SplFixedArray($n);
    foreach ($sigRow as $elements) {
        foreach ($elements as $start => $end) {

            for ($i = $start; $i < $start + $end; $i++) {
//                if (isset($partialRow[$i])) {
//                    unset($partialRow[$i]);
//                } else {
//                    $partialRow[$i] = true;
//                }
            }
        }
    }

    foreach ($partialRow as $sig) {
        if ($sig) {
            $partialResult++;
        }
    }
//    var_dump(memory_get_usage());
    unset($partialRow);
    unset($sigRow);
//    var_dump(memory_get_usage());
    $result += $partialResult;
}

echo $result;


fclose($handle);
