<?php
//TODO inProgress For now it forks for simple example

$handle = fopen("php://stdin", "r");
$nm     = trim(fgets($handle));
list($n, $m) = explode(' ', $nm);

if (($n % 2) == 1) {
    echo 0;
    die;
}
$tree   = [];
$weight = [];
for ($t = 1; $t <= $m; $t++) {
    $ab = trim(fgets($handle));
    $ab = explode(' ', $ab);

    if ($ab[0] > $ab[1]) {
        $tree[$ab[0]]   = $ab[1];
        $weight[$ab[1]] = 0;
    } else {
        $tree[$ab[1]]   = $ab[0];
        $weight[$ab[0]] = 0;

    }

}

for ($t = 2; $t <= $m + 1; $t++) {

    if (($weight[$tree[$t]]) == 1) {
        $weight[$tree[$t]] += 1;

    } else {
        $weight[$tree[$t]] = 1;
    }

}

$counter = 0;

foreach($weight as $value){
    if (($value % 2) == 0) {
        $counter++;
    }
}
echo "$counter";

fclose($handle);

