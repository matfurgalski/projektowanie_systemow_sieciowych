<?php
/* Smarty version 3.1.31, created on 2023-04-17 20:59:18
  from "cms_template:a_menu" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_643d97065f9c17_04300152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9278885944557b14f7c5b39f3ace99c4527f74d0' => 
    array (
      0 => 'cms_template:a_menu',
      1 => '1681757530',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d97065f9c17_04300152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_6\\tmp\\templates_c\\^9278885944557b14f7c5b39f3ace99c4527f74d0_0.cms_template.a_menu.php',
    'uid' => '9278885944557b14f7c5b39f3ace99c4527f74d0',
    'call_name' => 'smarty_template_function_Nav_menu_6212761643d97065e33d3_03090992',
  ),
));
?>


	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	
	<nav id="nav">
	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>
	
	</nav>
	
	<?php }
}
/* smarty_template_function_Nav_menu_6212761643d97065e33d3_03090992 */
if (!function_exists('smarty_template_function_Nav_menu_6212761643d97065e33d3_03090992')) {
function smarty_template_function_Nav_menu_6212761643d97065e33d3_03090992($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
    
     <a  href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" class="
     
     <?php if ($_smarty_tpl->tpl_vars['node']->value->menutext == 'Home') {?>
     icon solid fa-home
     
     
      <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->menutext == 'Gallery') {?>
     icon solid fa-folder
     
     
      <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->menutext == 'Contact') {?>
     icon solid fa-envelope
     <?php }?>
     
     "><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>
    
    
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php
}}
/*/ smarty_template_function_Nav_menu_6212761643d97065e33d3_03090992 */
}
