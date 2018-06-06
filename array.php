<?php
$arr=array("2"=>"Hello","1"=>"Everyone");
/*print_r($arr);
echo "<br>";*/
foreach($arr as $i=>$value)
{
unset($arr[$i]);
print_r ($arr);
echo "<br>";
}

?>