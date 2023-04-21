<?php
/* Smarty version 4.1.0, created on 2023-01-06 23:05:19
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\PotwierdzenieRejestracji.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b89b1f2b2b26_15095875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15403990e8be89bd8557878e5dc77971af7a0497' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\PotwierdzenieRejestracji.tpl',
      1 => 1673042605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b89b1f2b2b26_15095875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165263770663b89b1f2b0766_68653815', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_165263770663b89b1f2b0766_68653815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_165263770663b89b1f2b0766_68653815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="product__details__text">
    <h4>Rejestracja powiodła się</h4>
    <h4>Zaloguj się..</h4>
</div>  

<div class="col-lg-7 col-md-6 col-sm-6">
    <div class="continue__btn update__btn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow"><i class="fa fa-spinner"></i>Zaloguj</a>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
