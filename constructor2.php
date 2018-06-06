<?php
  class myclass
  {
/*function __construct($x,$y,$z)
{ echo $x;
echo $y;
echo $z;
}*/
     var $salary;
     function __construct($x)
    {
	$this->salary=$x;
    }
      function disp($x)
	  {
      echo $x;
      }
   }
      $ob=new myclass('1',"b123","hi");
      $ob=new myclass(5);
      $ob->disp(2);
      $salary=3;
      echo $ob->salary;
?>
