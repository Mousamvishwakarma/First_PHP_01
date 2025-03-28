<?php
$inputArray = [1, 1, 2, 2, 3, 3, 5, 5, 6, 6, 7, 7];
function removeDupli($arr) {
    $uniqueArray = [];
    
    foreach ($arr as $value) {
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value; 
        }
    }
    
    return $uniqueArray;
}
$result = removeDupli($inputArray);
print_r($result);
?>
