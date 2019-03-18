<?php
	$allowed_route=['view','add','delete','reply'];
	$route=$_GET['route'];
	if(!$route){
		$route="view";
	}
	if(!in_array($route, $allowed_route)){
		die('不被允许的路由');
	}
	$method= "handle_" . $route;
	$method();
	function handle_view(){
		$messages=array();                                           
		if(file_exists("./message.txt")){
			$messages=file("./message.txt");
		}
		include("gb_home.php");
	}
	function handle_add(){
		$avatar_file=$_FILES['avatar'];
		if(strpos($avatar_file['type'], 'image')!==FALSE){					
			$line=$_POST['name'].'@'.$avatar_file['name'].'@'.$_POST['message'];
			move_uploaded_file($avatar_file['tmp_name'], $avatar_file['name']);		
			if(file_exists('./message.txt')){			
				$origin_messages=file_get_contents('./message.txt');
				file_put_contents('./message.txt', $origin_messages."\r\n".$line);
			}
			else{
				file_put_contents('./message.txt', $line);
			}		
			echo '<a href="index.php?route=view">留言成功，点击返回home' ;
		}
		else{
			die('这位朋友，请不要上传奇怪的东西哦~ <a href="index.php?route=view">点击返回home ');
		}
	}
	function handle_delete(){
		$name=$_POST['name'];
		$avatar=$_POST['avatar'];
		$message=$_POST['message'];
		$line=$name.'@'.$avatar.'@'.$message;
		echo $line;
		$messages=file("./message.txt");
		$newMessages=[];
		foreach ($messages as $value) {
			if(trim($value)!=trim($line))
			{
				$newMessages[]=trim($value);
			}
		}
		file_put_contents("./message.txt", implode("\n", $newMessages));
		echo '<a href="index.php?route=view">删除成功，点击返回home' ;
	}
	function handle_reply(){
		$name=$_POST['name'];
		$avatar=$_POST['avatar'];
		$message=$_POST['message'];
		$replymessage=$_POST['replymessage'];
		$line=$name.'@'.$avatar.'@'.$message;
		$rline=$name.'@'.$avatar.'@'.$message.'@'.$replymessage;
		echo $line;
		$messages=file("./message.txt");
		$newMessages=[];
		foreach ($messages as $value) {
			if(trim($value)!=trim($line))
			{
				$newMessages[]=trim($value);
			}
			else
			{
				$newMessages[]=trim($line.'@'.$replymessage);
			}
		}
		file_put_contents("./message.txt", implode("\n", $newMessages));
		echo '<a href="index.php?route=view">回复成功，点击返回home' ;
	}
?>