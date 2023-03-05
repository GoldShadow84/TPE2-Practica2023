    {include 'templates/header.tpl'}


    <h2> Lista de Autores de libros </h2>

    <ul>

        {foreach $authors as $author}
        
        <li>Nombre: {$author->name} - Age: {$author->age} </li>

        {/foreach}

    </ul>


    {include 'templates/footer.tpl'}


