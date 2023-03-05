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



    }