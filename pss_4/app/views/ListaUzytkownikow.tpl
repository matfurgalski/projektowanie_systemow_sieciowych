
{extends file="main.tpl"}

{block name=top}

    

 <p class="ex1">
    <a class="site-btn" href="{$conf->action_root}dodajUzytkownika">Dodaj Użytkownika</a>
</p>
    
<div class="bottom-margin">
    <form id="search-form"class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_url}listaUzytkownikowCzesc','table'); return false;">
        <legend>Opcje wyszukiwania</legend>
        <fieldset>
            <input type="text" placeholder="login" name="sf_login" value="{$searchForm->login}" /><br />
            <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
        </fieldset>
    </form>
    </div>	
  
    <div id="table">
        {include file="ListaUzytkownikowTabela.tpl"}
    </div>


    


    {if $msgs->isMessage()}
    <div class="messages bottom-margin">
        <ul>
        {foreach $msgs->getMessages() as $msg}
        {strip}
            <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
        {/strip}
        {/foreach}
        </ul>
    </div>
    {/if}


    {/block}