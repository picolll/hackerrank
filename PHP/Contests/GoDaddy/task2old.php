<?php
/**
 * Hexagonal-war by picolll
 *
 * A* could be use here....
 *
 */
$handle = fopen("php://stdin", "r");
$nm     = trim(fgets($handle));
list($n, $m) = explode(' ', $nm);
$romans   = false;
$persians = false;
$neither  = true;

if ($m + 1 < $n * 2) {
    echo 'NEITHER';
    die;
}

for ($i = 0; $i <= $n + 1; $i++) {
    for ($j = 0; $j <= $n + 1; $j++) {
        $field[$i][$j] = '';
    }
}


$player = 'P';
for ($t = 1; $t <= $m; $t++) {

    if ($player == 'P') {
        $player = 'R';
    } else {
        $player = 'P';
    }
    $xy = trim(fgets($handle));
    list($x, $y) = explode(' ', $xy);

    $field[$x][$y] = $player;

}

$pb = 0;
$rb = 0;

for ($i = 1; $i <= $n; $i++) {
    if ($field[1][$i] == 'P') {
        $pb++;
        $pstart = $i;
    }
    if ($field[$n][$i] == 'P') {
        $pb++;
        $pend = $i;
    }
    if ($field[$i][1] == 'R') {
        $rb++;
        $rstart = $i;
    }
    if ($field[$i][$n] == 'R') {
        $rb++;
        $rend = $i;
    }
}

if (($pb < 2) && ($rb < 2)) {
    echo 'NEITHER';
    die;
}
if (($pb < 2)) {
    $pnotwin = true;
} else {
    $pnotwin = false;
}
if (($rb < 2)) {
    $rnotwin = true;
} else {
    $rnotwin = false;
}
// Romans path
if (!$rnotwin) {
    $rnext = 0;
    $x     = $rstart;
    $y     = 1;
    for ($i = 1; $i < ($m/2); $i++) {
        $counter = 0;
        if ($field[$x + 1][$y] == 'R') {
            $rnext  = $x + 1;
            $rnexty = $y;
            $counter++;
        }
        if ($field[$x][$y + 1] == 'R') {
            $rnext  = $x;
            $rnexty = $y + 1;
            $counter++;
        }
        if ($field[$x - 1][$y] == 'R') {
            $rnext  = $x - 1;
            $rnexty = $y;
            $counter++;
        }
        if ($counter != 1) {
            $rnotwin = true;
            break;
        }
        $x = $rnext;
        $y = $rnexty;
    }
    if (!$rnotwin) {
        echo 'ROMANS';
        die;
    }

}


// Persians path
if (!$pnotwin) {
    $pnext = 0;
    $y     = $pstart;
    $x     = 1;
    for ($i = 1; $i < $n; $i++) {
        $counter = 0;
        if ($field[$x + 1][$y] == 'P') {
            $pnext  = $y;
            $pnextx = $x + 1;
            $counter++;
        }
        if ($field[$x + 1][$y - 1] == 'P') {
            $pnext  = $y - 1;
            $pnextx = $x + 1;
            $counter++;
        }

        if ($counter != 1) {
            $pnotwin = true;
            break;
        }
        $y = $pnext;
        $x = $pnextx;
    }
    if (!$pnotwin) {
        echo 'PERSIANS';
        die;
    }

}
echo 'NEITHER';
die;

fclose($handle);

