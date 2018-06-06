<?php
$array=array(1,2,3,4,5);
print_r($array);
echo"<br>";

foreach($array as $i=> $value)
{ unset($array[$i]);}
print_r($array);
 echo"<br>";
$array[]=7;
print_r($array);//
$array=array_values($array);
$array[]=8;
print_r($array);
echo"<br>";

?>