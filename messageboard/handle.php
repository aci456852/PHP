<?php
include("MessageBoardPDO.php");
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
    $messageBoard = new MessageBoardPDO();
    $messages=$messageBoard->queryAll();
    include("MessageBoardhome.php");
}
function handle_add(){
    $avatar_file=$_FILES['avatar'];
    if(strpos($avatar_file['type'], 'image')!==FALSE){
        move_uploaded_file($avatar_file['tmp_name'], $avatar_file['name']);
        $name=$_POST['name'];
        $message=$_POST['message'];
        $messageBoard = new MessageBoardPDO();
        $messageBoard->insert($name,$avatar_file['name'],$message);
        echo '<a href="handle.php?route=view">留言成功，点击返回home';
    }
    else{
        die('这位朋友，请不要上传奇怪的东西哦~ <a href="handle.php?route=view">点击返回home ');
    }
}
function handle_delete(){
    $name=$_POST['name'];
    $avatar=$_POST['avatar'];
    $message=$_POST['message'];
    $messageBoard = new MessageBoardPDO();
    $messageBoard->delete($name,$avatar,$message);
    echo '<a href="handle.php?route=view">删除成功，点击返回home' ;
}
function handle_reply(){
    $name=$_POST['name'];
    $avatar=$_POST['avatar'];
    $message=$_POST['message'];
    $replymessage=$_POST['replymessage'];
    $messageBoard = new MessageBoardPDO();
    $messageBoard->reply($name,$avatar,$message,$replymessage);
    echo '<a href="handle.php?route=view">回复成功，点击返回home' ;
}
?>