<?php 
/*PHP生成不重复的随机数 从0到9产生五个随机数 但是这五个随机数不能重复 程序中间使用array_unique()*/

	$arr = [];
	for ($i=0; $i < 5; $i++) { 
		$ran = rand(0,9);
		$arr[$i] = $ran;
		if ($arr != array_unique($arr)) {
			$i --;
		}
	}
	$res = implode(" ",$arr);
	echo "<h3>随机出5个随机数</h3>";
	echo $res;
	echo "<p style='color:red'>范围0~9且不重复</p>";
 ?>