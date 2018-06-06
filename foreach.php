<?php
$a = array(10,20,30,40,50);
foreach ($a as $i => $value) {
	print_r($a);
	unset($a[$i]);
	echo "<br>";

}
?>