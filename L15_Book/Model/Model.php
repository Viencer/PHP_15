<?php

include_once('Book.php');
include_once('DB.php');

class Model {

    private $conn;

    public function __construct() {
        $this->conn = DB::getInstance();
    }

    public function getBookList() {
        $sql = "SELECT * FROM book";
        if ($st = $this->conn->getHandler()->prepare($sql)) {
        $st = $this->conn->getHandler()->prepare($sql);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function getBookTitle($title) {
        $sql = "SELECT * FROM book WHERE title = :title";
        $st = $this->conn->getHandler()->prepare($sql);
        $st->bindParam(':title', $title);
        $st->execute();
        $book = $st->fetch(PDO::FETCH_OBJ);
        return $book;
    }
}