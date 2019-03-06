<?php
	$s[1]="台";
	$s[2]="州";
	$s[3]="学";
	$s[4]="院";

	$s1=[1=>"台",2=>"州",3=>"学",4=>"院"];
	$s2=array(1=>"台",2=>"州",3=>"学",4=>"院");

	print_r($s);
	echo "</br>";
	print_r($s1);
	echo "</br>";
	print_r($s2);
	echo "</br>";

	$text=array(1=>'a',"1"=>'b',1.5=>'c',true=>'d');
	print_r($text);
?>