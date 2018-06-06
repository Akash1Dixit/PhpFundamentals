<?php
 $x=time()+60;
 /*setcookie("Test","Hello",$x);   //setcookie("Identity","Value/Content","Time of existence")
 echo $_COOKIE['Test']."<br>";*/

$cookie_name = "user";
$cookie_value= "student";
setcookie($cookie_name,$cookie_value,$x);
if(!isset($_COOKIE[$cookie_name])) {
  print 'Cookie with name "' . $cookie_name . '" does not exist...';
} else {
		print "Cookie is Set"."<br>";
        print 'Cookie Name "' . $cookie_name . '" Cookie Value is: ' . $_COOKIE[$cookie_name];
}

 ?>