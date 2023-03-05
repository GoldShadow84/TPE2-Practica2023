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

    }