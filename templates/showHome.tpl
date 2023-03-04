    {include 'templates/header.tpl'}


    <h2> Libreria - Lista de Libros! </h2>

    <p> A continuacion podra ver una lista de libros populares

    <ul>

    {foreach $books as $book}
    <li>    
        Nombre:

        {$book->name}

        -

        Genero: 

        {$book->genre}

      
    </li>
      {/foreach} 

    </ul>

    {include 'templates/footer.tpl'}