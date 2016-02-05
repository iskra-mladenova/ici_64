<?php
 $a=rand(0,1000);
  echo "a=".$a ;
   If ($a % 3 == 0 ){
	   if ($a%5 == 0) {
		   if($a%7==0) {
			   echo "The number can be divided to 3, 5 and 7. ";
		   } else {
				echo "The number can be divided to 3 and 5.";
		    }
	   } else { if($a%7==0) {	
				echo "The number can be divided to 3 and 7.";}
			else {
				echo "The number can be didvided to 3.";
			}
	    }
    } 
	else {if ($a%5 == 0) {
		   if($a%7==0) {
				echo "The number can be divided to 5 and 7. ";}
			else {
				echo "The number can be divided to 5.";
		    }
		} else {
			if($a%7==0) {
			echo "The number can be divided  7. ";}
			else {
				echo "The number can not be divided 3 or 5 or 7.";
		    }
		}
	} 