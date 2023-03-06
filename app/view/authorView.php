<?php

    class AuthorView {

        private $smarty;

        function __construct() {
           $this->smarty = new Smarty();
           $this->smarty->assign('basehref', BASE_URL);
        }

        public function showAllAuthors($authors) {

            $this->smarty->assign('authors', $authors);
            $this->smarty->display('templates/showAllAuthors.tpl');

        }

        public function searchBookByAuthor($authors) {

            $this->smarty->assign('authors', $authors);
            $this->smarty->display('templates/filterForm.tpl');

        
        }

        public function showAllBooksByAuthor($books) {

            $this->smarty->assign('books', $books);
            $this->smarty->display('templates/showBooksByAuthor.tpl');

        }

    }