<?php
/* Smarty version 4.3.0, created on 2023-03-06 00:58:26
  from 'C:\xampp\htdocs\TPE1\templates\showAllAuthors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64052ca27a8ba8_70804541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '687fe366334c5ac645576ed7f492ec0d98cdcfce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showAllAuthors.tpl',
      1 => 1678060698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_64052ca27a8ba8_70804541 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h2> Lista de Autores de libros </h2>

    <ul>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
        
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['author']->value->name;?>
 - Age: <?php echo $_smarty_tpl->tpl_vars['author']->value->age;?>
 </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>


    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
