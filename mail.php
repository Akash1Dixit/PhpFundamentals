<?php
if(isset($_POST['submit']))
{
$to="admin@xyz.com";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($to,$subject,$email,$message);
}

?>