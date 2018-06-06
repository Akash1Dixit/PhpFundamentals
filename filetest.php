<?php
/*define('DB_HOST', 'localhost'); 
define('DB_NAME', 'student');
define('DB_USER','root');
define('DB_PASSWORD','');*/
echo $_FILES['img']['name']."<br>";
echo $_FILES['img']['tmp_name']."<br>";
echo $_FILES['img']['size']."<br>";
echo $_FILES['img']['type']."<br>";
move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
$str=explode(".",$_FILES['img']['name']);
print_r($str);
$type=array("jpeg","jpg","png","gif","tif","JPEG","JPG","PNG","GIF","TIF");
if(in_array($str[1],$type))
	echo "True";
else 
	echo "False";

?>