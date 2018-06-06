<?php
$k=2;
	for($i=0;$i<2;$i++)
	{
		for($j=0;$j<2;$j++)
		{
			$a[$i][$j]=$k;
			$k+=2;
		}
		echo "<br>";
	}

	print_r($a);
?>