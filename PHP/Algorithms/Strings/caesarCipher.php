<?php

function decrypt($n, $s, $k)
{
    if ($k > 25) {
        $k = $k % 26;
    }
    for ($i = 0; $i < $n; $i++) {
        $char = ord($s[$i]);
        if ($char >= 65 && $char <= 90) {
            if ($char + $k > 90) {
                $newChar = 65 + ($k - (91 - $char));
            } else {
                $newChar = $char + $k;
            }
            echo chr($newChar);
        } elseif ($char >= 97 && $char <= 122) {
            if ($char + $k > 122) {
                $newChar = 97 + ($k - (123 - $char));
            } else {
                $newChar = $char + $k;
            }
            echo chr($newChar);
        } else {
            echo chr($char);
        }
    }
}

$handle = fopen("php://stdin", "r");
$n      = (int)fgets($handle);
$s      = trim(fgets($handle));
$k      = (int)fgets($handle);

decrypt($n, $s, $k);


fclose($handle);
