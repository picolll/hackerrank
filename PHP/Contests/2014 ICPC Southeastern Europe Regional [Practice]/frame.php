<?php
/**
 * Frame by picolll
 */

function no()
{
    echo "NO\n";;
}

function yes()
{
    echo "YES\n";
}

$handle = fopen("php://stdin", "r");
$xy     = trim(fgets($handle));
list($x, $y) = explode(' ', $xy);
$numberOfTestCases = trim(fgets($handle));
for ($t = 1; $t <= $numberOfTestCases; $t++) {
    $n   = trim(fgets($handle));
    $sum = ($x - 2) * 2 + ($y * 2);
    if (($n > $x) || ($n > $y)) {
        no();
    } elseif ($sum % $n != 0) {
        no();
    } else {

        $sides = [$x, $y, $x, $y];

        if ($sides[0] % $n == 0) {
            $sides[1] -= 1;
            $sides[3] -= 1;
            if ($sides[1] < $n) {
                no();
            } elseif ($sides[3] < $n) {
                no();
            } elseif ($sides[1] % $n == 0) {
                $sides[2] -= 1;
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } elseif ($sides[1] % $n == 1) {
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } else {
                no();
            }

        } elseif ($sides[0] % $n == 1) {
            $sides[1] -= 1;
            if ($sides[1] < $n) {
                no();
            } elseif ($sides[1] % $n == 0) {
                $sides[2] -= 1;
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } elseif ($sides[1] % $n == 1) {
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } else {
                no();
            }

        } elseif ($sides[0] % $n == 2) {
            if ($sides[1] % $n == 0) {
                $sides[2] -= 1;
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } elseif ($sides[1] % $n == 1) {
                if ($sides[2] < $n) {
                    no();
                } elseif ($sides[2] % $n == 0) {
                    $sides[3] -= 1;
                    if ($sides[3] < $n) {
                        no();
                    } elseif ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } elseif ($sides[2] % $n == 1) {
                    if ($sides[3] % $n == 0) {
                        yes();
                    } else {
                        no();
                    }
                } else {
                    no();
                }
            } else {
                no();
            }
        } else {
            no();
        }


    }
}
fclose($handle);

