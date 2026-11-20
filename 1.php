<?php
function isSortedAsc($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $arr[$i - 1]) {
            return false;
        }
    }
    return true;
}

$arr1 = [1, 2, 3, 4];
$arr2 = [1, 3, 2, 4];
echo isSortedAsc($arr1) ? "True" : "False"; // True
echo isSortedAsc($arr2) ? "True" : "False"; // False
?>