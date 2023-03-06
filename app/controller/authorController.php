<?php

    require_once './app/model/authorModel.php';
    require_once './app/view/authorView.php';


    class AuthorController {

        private $model;
        private $view;

        public function __construct() {

            $this->model = new AuthorModel();
            $this->view = new AuthorView();

        }

        public function showAllAuthors() {

              $authors = $this->model->getAllAuthors();
            $this->view->showAllAuthors($authors);

        }

        public function searchBookByAuthor() {

            $authors = $this->model->getAllAuthors();
            $this->view->searchBookByAuthor($authors);

        }

        public function getAllBooksByAuthor() {

            if(!empty($_GET['choice']) && isset($_GET['choice'])) {

                
                $id = $_GET['choice'];

                $books = $this->model->getAllBooksByAuthor($id);
                $this->view->showAllBooksByAuthor($books);


            }

        }


    }