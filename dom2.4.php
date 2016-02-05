<?php
$a=rand(0,1000);
  echo "a=".$a ;
  $p1=0;
  $p2=0;
  $p3=0;
  $p4=0;
   if ($a <=50 ){ $p1 = $a * 0.10 ;
   else 
	   if ($a<= 150) { 
			$p1=5;
			$p2 = ($a-50)*0.15;
		else
		   if($a<=250) { 
				$p1=5; 
				$p2=15; 
				$p3 = ($a-150)*0.25;
			else 
				$p1=5;
				$p2=15;
				$p3=25;
				$p4=($a-250)*0.35;
		   }
	   }
   }   
	$S=$p1+$p2+$p3+$p4;
	$DDS=0.2*$S;
	$Total = $S + $DDS;
	echo "The Total is " . $Total;