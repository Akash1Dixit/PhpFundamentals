<?php
  echo "The Result is :-";
  switch(@$_POST['c'])
  {
	  case(1):
	  echo $_POST['a']+$_POST['b'];
      break;
	  
	  case (2):
	  echo $_POST['a']-$_POST['b'];
	  break;
	  
	  case (3):
	  echo $_POST['a']*$_POST['b'];
	  break;
  
      case (4):
	  echo $_POST['a']/$_POST['b'];
	  break;
	  
	  
	  default: 
	  echo "Enter number between 1  and 4";
	  break;
	
  }	
  ?>
  
  