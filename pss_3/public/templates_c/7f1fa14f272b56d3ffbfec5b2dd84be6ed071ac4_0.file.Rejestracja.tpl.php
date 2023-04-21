<?php
/* Smarty version 4.1.0, created on 2023-04-10 22:49:22
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_3\app\views\Rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6434765212d748_10585566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1fa14f272b56d3ffbfec5b2dd84be6ed071ac4' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_3\\app\\views\\Rejestracja.tpl',
      1 => 1673218621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6434765212d748_10585566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141268715864347652123ac7_39173374', 'top');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_1813414211643476521268d5_03537656 extends Smarty_Internal_Block
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
class Block_141268715864347652123ac7_39173374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_141268715864347652123ac7_39173374',
  ),
  'messages' => 
  array (
    0 => 'Block_1813414211643476521268d5_03537656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="checkout spad">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracja" >
    <div class="col-lg-8 col-md-6">
    
        <h6 class="checkout__title">Rejestracja</h6>
        
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

    <div class="col-lg-6">
        
        <div class="checkout__input">
            <p>Powtórz hasło<span>*</span></p>
            <input id="haslo2" type="password" placeholder="haslo" name="haslo2" value="">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="checkout__input">
            <p>E-mail<span>*</span></p>
            <input id="email" type="text" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
        </div>
    </div>
    
        <button type="submit" class="site-btn">Zarejestruj</button>
</form>
</section>        





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1813414211643476521268d5_03537656', 'messages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'top'} */
}
