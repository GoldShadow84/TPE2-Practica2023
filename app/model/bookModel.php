<?php

class BookModel {

    private $db;
    
    function __construct() {
        
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');

    }

    public function getAllBooks() {
            $query = $this->db->prepare("SELECT * FROM books");
            $query->execute();

            $books = $query->fetchAll(PDO::FETCH_OBJ);

            return $books;
    }

    public function getBookById($id) {
        $query = $this->db->prepare("SELECT * FROM books WHERE id_book = ?");
        $query->execute([$id]);
        $books = $query->fetchAll(PDO::FETCH_OBJ);


        return $books;
    }


}