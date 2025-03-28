<?php
$numbers = [1, 2, 3, 5, 6];

function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}
echo "Sum of Array elements: ".sumArray($numbers);
?>
