<?php

require_once './app/controller/bookController.php';
require_once './app/controller/authorController.php';

require_once('./libs/Smarty.class.php');


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';

if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

switch($params[0]) {

    case 'home':
        $bookController = new BookController();
        $bookController->ShowHome();

}
