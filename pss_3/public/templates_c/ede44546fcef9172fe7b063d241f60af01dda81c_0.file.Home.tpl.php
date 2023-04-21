<?php
/* Smarty version 4.1.0, created on 2023-03-26 19:55:30
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\pss_2\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6420871228d1b0_45515720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede44546fcef9172fe7b063d241f60af01dda81c' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\pss_2\\app\\views\\Home.tpl',
      1 => 1672863834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420871228d1b0_45515720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1239245359642087122881a3_59701364', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1239245359642087122881a3_59701364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1239245359642087122881a3_59701364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <?php
}
}
/* {/block 'top'} */
}
