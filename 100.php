<?php 

echo "<table border=1 width=500>";
for ($i=0; $i < 100 ; $i++) { 
	if ($i%2 == 0) {
		$a = red;
	}else{
		$a = green;
	}
	echo "<tr bgcolor=$a>";
	for ($j=0; $j < 9; $j++) { 
		echo "<td>";
		echo $i+1;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";





?>