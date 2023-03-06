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
        $bookController->showBooks();
        break;
    case 'book':
        $bookController = new BookController();
        if(!empty($params[1])) {
            $id = $params[1];
            $bookController->showBookById($id);
        }
        break;
    case 'author':
        $authorController = new AuthorController();
        $authorController->showAllAuthors();
        break;
    case 'bookbyauthor':
        $authorController = new AuthorController();
        $authorController->searchBookByAuthor();
        break;
    case 'filter':
        $authorController = new AuthorController();
            $authorController->getAllBooksByAuthor();
        break;
    default:
    echo('404 Page not found');
    break;
            
}
