<?php 

/*转换数组为字符串 使用implode()函数来把form表单中输入的内容直接转换成字符串输出 使用数组的形式*/

	if (isset($_GET['sub'])) {
		$arr[0] = $_GET['tittle'];
		$arr[1] = $_GET['content'];
		$arr[2] = $_GET['date'];
		$str = "";
		$str = implode(",",$arr);
		echo "转换字符串结果：".$str;
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="news.php" method="get" accept-charset="utf-8">
 		请输入标题内容和日期<br>
 		新闻标题：<input type="text" name="tittle"><br>
 		新闻内容：<input type="text" name="content"><br>
 		新闻日期：<input type="text" name="date"><br>
 		<input type="submit" name="sub">
 	</form>	
 </body>
 </html>