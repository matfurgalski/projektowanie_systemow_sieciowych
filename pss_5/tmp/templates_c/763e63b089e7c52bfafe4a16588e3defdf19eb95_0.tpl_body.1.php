<?php
/* Smarty version 3.1.31, created on 2023-04-13 22:02:20
  from "tpl_body:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64385fccddcf73_19321592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763e63b089e7c52bfafe4a16588e3defdf19eb95' => 
    array (
      0 => 'tpl_body:1',
      1 => '1681416139',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64385fccddcf73_19321592 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_5\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

                
                <section id = "content">
                 
                    <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
                    </section>
                    
                    
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
