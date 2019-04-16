<?php
include("MessageBoardPDO.php");
$Messageboard = new MessageBoardPDO();
$all=$Messageboard->queryAll();
