<?php


if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mail=$_POST['email'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];
	$mailto="admin@csksrc.org";

	

	mail($mailto,"Message:".$msg,"From:".$mail);
}
echo "Your Query has successfully reached the destination. You will get a reply shortly"."<br>";
echo "Return to:-<br>";
echo "<a href='http://csksrc.org'>1.National Institute for Industrial Training</a>"."<br>";
echo "<a href='index.html'>2.Hewlett Packard Enterprise Main page</a>"."<br>";


?>