<?php
/* Smarty version 4.1.0, created on 2023-04-06 21:48:37
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_2\app\views\EdycjaUzytkownikow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_642f2215963171_95823727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8888e47a100ec5c25c1ef446d2b3c607f211a52' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_2\\app\\views\\EdycjaUzytkownikow.tpl',
      1 => 1674508086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642f2215963171_95823727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445819855642f2215912800_09132079', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1445819855642f2215912800_09132079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1445819855642f2215912800_09132079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zapiszUzytkownika" method="post">
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Login</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" id="login" placeholder="Login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
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
        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
      </div>
    </div>

    
   
    
    Role:

    <?php if (!empty($_smarty_tpl->tpl_vars['role']->value)) {?>

      <div class="form-check">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'y');
$_smarty_tpl->tpl_vars['y']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->do_else = false;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['y']->value["Role_idRole"] == 1) {?>
        <input class="form-check-input" type="checkbox" value="1" name = "defaultCheck1" id="defaultCheck1" checked  >
        <?php break 1;?>
        <?php } else { ?>
        <input class="form-check-input" type="checkbox" value="1" name = "defaultCheck1" id="defaultCheck1"  >
        
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <label class="form-check-label" for="defaultCheck1">
          User
        </label>
      </div>
      <div class="form-check">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['p']->value["Role_idRole"] == 2) {?>
        <input class="form-check-input" type="checkbox" value="2" name = "defaultCheck2" id="defaultCheck2" checked>
        <?php break 1;?>
        <?php } else { ?>
        <input class="form-check-input" type="checkbox" value="2" name = "defaultCheck2" id="defaultCheck2" >
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <label class="form-check-label" for="defaultCheck2">
          Pracownik
        </label>
      </div>

      <div class="form-check">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['x']->value["Role_idRole"] == 3) {?>
        <input class="form-check-input" type="checkbox" value="3" name = "defaultCheck3" id="defaultCheck3" checked>
        <?php break 1;?>
        <?php } else { ?>
        <input class="form-check-input" type="checkbox" value="3" name = "defaultCheck3" id="defaultCheck3" >
        <?php }?>
        
         
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <label class="form-check-label" for="defaultCheck3">
          Admin
        </label>
      </div>

    <?php } else { ?>
      


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



      <?php }?>
    
   
   



    <div class="pure-controls">
			<input type="submit" class="site-btn" value="Zapisz"/>
			<a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaUzytkownikow">Powrót</a>
		</div>
    <input type="hidden" name="idUser" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idUser;?>
">
    <input type="hidden" name="data_modyfikacji" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_modyfikacji;?>
">
    <input type="hidden" name="data_utworzenia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_utworzenia;?>
">
    <input type="hidden" name="id_modyfikacja" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_modyfikacja;?>
">
    <input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
">
  </form>

  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>




<?php
}
}
/* {/block 'top'} */
}
