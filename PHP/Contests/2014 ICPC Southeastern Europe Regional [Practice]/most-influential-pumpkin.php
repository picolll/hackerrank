<?php
/**
 * Not efficient enough Timeout
 *
 */
$handle = fopen("php://stdin", "r");
while ('0 0' != ($what = trim(fgets($handle)))) {
    $nk = $what;
    list($n, $k) = explode(' ', $nk);
    $middle      = floor($n / 2);
    $pumpkins1   = trim(fgets($handle));
    $pumpkins    = explode(' ', $pumpkins1);
    $pumpkinsSpl = SplFixedArray::fromArray($pumpkins);
    unset($pumpkins);

    for ($watering = 1; $watering <= $k; $watering++) {
        $st = trim(fgets($handle));
        list($s, $t) = explode(' ', $st);

        for ($wateredPumpkin = $s - 1; $wateredPumpkin <= $t - 1; $wateredPumpkin++) {
            $pumpkinsSpl[$wateredPumpkin] += 1;
        }

        $sortedArray = $pumpkinsSpl->toArray();
        sort($sortedArray);
        echo $sortedArray[$middle] . "\n";

    }
}

