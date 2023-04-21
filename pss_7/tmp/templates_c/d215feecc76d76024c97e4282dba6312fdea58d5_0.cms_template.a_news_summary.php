<?php
/* Smarty version 3.1.31, created on 2023-04-19 20:19:20
  from "cms_template:a_news_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_644030a8625d97_38204888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1681928357',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644030a8625d97_38204888 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\modifier.cms_date_format.php';
?>
<!-- Start News Display Template -->

<div id="layout" class="pure-g">

 

<div class="posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
 <h1 class="content-subhead"></h1>
<section class="post">
    
    <header class="post-header">
        
<h2 class="post-title">
<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a>
</h2>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
 <p class="post-meta">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</p>
<?php }?>



</header>

<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        
	<div class="NewsSummarySummary">
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

	</div>



<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
        
	<div class="NewsSummaryContent">
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

	</div>
<?php }?>


</section>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>
<!-- End News Display Template --><?php }
}
