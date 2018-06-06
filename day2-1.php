<?php
	for($i=1;$i<100;$i++)
	{
		$count=1;
		for($j=2;$j<$i;$j++)
		{	if($i%$j==0)
				$count=0;			
		}
		if($count==1)
			echo $i.'&nbsp;';
	}
?>