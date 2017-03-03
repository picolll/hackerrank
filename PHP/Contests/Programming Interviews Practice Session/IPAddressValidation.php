<?php
$handle            = fopen("php://stdin", "r");
$numberOfTestCases = trim(fgets($handle));

function isHex($hex)
{
    $hex = str_split($hex);
    foreach ($hex as $h) {
        if (!preg_match('/[a-fA-F0-9]/', $h)) {
            return false;
        }
    }

    return true;
}

for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $neither  = false;
    $n        = trim(fgets($handle));
    $IP4Array = explode('.', $n);
    $IP6Array = explode(':', $n);
    if (count($IP4Array) == 4) {
        foreach ($IP4Array as $ip) {
            if (!is_numeric($ip) || $ip < 0 || $ip > 255) {
                $neither = true;
                break;
            }
        }

        if (!$neither) {
            echo 'IPv4';
        }

    } elseif (count($IP6Array) == 8) {
        foreach ($IP6Array as $ip) {

            if (!isHex($ip) || strlen($ip) > 4) {
                $neither = true;
                break;
            }
        }

        if (!$neither) {
            echo 'IPv6';
        }

    } else {
        echo 'Neither';
    }

    if ($neither) {
        echo 'Neither';
    }

    echo "\n";

}
fclose($handle);

