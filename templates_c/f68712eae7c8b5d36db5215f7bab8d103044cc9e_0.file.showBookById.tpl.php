<?php
/* Smarty version 4.3.0, created on 2023-03-05 16:20:25
  from 'C:\xampp\htdocs\TPE1\templates\showBookById.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6404b33942bde2_20948410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68712eae7c8b5d36db5215f7bab8d103044cc9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showBookById.tpl',
      1 => 1678029624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6404b33942bde2_20948410 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    

        <h2> Libro elegido: </h2>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value, 'books');
$_smarty_tpl->tpl_vars['books']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['books']->value) {
$_smarty_tpl->tpl_vars['books']->do_else = false;
?>
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['books']->value->name;?>
 </li>
            <li> Genero: <?php echo $_smarty_tpl->tpl_vars['books']->value->genre;?>
 </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>   

        <a href="home">Volver</a>




        <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
