<?php
/* Smarty version 4.1.0, created on 2023-01-07 13:05:31
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\ListaProduktow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9600b7867d9_76167148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5267e46f5865a639f01c6dd2bb377533f0d7da2a' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\ListaProduktow.tpl',
      1 => 1673092506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9600b7867d9_76167148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67949765363b9600b77dcc9_97264294', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_67949765363b9600b77dcc9_97264294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_67949765363b9600b77dcc9_97264294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

 <p class="ex1">
    <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dodajProdukt">Dodaj Produkt</a>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idProdukty"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["rozmiar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["cena"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idTyp_odziezy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["firma"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["zdjecie"];?>
</td><td><a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
edycjaProduktow/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
">Edytuj</a>&nbsp;<a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usunProduktZListy/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
">Usuń</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>


    <?php
}
}
/* {/block 'top'} */
}
