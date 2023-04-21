<?php
/* Smarty version 4.1.0, created on 2023-01-06 21:45:01
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\PotwierdzenieZamowienia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b8884d0f1869_56000806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14736f372f97d59d60b11347496d9db06d87e2e9' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\PotwierdzenieZamowienia.tpl',
      1 => 1673037894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b8884d0f1869_56000806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13311549163b8884d0eebd0_00122996', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_13311549163b8884d0eebd0_00122996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_13311549163b8884d0eebd0_00122996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="product__details__text">
    <h4>Zamówienie potwierdzone...</h4>
</div>  

<div class="col-lg-7 col-md-6 col-sm-6">
    <div class="continue__btn update__btn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep"><i class="fa fa-spinner"></i> Kontynuuj Zakupy</a>
    </div>
</div>
<?php
}
}
/* {/block 'top'} */
}
