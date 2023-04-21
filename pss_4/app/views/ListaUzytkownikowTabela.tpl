<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>idUser</th>
        <th>login</th>
        <th>password</th>
        <th>email</th>
        <th>data_modyfikacji</th>
        <th>data_utworzenia</th>
        <th>id_modyfikacji</th>
        <th>rola</th>
      
       
    </tr>
</thead>
<tbody>
{foreach $data as $y}
{strip}
    <tr>
        <td>{$y["idUser"]}</td>
        <td>{$y["login"]}</td>
        <td>{$y["password"]}</td>
        <td>{$y["email"]}</td>
        <td>{$y["data_modyfikacji"]}</td>
        <td>{$y["data_utworzenia"]}</td>
        <td>{$y["id_modyfikacja"]}</td>
        
        <td>
            {foreach $rola as $p}
            {if $y["idUser"] == $p["idUser"]}
          
            {$p["nazwa"]}
            <br/>
          

            {/if}
            {/foreach}
        </td>

        <td>
            <a class="site-btn" href="{$conf->action_url}edycjaUzytkownika/{$y['idUser']}">Edytuj</a>
            &nbsp;
            <a class="site-btn"  
            href="{$conf->action_url}usunUzytkownikaZListy/{$y['idUser']}">Usuń</a>
        </td>

    </tr>
{/strip}
{/foreach}

</tbody>
</table>

<p class="str-btn">
    {if $page != 1}
    <a class="site-btn" href="{$conf->action_url}listaUzytkownikow/{$page-1}/{$searchForm->login}"><<</a>
    {/if}
    <a class="site-btn">
        {$page}

    </a>
    {if $all != $countUser && $sum == $limit}
    <a class="site-btn" href="{$conf->action_url}listaUzytkownikow/{$page+1}/{$searchForm->login}">>></a>   
    {/if}    
        
   
  
</p>