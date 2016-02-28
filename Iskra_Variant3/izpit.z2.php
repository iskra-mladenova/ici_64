<?php
 $people=array(
		array('name'=>'Ivan' ,'age'=>'10', 'hеight'=>'120', 'weight'=>'28'),
		array('name'=>'Asen' ,'age'=>'50',  'hеight'=>'179', 'weight'=>'78'),
		array('name'=>'Georgi' ,'age'=>'15', 'hеight'=>'185', 'weight'=>'65'),
		array('name'=>'Anna ','age'=>'30', 'hеight'=>'167', 'weight'=>'68'),
		array('name'=>'Elena' ,'age'=>'40', 'hеight'=>'177', 'weight'=>'72'));
 $count=count($people);
 
 for ($i=0; $i<$count; $i++) {
 $itm = ($people[$i]['hеight']-$people[$i]['weight'])/($people[$i]['age']**2);
	$people[$i]['itm']= $itm;
 }
 $sum=0;
 for ($j=0; $j<$count; $j++) {
 $sum +=$people[$j]['itm'];
 }
 $aver_itm=$sum/$count;
 echo 'Average ITM = '.$aver_itm;
 ?>
 <table border='1'>
	<tr> 
		<td> Name </td>
		<td> Age </td>
		<td> Height </td>
		<td> Weight</td>
		<td> ITM </td>
	</tr>
<?php	
	for ($l=0; $l<$count; $l++){
		echo '<tr>';
			echo '<td>'.$people[$l]['name'].'</td>';
			echo '<td>'.$people[$l]['age'].'</td>';
			echo '<td>'.$people[$l]['hеight'].'</td>';
			echo '<td>'.$people[$l]['weight'].'</td>';
			echo '<td>'.$people[$l]['itm'].'</td>';
		echo '</tr>';
	}
 echo '</table>';
 $min_itm=$people[0]['itm'];
 $index_min=0;
 for ($k=1; $k<$count; $k++){
	if ($min_itm>$people[$k]['itm']){
		$min_itm=$people[$k]['itm'];
		$index_min=$k;
	}
 }
 echo 'Person with the lowest ITM is: '.$people[$index_min]['name'];
 

