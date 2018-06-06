<?php
//1st way
echo date("d");
echo "/";
echo date("m");
echo "/";
echo date("y");
echo "<br>";
//2nd way
echo date("d-M-Y");
echo "<br>";
// for retreiving local time
date_default_timezone_set('Asia/Calcutta');
$x=date("h:i:sa");//h for 12 hours time format
echo "$x"."<br>";
// Displaying both Date and time
echo date("d-M-Y  H:i:s"); //H for 24 hours time format
?>