<?php
$arr=["1","2","3","4","5"];
function reversArray($arr)
{
    $m=[];
   for($i=sizeof($arr)-1;$i>=0;$i--)
   {
    $m[sizeof($arr)-1-$i]=$arr[$i];
   }
    return $m;
}
print_r($arr);
$c=reversArray($arr);
echo "<br>";
print_r($c);

?>
