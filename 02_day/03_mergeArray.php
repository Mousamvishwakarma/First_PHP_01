<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
function mergeArrays($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}
$result = mergeArrays($array1, $array2);
print_r ($result);

?>
