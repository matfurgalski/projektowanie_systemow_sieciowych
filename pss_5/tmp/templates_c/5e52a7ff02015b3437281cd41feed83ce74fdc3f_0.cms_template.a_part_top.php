<?php
/* Smarty version 3.1.31, created on 2023-04-13 19:13:37
  from "cms_template:a_part_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64383841171193_58036390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1681405988',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64383841171193_58036390 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.cms_stylesheet.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body>
	<nav id="menu">
		<?php echo Navigator::function_plugin(array('template'=>'a_menu'),$_smarty_tpl);?>

	</nav><?php }
}
