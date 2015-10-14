<?php
function displayPathToPrincess($n, $mario, $princess)
{
    if ($mario == $princess) {
        exit();
    }
    if (($mario[0] - $princess[0]) < 0) {
        $mario[0]++;
        print 'DOWN' . "\n";
        displayPathToPrincess($n, $mario, $princess);
    }
    if (($mario[0] - $princess[0]) > 0) {
        $mario[0]--;
        print 'UP' . "\n";
        displayPathToPrincess($n, $mario, $princess);
    }
    if (($mario[1] - $princess[1]) < 0) {
        $mario[1]++;
        print 'RIGHT' . "\n";
        displayPathToPrincess($n, $mario, $princess);
    }
    if (($mario[1] - $princess[1]) > 0) {
        $mario[1]--;
        print 'LEFT' . "\n";
        displayPathToPrincess($n, $mario, $princess);
    }
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%s", $n);

$lookForMario    = true;
$lookForPrincess = true;
$grid            = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($fp, "%s", $grid[$i]);

    if ($lookForMario && ($m = strpos($grid[$i], 'm'))) {
        $mario        = [$i, $m];
        $lookForMario = false;
    }
    if ($lookForPrincess && is_int((($p = strpos($grid[$i], 'p'))))) {
        $princess        = [$i, $p];
        $lookForPrincess = false;
    }
}
displayPathToPrincess($m, $mario, $princess);

