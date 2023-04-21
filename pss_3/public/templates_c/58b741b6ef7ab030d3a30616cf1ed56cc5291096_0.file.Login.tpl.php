<?php
/* Smarty version 4.1.0, created on 2023-04-10 22:49:20
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_3\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64347650d91611_07774232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b741b6ef7ab030d3a30616cf1ed56cc5291096' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_3\\app\\views\\Login.tpl',
      1 => 1673139827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64347650d91611_07774232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203297228464347650d87d64_87993604', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_181736921364347650d8a6f7_43276985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
/* {/block 'messages'} */
/* {block 'top'} */
class Block_203297228464347650d87d64_87993604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_203297228464347650d87d64_87993604',
  ),
  'messages' => 
  array (
    0 => 'Block_181736921364347650d8a6f7_43276985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="checkout spad">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" >
    <div class="col-lg-8 col-md-6">

        <h6 class="checkout__title">Logowanie</h6>
        
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Login<span>*</span></p>
                    <input id="login" type="text" placeholder="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                </div>
            </div>
    
        

        
        <div class="col-lg-6">
        
        <div class="checkout__input">
            <p>Hasło<span>*</span></p>
            <input id="haslo" type="password" placeholder="haslo" name="haslo" value="">
        </div>
    </div>
    
        <button type="submit" class="site-btn">Zaloguj</button>
</form>
</section>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181736921364347650d8a6f7_43276985', 'messages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'top'} */
}
