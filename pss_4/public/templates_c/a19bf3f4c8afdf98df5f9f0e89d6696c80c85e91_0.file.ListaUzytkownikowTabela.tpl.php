<?php
/* Smarty version 4.1.0, created on 2023-04-21 01:02:00
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_4\app\views\ListaUzytkownikowTabela.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6441c468b40100_12871267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19bf3f4c8afdf98df5f9f0e89d6696c80c85e91' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_4\\app\\views\\ListaUzytkownikowTabela.tpl',
      1 => 1682031719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441c468b40100_12871267 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
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
    <?php if ($_smarty_tpl->tpl_vars['all']->value != $_smarty_tpl->tpl_vars['countUser']->value && $_smarty_tpl->tpl_vars['sum']->value == $_smarty_tpl->tpl_vars['limit']->value) {?>
    <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
listaUzytkownikow/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
">>></a>   
    <?php }?>    
        
   
  
</p><?php }
}
