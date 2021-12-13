<?php
session_start();
include_once 'Model/Model.php';
error_reporting(0);
class Controller {

    public $model;
    
    public function __construct() { 
        $this->model = new Model(); 
    }
    
    public function invoke() {
        if (isset($_GET['book'])) {
            $book = $this->model->getBook($_GET['book']);
            include 'View/viewbook.php';
        }  else if (isset($_GET['addBook'])) {
            $this->model->addBook($_POST['title'], $_POST['author'], $_POST['description']);
            $books = $this->model->getBookList();
            include 'View/booklist.php';
        } else if (isset($_GET['search'])) {
            if ($_POST['title']) {
                $book = $this->model->getBookTitle($_POST['title']);
            }
             include 'View/search.php';
        } else {
            $books = $this->model->getBookList();
            include 'View/booklist.php';
        }
    }
}