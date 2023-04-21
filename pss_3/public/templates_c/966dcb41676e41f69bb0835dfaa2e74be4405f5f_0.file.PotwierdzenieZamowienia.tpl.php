<?php
/* Smarty version 4.1.0, created on 2023-04-14 19:46:17
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_3\app\views\PotwierdzenieZamowienia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643991699f4f61_91346950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '966dcb41676e41f69bb0835dfaa2e74be4405f5f' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_3\\app\\views\\PotwierdzenieZamowienia.tpl',
      1 => 1673037894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643991699f4f61_91346950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76683168643991699a0764_18057614', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_76683168643991699a0764_18057614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_76683168643991699a0764_18057614',
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
