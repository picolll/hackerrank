<?php
$handle = fopen("php://stdin", "r");
$abn    = trim(fgets($handle));
list ($a, $b, $n) = explode(' ', $abn);

$result = 0;
if ($a == 0 && $b == 0) {
    echo 0;
} else {
    $c = 0;
    for ($i = 3; $i <= $n; $i++) {

        $c = bcadd(bcpow($b, 2), $a);
        $a = $b;
        $b = $c;
    }
    echo $c;
}
