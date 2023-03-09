<?php
/* Smarty version 4.3.0, created on 2023-03-09 13:17:19
  from 'C:\xampp\htdocs\TPE1\templates\showHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6409ce4f0856c1_97102975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7878870986663982632db71b399a9d0db3838d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE1\\templates\\showHome.tpl',
      1 => 1678363993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6409ce4f0856c1_97102975 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="book-list-container">

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

      <button type="submit"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['book']->value->id_book;?>
">Borrar</a></button>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

    </ul>


    </div>
   

    <h2> Añadir un nuevo Libro: </h2>

      <div id="contactform">

        <form action="add" method="POST">

          <label> Nombre: </label>
          <input type="text" name="names">

          <label> Genero: </label>
          <input type="text" name="genre">

          <label> Autor: </label>
         
          <select name="choice">

          <option selected>Selecciona un autor</option>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['author']->value->id_author;?>
" type="text"><?php echo $_smarty_tpl->tpl_vars['author']->value->name;?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </select>


          <button type="submit">Añadir</button>

        </form>

      </div>


    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
