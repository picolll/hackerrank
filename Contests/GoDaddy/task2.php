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
$pstart = [];
$pend   = [];
$rstart = [];
$rend   = [];

for ($i = 1; $i <= $n; $i++) {
    if ($field[1][$i] == 'P') {
        $pstart[] = $i;
    }
    if ($field[$n][$i] == 'P') {
        $pend[] = $i;
    }
    if ($field[$i][1] == 'R') {
        $rstart[] = $i;
    }
    if ($field[$i][$n] == 'R') {
        $rend[] = $i;
    }
}

if ((empty($pstart) || empty($pend))
    &&
    (empty($rstart) || empty($rend))
) {
    echo 'NEITHER';
    die;
}
if ((empty($pstart) || empty($pend))) {
    $pnotwin = true;
} else {
    $pnotwin = false;
}
if ((empty($rstart) || empty($rend))) {
    $rnotwin = true;
} else {
    $rnotwin = false;
}

//Persian wall

$checked = [];
$toCheck = [];

foreach ($pstart as $point) {
    $toCheck[] = [1][$point];
}


echo 'NEITHER';
die;

fclose($handle);

