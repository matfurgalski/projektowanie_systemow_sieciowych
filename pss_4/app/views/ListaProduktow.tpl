
{extends file="main.tpl"}

{block name=top}

    

 <p class="ex1">
    <a class="site-btn" href="{$conf->action_root}dodajProdukt">Dodaj Produkt</a>
</p>
    

  
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>idProdukty</th>
            <th>nazwa</th>
            <th>rozmiar</th>
            <th>cena</th>
            <th>idTyp_odzieży</th>
            <th>firma</th>
            <th>zdjecie</th>
        </tr>
    </thead>
    <tbody>
    {foreach $data as $p}
    {strip}
        <tr>
            <td>{$p["idProdukty"]}</td>
            <td>{$p["nazwa"]}</td>
            <td>{$p["rozmiar"]}</td>
            <td>{$p["cena"]}</td>
            <td>{$p["idTyp_odziezy"]}</td>
            <td>{$p["firma"]}</td>
            <td>{$p["zdjecie"]}</td>
            <td>
                <a class="site-btn" href="{$conf->action_url}edycjaProduktow/{$p['idProdukty']}">Edytuj</a>
                &nbsp;
                <a class="site-btn" href="{$conf->action_url}usunProduktZListy/{$p['idProdukty']}">Usuń</a>
            </td>
        </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>


    {/block}