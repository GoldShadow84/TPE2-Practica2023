        {include 'templates/header.tpl'}


    

        <h2> Libro elegido: </h2>

        <ul>
        
            {foreach $book as $books}
            <li>Nombre: {$books->name} </li>
            <li> Genero: {$books->genre} </li>
            {/foreach}

        </ul>   

        <a href="home">Volver</a>




        {include 'templates/footer.tpl'}
