<?php
include 'MessageBoardPDO.php';

$avatar_file=$_FILES['avatar'];
if(strpos($avatar_file['type'], 'image')!==FALSE){
    move_uploaded_file($avatar_file['tmp_name'], $avatar_file['name']);
    $name=$_POST['name'];
    $content=$_POST['content'];
    $MessageBoardPDO=new MessageBoardPDO();
    $MessageBoardPDO->insert($name,$avatar_file['name'],$content);
    header('Location: /');
}
else{
    die('这位朋友，请不要上传奇怪的东西哦~ <a href="handle.php?route=view">点击返回home ');
}