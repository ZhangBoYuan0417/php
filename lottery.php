<?php 
	if (isset($_GET['sub'])) {
		$arr = array(
			"one" => array(),
			"two" => array(),
			"three" => array(),
			"four" => array(),
			"five" => array(),

			);
		for ($i=0; $i < 5; $i++) { 
			$arr[one][i] = 1;

		}
	echo "<pre>";
	print_r($arr[one][0]);
	echo "</pre>";
	}




 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 <h3>福利彩票号码自动生成器</h3>
 <form action="lottery.php" method="get">
 	<input type="submit" name="sub" value="单击生成新的号码">
 </form>
 
 <script>
 	// alert(navigator.appName)
 </script>
 </body>
 </html>