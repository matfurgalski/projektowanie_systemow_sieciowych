<?php
/* Smarty version 3.1.31, created on 2023-04-17 20:59:18
  from "cms_template:a_page_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_643d97065656e0_16488718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c48f206164082a5fac5e507084b14626bf46ab6' => 
    array (
      0 => 'cms_template:a_page_top',
      1 => '1681754469',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d97065656e0_16488718 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_6\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_metadata')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_6\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_6\\lib\\plugins\\function.cms_stylesheet.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="template/css/main.css" />
		<noscript><link rel="stylesheet" href="template/css/noscript.css" /></noscript>
	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

	
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<?php echo Navigator::function_plugin(array('template'=>'a_menu'),$_smarty_tpl);?>

					</nav><?php }
}
