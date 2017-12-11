<?php 
	$info = array(
			'user' => array(
				array(1,'laoshan','male','18'),
		      	array(2,'laoxie','male','19'),
		      	array(3,'xiaod','famale','20'), 
			),
			'score' =>array(
				array(1,'90','91','92'),
				array(2,'93','94','95'),
				array(3,'96','97','98'),
			),
			'contaict' =>array(
				array(1,'111','shan@a.com'),
				array(2,'222','xie@b.com'),
				array(3,'333','dong@c.com'),
			)
		);
	foreach ($info as $key => $value) {
		echo "<table width=500 align='center' border=1>";
		echo "<caption>";
		echo $key;
		echo "</caption>";
		foreach ($value as $k => $v) {
			echo "<tr>";
			foreach ($v as $a => $b) {
				echo "<td>";
				echo $b;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

	}



 ?>