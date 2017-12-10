<?php 
	echo "有框的";
	echo "<table>";
	for ($i=1; $i < 10; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= $i; $j++) { 
			echo "<td>";
			echo "$i * $j =".($i *$j);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br />";
	echo "没框的";
	echo "<table border=1>";
	for ($i=1; $i < 10; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= $i; $j++) { 
			echo "<td>";
			echo "$i * $j =".($i *$j);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "反的";
	echo "<table border=1>";
	for ($i=9; $i>0; $i--) { 
		echo "<tr>";
		for ($j=1; $j <= $i; $j++) { 
			echo "<td>";
			echo "$i * $j =".($i *$j);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "反反的";
	echo "<table border=1>";
	for ($i=9; $i>0; $i--) { 
		echo "<tr>";
		for ($k=0; $k < 9-$i; $k++) { 
			echo "<td>";
			echo " ";
			echo "</td>";
		}
		for ($j=1; $j <= $i; $j++) { 
			echo "<td>";
			echo "$i * $j =".($i *$j);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "反反反的";
	echo "<table border=1>";
	for ($i=1; $i<=9; $i++) { 
		echo "<tr>";
		for ($k=0; $k < 9-$i; $k++) { 
			echo "<td>";
			echo " ";
			echo "</td>";
		}
		for ($j=1; $j <= $i; $j++) { 
			echo "<td>";
			echo "$i * $j =".($i *$j);
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>