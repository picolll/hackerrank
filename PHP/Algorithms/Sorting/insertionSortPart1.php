<?php
function insertionSort($ar)
{
    $e      = array_pop($ar);
    $finish = false;
    for ($i = count($ar) - 1; ; $i--) {

        if ($ar[$i] > $e) {
            $ar[$i + 1] = $ar[$i];
        } else {
            $ar[$i + 1] = $e;
            $finish     = true;
        }

        foreach ($ar as $a) {
            echo $a . ' ';
        }
        echo "\n";
        if ($finish) {
            break;
        }
    }

}

$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s  = fgets($fp);
$ar = explode(" ", $s);
for ($i = 0; $i < count($ar); $ar[$i++] += 0) {
    ;
}
insertionSort($ar);

fclose($handle);
