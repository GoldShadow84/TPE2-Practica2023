<?php


    class BookView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        //ver home

        function showHome($books) {

            $this->smarty->assign('books', $books);
            $this->smarty->display('templates/showHome.tpl');

        }

        function showBookById($book) {

            $this->smarty->assign('book', $book);
            $this->smarty->display('templates/showBookById.tpl');

        }

    }