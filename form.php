<html>
<body>

 <form method="get">
  Name:&nbsp;<input type="text" name="name"/><br>
  
  Phone:<input type="text" name="phone"/><br>
  Password:<input type="password" name="password"/><br>
  
  <input type="submit" name="submit"/><br>
  </form>
  </body>
  
<?php
echo "Name:";
echo @$_GET['name']."<br>";
echo "Phone:";
echo @$_GET['phone'];
?>
</html>