<?php
/* Smarty version 4.1.0, created on 2023-01-10 00:21:00
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bca15cd2ba37_07855788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2febf65a02c05226252c3028d10b4e18873f4935' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\Hello.tpl',
      1 => 1673306458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bca15cd2ba37_07855788 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework </title>
</head>

<body>
    
    My value: 

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>role</th>

        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
 

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conf']->value->roles, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['p']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo print_r($_smarty_tpl->tpl_vars['conf']->value->roles);?>


    <?php echo $_SESSION['test'];?>

    <br/>
    <?php echo $_SESSION['passs'];?>



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


    

    

 

</body>

</html><?php }
}
