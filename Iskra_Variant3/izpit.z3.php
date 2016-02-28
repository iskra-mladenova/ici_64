<?php
$masiv1=array (10,12,15,19,30,26);
$masiv2=array (10,12,15,19,30,26,48,56,80);

function average_value ($masiv) {
	$count = count($masiv);
	$sum=0;
	for ($i=0; $i<$count; $i++) {
		$sum+=$masiv[$i];
	}
	$aver_value=$sum/$count;
	echo 'Avarage value is:'.$aver_value ;
}

average_value ($masiv1);
echo '</br>';
average_value ($masiv2);