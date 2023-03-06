<?php
/* Smarty version 4.3.0, created on 2023-03-06 00:59:17
  from 'C:\xampp\htdocs\TPE1\templates\showHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64052cd515cf07_48772589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7878870986663982632db71b399a9d0db3838d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showHome.tpl',
      1 => 1678060753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_64052cd515cf07_48772589 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h2> Libreria - Lista de Libros! </h2>

    <p> A continuacion podra ver una lista de libros populares

    <ul>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
         <li>    
        Nombre:

        <a href="book/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">  <?php echo $_smarty_tpl->tpl_vars['book']->value->book_name;?>
   </a>

        -

        Genero: 

        <?php echo $_smarty_tpl->tpl_vars['book']->value->genre;?>


      
    </li>  

    

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

    </ul>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
