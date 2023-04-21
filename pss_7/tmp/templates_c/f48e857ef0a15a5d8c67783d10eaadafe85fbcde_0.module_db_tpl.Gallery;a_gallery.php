<?php
/* Smarty version 3.1.31, created on 2023-04-20 23:29:28
  from "module_db_tpl:Gallery;a_gallery" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6441aeb8653f11_52781550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48e857ef0a15a5d8c67783d10eaadafe85fbcde' => 
    array (
      0 => 'module_db_tpl:Gallery;a_gallery',
      1 => 1682026152,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441aeb8653f11_52781550 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article id="work" class="panel">
								<header>
									<h2>Zdjecia</h2>
								</header>
						
								<section>
								    
									<div class="row">
									    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
										<div class="col-4 col-6-medium col-12-small">
											<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt=""></a>
										</div>
										
									   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</div>
								</section>
							</article><?php }
}
