{extends file="main.tpl"}

{block name=top}

<form action="{$conf->action_root}zapiszProdukty" method="post">
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Nazwa</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" id="nazwa" placeholder="Nazwa" name="nazwa" value="{$form->nazwa}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Rozmiar</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="rozmiar" placeholder="Rozmiar" name="rozmiar" value="{$form->rozmiar}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Cena</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="cena" placeholder="Cena" name="cena" value="{$form->cena}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">idTyp_odzieży</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="idTyp_odziezy" name="idTyp_odziezy" placeholder="idTyp_odzieży" value="{$form->idTyp_odziezy}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Firma</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="firma" placeholder="Firma" name="firma" value="{$form->firma}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Zdjęcie</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="zdjecie" placeholder="Zdjęcie" name="zdjecie" value="{$form->zdjecie}">
      </div>
    </div>
    <div class="pure-controls">
			<input type="submit" class="site-btn" value="Zapisz"/>
			<a class="site-btn" href="{$conf->action_root}listaProduktow">Powrót</a>
		</div>
    <input type="hidden" name="idProdukty" value="{$form->idProdukty}">
  </form>
  

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