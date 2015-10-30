<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $n       = trim(fgets($handle));
    $a       = [];
    $counter = $n;
    for ($i = 0; $i < $n; $i++) {
        $a[] = $i;
    }
    $thrower = 0;

    function get_next($array, $key) {
        $currentKey = key($array);
        while ($currentKey !== null && $currentKey != $key) {
            next($array);
            $currentKey = key($array);
        }
        return next($array);
    }

    while ($counter > 1) {

        if ($counter % 2 == 0) {
            $oposite = ($counter / 2);
            unset($a[$thrower + $oposite]);
            $counter--;
            $thrower = get_next($a,$thrower);

        } else {

            unset($a[$thrower]);
            $counter--;
            $thrower = get_next($a, $thrower);
        }


    }
    echo $a[0];
}
fclose($handle);

