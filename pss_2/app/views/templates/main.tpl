

<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" type="text/css">

</head>

<body>
 
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                {if count($conf->roles)>0}
	                            <a href="{$conf->action_root}logout">Wyloguj</a>
                                 {if isset($smarty.session.success)}
                                    <div class="">
                                    <p>Witaj {$smarty.session.success}</p>
                                    </div>
                                {/if}  
                                {else}	
                                <a href="{$conf->action_root}loginShow">Zaloguj</a>
                                <a href="{$conf->action_root}rejestracjaShow">Rejestracja</a>
                                {/if}            
            </div>          
        </div>
        <div class="offcanvas__nav__option">
            <nav class="header__menu mobile-menu">
            <a href="{$conf->action_root}koszyk">Koszyk</a>
            </nav >
            <a href="{$conf->action_root}koszyk"><img src="img/icon/cart.png" alt=""> <span></span></a>
            {if count($conf->roles)>0}
            {if isset($smarty.session.total)}
            <div class="price">${$smarty.session.total}</div>
            {else}
            <div class="price">$0.00</div>
            {/if}
            {/if}
        </div>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        
                    </div>
                    
                    <div class="col-lg-6 col-md-5">                       
                        <div class="header__top__right">
                            <div class="header__top__links">
                                {if count($conf->roles)>0}
	                            <a href="{$conf->action_root}logout">Wyloguj</a>
                                 {if isset($smarty.session.success)}
                                    <div class="">
                                    <p>Witaj {$smarty.session.success}</p>
                                    </div>
                                {/if}  
                                {else}	
                                <a href="{$conf->action_root}loginShow">Zaloguj</a>
                                <a href="{$conf->action_root}rejestracjaShow">Rejestracja</a>
                                {/if}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{$conf->action_root}home">Home</a></li>
                            <li><a href="{$conf->action_root}sklep">Shop</a></li>

                            {if count($conf->roles)>0}
                            {if isset($conf->roles['admin']) == 1}
                            <li><a href="{$conf->action_root}listaUzytkownikow">Lista Uzytkowników</a></li>
                            {/if}
                            {/if}

                            {if count($conf->roles)>0}
                            {if isset($conf->roles['pracownik']) == 1}
                            <li><a href="{$conf->action_root}listaProduktow">Lista Produktów</a></li>
                            {/if}
                            {/if}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
						 <a href="{$conf->action_root}koszyk">Koszyk</a>
                        <a href="{$conf->action_root}koszyk"><img src="img/icon/cart.png" alt=""> <span></span></a>
                        {if count($conf->roles)>0}
                        {if isset($smarty.session.total)}
                        <div class="price">${$smarty.session.total}</div>
                        {else}
                        <div class="price">$0.00</div>
                        {/if}
                        {/if}

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    
    
    
{block name=top} {/block}



{block name=bottom} {/block}


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>