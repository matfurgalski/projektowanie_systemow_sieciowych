<?php
/* Smarty version 4.1.0, created on 2023-01-04 21:23:55
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b5e05bd88908_03870457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62345862e82c969f22b9d6ff902dccc2ccdc72f' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\Home.tpl',
      1 => 1672863834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b5e05bd88908_03870457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186641454563b5e05bd858d4_40471197', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_186641454563b5e05bd858d4_40471197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_186641454563b5e05bd858d4_40471197',
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
