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

    public function showHome() {

        $books = $this->model->getAllBooks();
        $this->view->showHome($books);
    }


}