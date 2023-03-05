<?php

require_once './app/model/bookModel.php';
require_once './app/view/bookView.php';


class BookController {

    private $model;
    private $view;

    public function __construct() {

        $this->model = new BookModel();
        $this->view = new BookView();

    }

    public function showBooks() {

        $books = $this->model->getAllBooks();
        $this->view->showHome($books);
    }

    public function showBookById($id) {

        $book = $this->model->getBookById($id);
        $this->view->showBookById($book);

    }
}