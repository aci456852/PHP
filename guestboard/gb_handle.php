<?php
	$avatar_file=$_FILES['avatar'];
	if(strpos($avatar_file['type'], 'image')!==FALSE){
		move_uploaded_file($avatar_file['tmp_name'], $avatar_file['name']);
		$line=$_POST['name'].'@'.$avatar_file['name'].'@'.$_POST['message'];
		if(file_exists('./message.txt')){
			$origin_messages=file_get_contents('./message.txt');
			file_put_contents('./message.txt', $origin_messages."\r\n".$line);
		}
		else{
			file_put_contents('./message.txt', $line);
		}		
		echo '<a href="gb_home.php">留言成功，点击返回home' ;
	}
	else{
		die('这位朋友，请不要上传奇怪的东西哦~ <a href="gb_home.php">点击返回home ');
	}

?>