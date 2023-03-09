    {include 'templates/header.tpl'}


    <h2> Actualizar un nuevo Libro: </h2>

      <div id="contactform">

        <form action="update" method="POST">

          <label> Nombre: </label>
          <input type="text" name="names">

          <label> Genero: </label>
          <input type="text" name="genre">

          <label> Autor: </label>

          <select name="choice">

          <option selected>Selecciona un autor</option>

          {foreach $authors as $author}
            <option value="{$author->id_author}" type="text">{$author->name}</option>
          {/foreach}
         
          </select>


          <select name="ID">

            <option name="{$id}" value="{$id}" type="text">ID: {$id}</option>
      
          </select>


          <button type="submit">Añadir</button>

        </form>



    {include 'templates/header.tpl'}
