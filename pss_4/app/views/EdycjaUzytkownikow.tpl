{extends file="main.tpl"}

{block name=top}

<form action="{$conf->action_root}zapiszUzytkownika" method="post">
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Login</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" id="login" placeholder="Login" name="login" value="{$form->login}">
      </div>
    </div>
  
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Nowe Hasło</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="haslo" placeholder="Hasło" name="password2" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{$form->email}">
      </div>
    </div>

    
   
    
    Role:

    {if !empty($role)}

      <div class="form-check">
        {foreach $role as $y}
        
        {if $y["Role_idRole"] == 1}
        <input class="form-check-input" type="checkbox" value="1" name = "defaultCheck1" id="defaultCheck1" checked  >
        {break}
        {else}
        <input class="form-check-input" type="checkbox" value="1" name = "defaultCheck1" id="defaultCheck1"  >
        
        {/if}
        {/foreach}
        <label class="form-check-label" for="defaultCheck1">
          User
        </label>
      </div>
      <div class="form-check">
        {foreach $role as $p}
        {if $p["Role_idRole"]==2}
        <input class="form-check-input" type="checkbox" value="2" name = "defaultCheck2" id="defaultCheck2" checked>
        {break}
        {else}
        <input class="form-check-input" type="checkbox" value="2" name = "defaultCheck2" id="defaultCheck2" >
        {/if}
        {/foreach}
        <label class="form-check-label" for="defaultCheck2">
          Pracownik
        </label>
      </div>

      <div class="form-check">
        {foreach $role as $x}
        {if $x["Role_idRole"]==3}
        <input class="form-check-input" type="checkbox" value="3" name = "defaultCheck3" id="defaultCheck3" checked>
        {break}
        {else}
        <input class="form-check-input" type="checkbox" value="3" name = "defaultCheck3" id="defaultCheck3" >
        {/if}
        
         
        {/foreach}
        <label class="form-check-label" for="defaultCheck3">
          Admin
        </label>
      </div>

    {else}
      


      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name = "defaultCheck1" id="defaultCheck1"  >
        <label class="form-check-label" for="defaultCheck1">
          User
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="2" name = "defaultCheck2" id="defaultCheck2" >
        <label class="form-check-label" for="defaultCheck2">
          Pracownik
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="3" name = "defaultCheck3" id="defaultCheck3" >
        <label class="form-check-label" for="defaultCheck3">
          Admin
        </label>
      </div>



      {/if}
    
   
   



    <div class="pure-controls">
			<input type="submit" class="site-btn" value="Zapisz"/>
			<a class="site-btn" href="{$conf->action_root}listaUzytkownikow">Powrót</a>
		</div>
    <input type="hidden" name="idUser" value="{$form->idUser}">
    <input type="hidden" name="data_modyfikacji" value="{$form->data_modyfikacji}">
    <input type="hidden" name="data_utworzenia" value="{$form->data_utworzenia}">
    <input type="hidden" name="id_modyfikacja" value="{$form->id_modyfikacja}">
    <input type="hidden" name="password" value="{$form->password}">
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