<?php
	$myarray=[1,2,3,43,2,6,8];
	//循环遍历
	foreach ($myarray as $key => $value) {
		echo $value;
	}
	echo "</br>";
	while (list($value,$key)=each($myarray)) {
		echo "$value=$key"."\n";
	}
	echo "</br>";
	//3种排序
	$myarray1=$myarray;
	asort($myarray1);
	print_r($myarray1);
	echo "</br>";

	$myarray2=$myarray;
	sort($myarray2);
	print_r($myarray2);
	echo "</br>";

	$myarray3=$myarray;
	ksort($myarray3);
	print_r($myarray3);
	echo "</br>";
	
	//查询是否存在key=43
	if(array_key_exists(43, $myarray))
	{
		echo "key=43存在";
	}
	else
	{
		echo "key=43不存在";
	}
	echo "</br>";

	//查询是否存在value=43
	if(array_search(43, $myarray))
	{
		echo "value=43存在";
	}
	else
	{
		echo "value=43不存在";
	}
	echo "</br>";
	//查询是否存在value=42
	if(array_search(42, $myarray))
	{
		echo "value=42存在";
	}
	else
	{
		echo "value=42不存在";
	}
	echo "</br>";

	//查询value=6的key是否存在
	echo array_search(6, $myarray);
	echo "</br>";

	//求数组的值的和
	echo array_sum($myarray);
	echo "</br>";

	//2给定字符串，解析成数组
	$str="13612455654#13776541245#15676876543";
	$str_array=explode("#", $str);
	print_r($str_array);
	echo "</br>";
	//求共有多少个手机号码
	echo count($str_array);
	echo "</br>";

	//3定义一个二维数组
	$str2=array(
			"周一食堂菜谱"=>array("糖醋里脊","大白菜","鱼香肉丝"),
			"周二食堂菜谱"=>array("小青菜","西湖醋鱼","番茄炒蛋"),
			"周三食堂菜谱"=>array("酱鸭","藕片","水蒸蛋")
		);
	print_r($str2);

?>