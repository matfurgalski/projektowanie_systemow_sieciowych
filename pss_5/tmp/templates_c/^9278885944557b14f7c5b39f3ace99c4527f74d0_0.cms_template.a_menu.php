<?php
/* Smarty version 3.1.31, created on 2023-04-10 19:09:56
  from "cms_template:a_menu" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_643442e451a360_50417665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9278885944557b14f7c5b39f3ace99c4527f74d0' => 
    array (
      0 => 'cms_template:a_menu',
      1 => '1681146594',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643442e451a360_50417665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\tmp\\templates_c\\^9278885944557b14f7c5b39f3ace99c4527f74d0_0.cms_template.a_menu.php',
    'uid' => '9278885944557b14f7c5b39f3ace99c4527f74d0',
    'call_name' => 'smarty_template_function_Nav_menu_638558412643442e44e3008_57245244',
  ),
));
?>


<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>

<div class="pure-menu pure-menu-horizontal">

<ul class="pure-menu-list">
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

</ul>
</div>
<?php }
}
/* smarty_template_function_Nav_menu_638558412643442e44e3008_57245244 */
if (!function_exists('smarty_template_function_Nav_menu_638558412643442e44e3008_57245244')) {
function smarty_template_function_Nav_menu_638558412643442e44e3008_57245244($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>

      
      <li class="pure-menu-item 
      <?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?>
      pure-menu-has-children pure-menu-allow-hover
      <?php }?>
      " >
          
        <a  href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" class="pure-menu-link"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a>
        
        <?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?>
        <ul class="pure-menu-children">
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>

          </ul>
        <?php }?>
      </li>
    
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php
}}
/*/ smarty_template_function_Nav_menu_638558412643442e44e3008_57245244 */
}
