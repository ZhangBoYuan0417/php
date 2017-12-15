<?php 

/*用户输入日期查询备忘 比对你数组中的日期 输入正确日期alert出当天的内容 输入的日期数组中没有就输出无备忘*/
if (isset($_GET['sub'])) {
	$date = $_GET['date'];
	$newData = explode("-",$date);
	$res = "";
	if ($newData[0] == 1) {
		if ($newData[1] == 1) {
			$res = "01-01日备忘：跨年";
		}elseif ($newData[1] == 5) {
			$res = "01-05日备忘：出差";
		}else{
			$res = "无备忘";
			// echo "<script>alert('".$res."')</script>";
			// echo "123";
		}
	}else{
			$res = "无备忘";
	}
	echo '<script>alert("'.$res.'")</script>';
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="schedule.php" method="get" accept-charset="utf-8">
 		<h3>单击查询当前日程</h3>
 		<p>输入查询日期：</p>
 		<input type="text" name="date"><br/>
 		<input type="submit" name="sub" value="提交">
 		<input type="reset" name="" value="重置">
 	</form>	
 </body>
 </html>