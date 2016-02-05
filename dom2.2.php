<?php
 $a=rand(0,100);
 $b=rand(0,100);
 $c=rand(0,100);
 echo "a=".$a. ' b='. $b . ' c= '. $c ;
   If ($a < $b+$c || $b<$a+$c || $c<$a=$b || $a>$b-$c || $b>$a-$c || $c>$a-$b ){
	   echo "Those numbers can be sides of triangle";
   } else {}
		echo "Those numbers can not be sides of triangle";
}