<?php
/* Smarty version 3.1.31, created on 2023-04-20 23:55:39
  from "cms_template:a_news_detail" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6441b4dbe49c05_96518258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a89637bfc15d2d655bd65897a2ae9ebf8c9f5' => 
    array (
      0 => 'cms_template:a_news_detail',
      1 => '1681928697',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441b4dbe49c05_96518258 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_cms_escape')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_function_file_url')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\function.file_url.php';
if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
	<div id="NewsPostDetailDate">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</div>
<?php }?>
<h3 id="NewsPostDetailTitle"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h3>

<hr id="NewsPostDetailHorizRule" />

<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div id="NewsPostDetailSummary">
		<strong>
			<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

		</strong>
	</div>
<?php }?>



<div id="NewsPostDetailContent">
        
	<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->extra) {?>
	<div id="NewsPostDetailExtra">
		<?php echo $_smarty_tpl->tpl_vars['extra_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
<div id="NewsPostDetailReturnLink"><?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field', false, 'fieldname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fieldname']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
     <div class="NewsDetailField">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
	  
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value->value) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
          
          <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
}
