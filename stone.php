<?php 
	$str = 'images/shitou.png';
	if (isset($_GET['sub'])) {
		$you = $_GET['you'];
		$rescom = "";
		$reswin = "";
		switch ($you) {
			case 1:
				$str = 'images/shitou.png';
				break;
			case 2:
				$str = 'images/jianzi.png';
				break;
			case 3:
				$str = 'images/bu.png';
				break;
		}
		$com = rand(1,3);
		switch ($com) {
			case 1:
				$rescom = "电脑出的石头";
				break;
			
			case 2:
				$rescom = "电脑出的剪子";
				break;
			case 3:
				$rescom = "电脑出的布";
				break;
		}
		switch ($you - $com) {
			case -1:
				$reswin = "大吉大利，今晚吃鸡";
				break;
			case 1:
				$reswin = "再接再厉";
				break;
			case 2:
				$reswin = "大吉大利，今晚吃鸡";
				break;
			case -2:
				$reswin = "再接再厉";
				break;
			case 0:
				$reswin = "平局";
				break;
		}
	};
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="stone.php" method="get">
		<select name="you">
			<option value="1" <?php if ($you == 1) {
				echo "selected";
			} ?>>石头</option>
			<option value="2" <?php if ($you == 2) {
				echo "selected";
			} ?>>剪子</option>
			<option value="3" <?php if ($you == 3) {
				echo "selected";
			} ?>>布</option>}
		</select>
		<img src="<?php echo $str;?>" alt="">
		<input type="submit" name="sub" value="提交">
		<br>
		<?php 
			echo $rescom."<br>".$reswin;

		 ?>
	</form>
</body>
</html>