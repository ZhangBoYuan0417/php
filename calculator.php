<?php 
	if(isset($_GET['sub'])){
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="calculator.php">
		<input type="text" name="a" value="<?php echo $a;?>">
		<select name="c">
			<option value="1" <?php if ($c == 1) {
				echo 'selected="selected"';
			} ?>>+</option>
			<option value="2" <?php if ($c == 2) {
				echo 'selected="selected"';
			} ?>>-</option>
			<option value="3" <?php if ($c == 3) {
				echo 'selected="selected"';
			} ?>>*</option>}
			<option value="4" <?php if ($c == 4) {
				echo 'selected="selected"';
			} ?>>/</option>
			<option value="5" <?php if ($c == 5) {
				echo 'selected="selected"';
			} ?>>%</option>
		</select>
		<input type="text" name="b" value="<?php echo $b;?>">
		<input type="submit" value="计算" name="sub"><br>
		<?php 
		switch ($c) {
			case 1:
				echo "结果为："."$a + $b =". ($a+$b) ;
				break;
			case 2:
				echo "结果为："."$a - $b =". ($a-$b)  ;
				break;
			case 3:
				echo "结果为："."$a * $b =". ($a*$b)  ;
				break;
			case 4:
				echo "结果为："."$a / $b =". ($a/$b) ;
				break;
			case 5:
				echo "结果为："."$a % $b =". ($a%$b) ;
				break;	
		}
		 ?>
	</form>
</body>
</html>