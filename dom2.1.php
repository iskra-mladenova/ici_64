<?php
 $a=rand(0,180);
 $b=rand(0,180);
 $c=rand(0,180);
 echo "a=".$a. ' b='. $b . ' c= '. $c ;
 $S = $a + $b + $c ;
  If ($S %180 == 0) {
	 echo " With those corners can be made triangle";
 } else {
	 echo " With those corners can not be made triangle"";
 }
 ?>
