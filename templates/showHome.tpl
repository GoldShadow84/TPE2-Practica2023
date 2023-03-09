    {include 'templates/header.tpl'}

    <div class="book-list-container">

    <h2> Libreria - Lista de Libros! </h2>

    <p> A continuacion podra ver una lista de libros populares

    <ul>

    {foreach $books as $book}
         <li>    
        Nombre:

        <a href="book/{$book->id_book}">  {$book->book_name}   </a>

        -

        Genero: 

        {$book->genre}

      
    </li>  

      <button type="submit"><a href="delete/{$book->id_book}">Borrar</a></button>

      {/foreach} 

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

          {foreach $authors as $author}
            <option value="{$author->id_author}" type="text">{$author->name}</option>
          {/foreach}

          </select>


          <button type="submit">Añadir</button>

        </form>

      </div>


    {include 'templates/footer.tpl'}