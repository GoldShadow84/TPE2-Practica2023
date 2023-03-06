    {include 'templates/header.tpl'}

    <h2> Libros del autor: </h2>

    <ul>

        {foreach $books as $book}

            <li> {$book->book_name} </li>

        {/foreach}    

    </ul>



    {include 'templates/footer.tpl'}
