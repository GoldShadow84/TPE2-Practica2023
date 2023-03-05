<?php
/* Smarty version 4.3.0, created on 2023-03-05 18:33:32
  from 'C:\xampp\htdocs\TPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6404d26c284531_29180444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f039da7d3761ba639e2f9a92be28aba97ba3eac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\header.tpl',
      1 => 1678037539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6404d26c284531_29180444 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1984</title>
    <link rel="shortcut ico" href="ico.ico">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="images/637687.jpg" alt="logo">
        </div>
        <nav>
                <ul class="nav-links">
                    <li><a href="home">Home</a></li>
                    <li><a href="author">Autores</a></li>
                    <li><a href="home">Buscar Por Author</a></li>
                    <li><a href="home">Login</a></li>
                </ul>
        </nav>
        <div class="responsive-button">
            <a href="#"><button id="hidden-button"><img src="images/menu.png" alt="responsive-menu"></button></a>
        </div>
   
    </header><?php }
}
