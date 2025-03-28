<?php
$inputArray = [1, 2, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5];
function countOccurr($arr) {
    $counts = [];
    foreach ($arr as $value) {
        if (isset($counts[$value])) {
            $counts[$value]++; 
        } else {
            $counts[$value] = 1;
        }
    }
    return $counts;
}
$result = countOccurr($inputArray);
print_r($result);
?>
