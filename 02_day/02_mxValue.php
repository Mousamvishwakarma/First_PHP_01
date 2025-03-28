<?php 
$arr = [13, 26, 35, 48, 565, 6, 7, 37];
$max = $arr[0];
for ($i = 1; $i < count($arr); $i++) {
    if($arr[$i] > $max) {
        $max = $arr[$i];
    }
}
echo "your Maximum Value : " . $max;
?>


























