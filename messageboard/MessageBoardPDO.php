<?php

class MessageBoardPDO
{
    private $pdo;
    
    public function __construct() {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=message_board", "root", 'root');
    }
    
    public function __destruct() {
        $this->pdo = null;
    }
    
    public function insert($name, $avatar, $content) {
        $statment = $this->pdo->prepare("insert into messages (name, avatar, content) values (?,?,?)");
        $statment->execute([$name, $avatar, $content]);
        //var_export($this->pdo->lastInsertId());
    }
    
    public function queryAll() {
        $statment = $this->pdo->prepare("select * from messages");
        $statment->execute();
        $all = $statment->fetchAll();
        return $all;
    }
    
    public function delete($id) {
        $statment = $this->pdo->prepare("delete from messages where id=?");
        $statment->execute([$id]);
    }
    
    public function reply($id, $replymessage) {
        $statment = $this->pdo->prepare("update messages set replymessage=? where id=?");
        $statment->execute([$replymessage,$id]);
    }
}
