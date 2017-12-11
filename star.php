<?php 
	for ($i=1; $i <= 5; $i++) { 
		for ($k=1; $k <= 5-$i; $k++) { 
			echo "&nbsp;";
		}
		for ($j=1; $j <= 2*$i-1; $j++) { 
			echo "*";
		}
		echo "<br />";
	}
	echo "&nbsp;&nbsp;&nbsp;&nbsp;*";
	echo "<br>";
	for ($i=2; $i <=4 ; $i++) { 
		for ($j=1; $j <=5-$i ; $j++) { 
			echo "&nbsp;";
		}
		echo "*";
		for ($k=1; $k <= 2*$i-3; $k++) { 
			echo "&nbsp;";
		}
		echo "*";
		echo "<br />";
	}
	echo "*********";
 ?>