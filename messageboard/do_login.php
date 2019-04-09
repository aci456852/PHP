<?php
$email=$_POST['email'];
$password=$_POST['password'];
if($email=="lzy@qq.com"&&$password=="123456"){
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['role']='admin';
    header('Location: /');
}
else
{
    echo  "Login failed <a href='/login.php'>返回</a>";
}