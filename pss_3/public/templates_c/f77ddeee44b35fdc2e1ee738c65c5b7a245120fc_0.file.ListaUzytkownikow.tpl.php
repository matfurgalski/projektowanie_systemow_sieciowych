<?php
/* Smarty version 4.1.0, created on 2023-04-09 15:38:22
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_2\app\views\ListaUzytkownikow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6432bfcee458f8_06383534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77ddeee44b35fdc2e1ee738c65c5b7a245120fc' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_2\\app\\views\\ListaUzytkownikow.tpl',
      1 => 1681047478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6432bfcee458f8_06383534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6497622956432bfcee35241_08090878', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_6497622956432bfcee35241_08090878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_6497622956432bfcee35241_08090878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

 <p class="ex1">
    <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dodajUzytkownika">Dodaj Użytkownika</a>
</p>
    
<div class="bottom-margin">
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listaUzytkownikow">
        <legend>Opcje wyszukiwania</legend>
        <fieldset>
            <input type="text" placeholder="login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" /><br />
            <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
        </fieldset>
    </form>
    </div>	
  
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'y');
$_smarty_tpl->tpl_vars['y']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['y']->value["idUser"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["password"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["data_modyfikacji"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["data_utworzenia"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["id_modyfikacja"];?>
</td><td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rola']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
if ($_smarty_tpl->tpl_vars['y']->value["idUser"] == $_smarty_tpl->tpl_vars['p']->value["idUser"]) {
echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
<br/><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><td><a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
edycjaUzytkownika/<?php echo $_smarty_tpl->tpl_vars['y']->value['idUser'];?>
">Edytuj</a>&nbsp;<a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usunUzytkownikaZListy/<?php echo $_smarty_tpl->tpl_vars['y']->value['idUser'];?>
">Usuń</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
    </table>
    <p class="str-btn">
        <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
        <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listaUzytkownikow/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
"><<</a>
        <?php }?>
        <a class="site-btn">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>


        </a>
        <?php if ($_smarty_tpl->tpl_vars['sum']->value == $_smarty_tpl->tpl_vars['limit']->value) {?>
        <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listaUzytkownikow/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
">>></a>   
        <?php }?>    
            
      
      
    </p>
    


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
