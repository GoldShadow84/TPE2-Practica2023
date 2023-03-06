<?php


    class AuthorModel {

        private $db;

        function __construct() {

            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');

        }

        public function getAllAuthors() {

            $query = $this->db->prepare('SELECT * FROM authors');
            $query->execute();
            $authors = $query->fetchAll(PDO::FETCH_OBJ);
            
            return $authors;
        }

        public function getAllBooksByAuthor($id) {
            $query = $this->db->prepare('SELECT * FROM books JOIN authors ON books.id_book = authors.id_author WHERE id_author = ?');
            $query->execute([$id]);

            $books = $query->fetchAll(PDO::FETCH_OBJ);

            return $books;
        }


    }