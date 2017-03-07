<?php

var_dump('$argv: ', $argv);
var_dump('$argc: ', $argc);

//IF BCMath is not available
$pow = `echo '135^71' | bc`;

$array  = [];
$string = "";
$STRING="";

$string = implode(' ', $array);
$array  = explode(',', $string);
$array  = str_split($string);

$string = strtolower($STRING);
$STRING = strtoupper($string);

