<?php
/* Smarty version 4.1.0, created on 2023-01-04 21:46:55
  from 'H:\programy1\xampp\htdocs\aplikacje_sieciowe\amelia\app\views\SklepWomen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b5e5bf062076_10677574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a82bf74f7b03a7bc11f1a9057cd7f546dbdbe9e' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\aplikacje_sieciowe\\amelia\\app\\views\\SklepWomen.tpl',
      1 => 1672865198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b5e5bf062076_10677574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100295191563b5e5bf059a13_04233473', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_100295191563b5e5bf059a13_04233473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_100295191563b5e5bf059a13_04233473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">              
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                    
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep">All </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepMen">Men </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepWomen">Women </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepKids">Kids </a></li>
                                                    
          
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                  
                    </div>
                    <div class="row">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['p']->value['zdjecie'];?>
"></div><div class="product__item__text"><h6><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</h6><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
koszykAdd/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
" class="add-cart">+ Add To Cart</a><h5>$<?php echo $_smarty_tpl->tpl_vars['p']->value["cena"];?>
</h5><h5><?php echo $_smarty_tpl->tpl_vars['p']->value["typ"];?>
</h5></div></div></div> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                   
                    </div>            
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <?php
}
}
/* {/block 'top'} */
}
