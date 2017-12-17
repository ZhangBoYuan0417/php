<?php 
	if (isset($_GET['sub'])) {
		$arr = array();
		$arr[] = $_GET['one'];
		$arr[] = $_GET['two'];
		$arr[] = $_GET['three'];
		if ($arr == array_unique($arr)) {
			echo "<script>alert('分组成功！！！')</script>";
		}else{
			echo "<script>alert('分组失败，请重试！！！')</script>";
		}
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="grouping.php" method="get">
 		分组一：<input type="text" name="one"><br>
 		分组二：<input type="text" name="two"><br>
 		分组三：<input type="text" name="three"><br>
 		<input type="submit" name="sub" value="分组">
 	</form>
 </body>
 </html>