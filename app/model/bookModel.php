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

    public function getAllAuthors() {
        $query = $this->db->prepare("SELECT * FROM authors");
        $query->execute();

        $authors = $query->fetchAll(PDO::FETCH_OBJ);

        return $authors;
}
    

    public function getBookById($id) {
        $query = $this->db->prepare("SELECT * FROM books WHERE id_book = ?");
        $query->execute([$id]);
        $books = $query->fetchAll(PDO::FETCH_OBJ);


        return $books;
    }

    public function addBook($names = null, $genre = null, $choice = null) {

        $query = $this->db->prepare('INSERT into books (book_name, genre, id_author_fk) VALUES (?, ?, ?)');
        $query->execute([$names, $genre, $choice]);

    }

    public function deleteBook($id = null) {

        $query = $this->db->prepare('DELETE FROM books WHERE id_book = ?');
        $query->execute([$id]);

    }

    public function updateBook($names = null, $genre = null, $choice = null, $id = null) {

        $query = $this->db->prepare('UPDATE books SET book_name = ?, genre = ?, id_author_fk = ? WHERE id_book = ?');
        $query->execute([$names, $genre, $choice, $id]);

    }
    

}