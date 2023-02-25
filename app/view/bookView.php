<?php


    class BookView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        //ver home

        function showHome() {

            $this->smarty->display('templates/showHome.tpl');

        }


    }