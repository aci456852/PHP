<?php
include 'MessageBoardPDO.php';
$id=$_POST['id'];
$replymessage=$_POST['replymessage'];
$MessageBoardPDO=new MessageBoardPDO();
$MessageBoardPDO->reply($id,$replymessage);
header('Location: /');