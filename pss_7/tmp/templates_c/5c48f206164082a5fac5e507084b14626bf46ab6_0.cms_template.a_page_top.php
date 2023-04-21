<?php
/* Smarty version 3.1.31, created on 2023-04-20 22:54:12
  from "cms_template:a_page_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6441a6741a2688_39526471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c48f206164082a5fac5e507084b14626bf46ab6' => 
    array (
      0 => 'cms_template:a_page_top',
      1 => '1682024050',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6441a6741a2688_39526471 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_metadata')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_7\\lib\\plugins\\function.cms_stylesheet.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="template/css/main.css" />
			<link rel="stylesheet" href="template/css/styles.css" />
		<noscript><link rel="stylesheet" href="template/css/noscript.css" /></noscript>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css" />
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    


        
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
