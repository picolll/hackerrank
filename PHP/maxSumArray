<?php
function findMaxSum($a)
{
    if (empty($a)) {
        return 0;
    }
    $maxMin = max($a);
    if ($maxMin < 0) {
        return $maxMin;
    }
    $minMax = min($a);
    if ($minMax > 0) {
        return array_sum($a);
    }
    $count = 0;
    $max   = max($a);
    for ($i = 0; $i < count($a); $i++) {
        $count += $a[$i];
        if ($count < 0) {
            $count = 0;
        } else {
            if ($count > $max) {
                $max = $count;
            }
        }
    }
    return $max;
}


echo "[]: " . findMaxSum([]) . PHP_EOL;
echo "[0, 0, 0, 0, 0, 0, 0]: " . findMaxSum([0, 0, 0, 0, 0, 0, 0]) . PHP_EOL;
echo "[-5, -5, -43, -2, -34]: " . findMaxSum([-5, -5, -43, -2, -34]) . PHP_EOL;
echo "[6, 8, 345, 734, 3]: " . findMaxSum([6, 8, 345, 734, 3]) . PHP_EOL;
echo "[-5,0,-4,1,3,4,-7,2,-3]: " . findMaxSum([-5, 0, -4, 1, 3, 4, -7, 2, -3]) . PHP_EOL;
echo "[-5,0,-4,1,3,4,-7,10,2,-3]: " . findMaxSum([-5, 0, -4, 1, 3, 4, -7, 10, 2, -3]) . PHP_EOL;
