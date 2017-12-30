<?php 
	$arr =array(
		array(12.92,"3236","阿里斯","美国","1985.07.24",6),
		array(13.04,"3246","理查森","美国","1986.04.04",4),
		array(13.04,"2182","汉斯勒","牙买加","1990.06.17",1),
		array(3.04,"3556","张三","美国","1966.04.04",2),
		array(11.04,"3250","李四","美国","1986.04.04",5),
		);
	sort($arr);
	// echo "<pre>";
	// var_dump ($arr) ;
	// echo "</pre>";

	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
	<tr>
		<td>排名</td>
		<td>号码</td>
		<td>姓名</td>
		<td>国际</td>
		<td>生日</td>
		<td>跑道</td>
		<td>成绩</td>
	</tr>
		<?php 
			for ($i=0; $i < count($arr); $i++) { 
			
		?>
			<tr <?php if ($i == 0) {
				echo "bgcolor = 'red'";
			}elseif ($i == 1) {
				echo "bgcolor = 'yellow'";
				
			}elseif ($i == 2) {
				echo "bgcolor = 'blue'";
			} ?>>
				<td>
					<?php echo $i + 1 ?>
				</td>
				<td>
					<?php echo $arr[$i][1]; ?>
				</td>
				<td> 
					<?php echo $arr[$i][2]; ?>
				</td>
				<td>
					<?php echo $arr[$i][3]; ?>
				</td>	
				<td>
					<?php echo $arr[$i][4]; ?>
				</td>
				<td>
					<?php echo $arr[$i][5]; ?>
				</td>
				<td>
					<?php echo $arr[$i][0]; ?>
				</td>
			</tr>
		<?php 
		} 
		 
		 ?>
	</table>
</body>
</html>
