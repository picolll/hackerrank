<?php
function pangrams($str)
{

    $str = str_replace(' ', '', $str);

    $alphabet = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $alphabet[strtolower(($str[$i]))] = true;
    }

    return count($alphabet) == 26;

}

$fp     = fopen("php://stdin", "r");
$str    = trim(fgets($fp));
$result = pangrams($str);

if ($result) {
    print_r("pangram");
} else {
    print_r("not pangram");
}


