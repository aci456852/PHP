<?php
include 'MessageBoardPDO.php';
$name=$_POST['name'];
$avatar=$_POST['avatar'];
$content=$_POST['content'];
$MessageBoardPDO=new MessageBoardPDO();
$MessageBoardPDO->insert($name,$avatar,$content);
header('Location: /');