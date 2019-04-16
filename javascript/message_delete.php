<?php
include 'MessageBoardPDO.php';
$id=$_POST['id'];
$MessageBoardPDO=new MessageBoardPDO();
$MessageBoardPDO->delete($id);
header('Location: /');