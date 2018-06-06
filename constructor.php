<?php
class myclass
{
function __construct($x,$y,$z)
{ echo $x;
echo $y;
echo $z;
}
function disp($x){
echo $x;
}
}
$ob=new myclass('1',"b123","hi");
$ob->disp(1);
?>
