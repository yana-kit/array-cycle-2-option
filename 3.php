<?php
function isZigzag($arr) {
    $n = count($arr);
    if ($n < 2) return true; 
    
    $firstBigger = $arr[0] > $arr[1];
    
    for ($i = 1; $i < $n - 1; $i++) {
        if ($firstBigger) {
            if ($i % 2 == 1 && $arr[$i] >= $arr[$i + 1]) return false;
            if ($i % 2 == 0 && $arr[$i] <= $arr[$i + 1]) return false;
        } else {
            if ($i % 2 == 1 && $arr[$i] <= $arr[$i + 1]) return false;
            if ($i % 2 == 0 && $arr[$i] >= $arr[$i + 1]) return false;
        }
    }
    return true;
}

$arr = [1, 3, 2, 4, 1, 5];
echo isZigzag($arr) ? "True" : "False";
?>