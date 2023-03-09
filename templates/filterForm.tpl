 {include 'templates/header.tpl'}


 <form action="filter" method="GET">
        
    <select name="choice">
        <option selected>Selecciona un autor</option>


        {foreach $authors as $author}
 
        <option value="{$author->id_author}">{$author->name}</option>
        {/foreach}

    </select>

    <button type="submit">Elegir</button>

 </form>



 {include 'templates/footer.tpl'}
