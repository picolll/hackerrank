<?php

var_dump('$argv: ',$argv);
var_dump('$argc: ',$argc);

//IF BCMath is not available
$pow = `echo '135^71' | bc`;
