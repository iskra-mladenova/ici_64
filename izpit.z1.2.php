<?php
session_start();
$date = $_GET['date'];

  if (!empty($_GET['submit'])) {
	  if ($date>30) {
		  echo 'Invalid date! Please, enter again.';
		  echo '<a href='."http://localhost/ici_php/izpit.z1.1.php". '></a>';
		  
//		  '<a href = "http://'.$site.'" >'.$site.'</a>';
	  } else { 
			if ( $date%3==0) {
				echo 'We recommend clothing for rainy weather.';
			} else {
				echo 'We recommend clothing for hot weather.';
			}
		}	
	}
 ?>	
 