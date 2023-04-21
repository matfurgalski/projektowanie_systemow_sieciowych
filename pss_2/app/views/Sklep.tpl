
{extends file="main.tpl"}

{block name=top}



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
                                                    <li><a href="{$conf->action_root}sklep">All </a></li>
                                                    <li><a href="{$conf->action_root}sklepMen">Men </a></li>
                                                    <li><a href="{$conf->action_root}sklepWomen">Women </a></li>
                                                    <li><a href="{$conf->action_root}sklepKids">Kids </a></li>
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

                        {foreach $data as $p}
                        {strip}
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{$p['zdjecie']}">
                                </div>
                                <div class="product__item__text">
                                    <h6>{$p["nazwa"]}</h6>
                                    {if count($conf->roles)>0}
                                    <a href="{$conf->action_url}koszykAdd/{$p['idProdukty']}" class="add-cart">+ Dodaj do koszyka</a>
                                    {else} 
                                    <a href="{$conf->action_root}loginRedirect" class="add-cart">+ Dodaj do koszyka</a>
                                    {/if}
                                    <h5>${$p["cena"]}</h5>
                                    <h5>{$p["typ"]}</h5>

                                </div>
                            </div>
                        </div>  
                        {/strip} 
                        {/foreach}                   
                    </div>            
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    {/block}