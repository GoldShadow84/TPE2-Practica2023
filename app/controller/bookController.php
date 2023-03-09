<?php

require_once './app/model/bookModel.php';
require_once './app/view/bookView.php';

require_once './app/model/authorModel.php';

class BookController {

    private $model;
    private $view;

    public function __construct() {

        $this->model = new BookModel();
        $this->view = new BookView();


    }

    public function showBooks() {

        $authors = $this->model->getAllAuthors();
        $books = $this->model->getAllBooks();
        $this->view->showHome($books, $authors);
    }

    public function showBookById($id) {

        $book = $this->model->getBookById($id);
        $this->view->showBookById($book);

    }

    public function addNewBook() {

        if(!empty($_POST['names']) && isset($_POST['names']) && !empty($_POST['genre']) && isset($_POST['genre']) && !empty($_POST['choice']) && isset($_POST['choice'])) {

            $names = $_POST['names'];
            $genre = $_POST['genre'];
            $choice = $_POST['choice'];

            $this->model->addBook($names, $genre, $choice);
            $this->showBooks();
        }
        else {
            $this->view->showEmptyError();
        }

    }

    public function deleteBook($id = null) {

        $this->model->deleteBook($id);
        $this->showBooks();

    }
    
}