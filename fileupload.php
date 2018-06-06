<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'file');
define('DB_USER','root');
define('DB_PASSWORD','');
echo $_FILES['img']['name']."<br>";
echo $_FILES['img']['tmp_name']."<br>";
echo $_FILES['img']['size']."<br>";
echo $_FILES['img']['type']."<br>";
move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
$path = "uploads/".$_FILES['img']['name'];
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
$sql = "insert into photo(Address) values('$path')";
mysqli_query($con,$sql) or die("Error Inserting Values".mysqli_error($con));
$sql2 = "select * from photo ";
$ob=mysqli_query($con,$sql2) or die("Error Inserting Values".mysqli_error($con));
$row=mysqli_fetch_array($ob);
print "<br><img src='".$row['Address']."'height=500 width=500>";
?>