<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Home Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,700' rel='stylesheet' type='text/css'>
    <!-- Style Sheet-->

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!--https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css
    https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css
    <link rel="stylesheet" type="text/css" href="{asset('public//jquery-nice-select/nice-select.css')}"/> -->
    <link rel="stylesheet" href="template/css/bootstrap.css">
    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="template/js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="template/js/owl-carousel/owl.theme.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width" />
</head>
<body id="bd" class=" cms-index-index cms-simen-home-page-v2 default cmspage">
<div id="sns_wrapper">
    <!-- HEADER -->
    <div id="sns_header" class="wrap">
        <!-- Header Top -->
        <div class="sns_header_top">
            <div class="container">
                <div class="sns_module">
                    <div class="header-setting">
                        <div class="module-setting">
                            <div class="mysetting language-switcher">
                                <div class="tongle">
                                    <img alt="" src="images/flag/english.png">
                                    <span>English</span>
                                </div>
                                <div class="content">
                                    <div class="language-switcher">
                                        <ul id="select-language">
                                            <li>
                                                <a class="selected" href="index.html">
                                                    <img alt="" src="images/flag/english.png">
                                                    <span>English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index2.html">
                                                    <img alt="" src="images/flag/brazil.png">
                                                    <span>Brazil</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index3.html">
                                                    <img alt="" src="images/flag/france.png">
                                                    <span>France</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index4.html">
                                                    <img alt="" src="images/flag/russian.png">
                                                    <span>Russian</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mysetting currency-switcher">
                                <div class="tongle">
                                    <span class="gfont"> USD </span>
                                </div>
                                <div class="content">
                                    <ul id="select-currency">
                                        <li>
                                            <a href="#"> EUR </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> USD </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-account">
                        <div class="myaccount">
                            <div class="tongle">
                                <i class="fa fa-user"></i>
                                <span>My account</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="customer-ct content">
                                <ul class="links">
                                    <li class="first">
                                        <!-- <a class="top-link" title="Salir" href="/logout">Salir</a> -->
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <button class="top-link" type="submit"
                                                    style="border: none; background: none;color: #888;">
                                                {{ __('Salir') }}
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <a class="top-link" title="Registrarse" href="/register">Registrarse</a>
                                    </li>
                                    <li>
                                        <a class="top-link-myaccount" title="Mi perfil" href="/user/profile">Mi perfil</a>
                                    </li>
                                    <li class=" last">
                                        <a class="top-link-login" title="Log In" href="/login">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Logo -->
        <div id="sns_header_logo">
            <div class="container">
                <div class="container_in">
                    <div class="row">
                        <h1 id="logo" class="responsv col-md-3">
                            <a href="index.html" title="Magento Commerce">
                                <img alt="" src="images/logo.jpg">
                            </a>
                        </h1>
                        <div class="col-md-9 policy">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-phone-12">
                                    <div class="policy_custom">
                                        <div class="policy-icon">
                                            <em class="fa fa-truck"> </em>
                                        </div>
                                        <p class="policy-titile">FREE DELIVERY WORLDWIDE</p>
                                        <p class="policy-ct">On order over $100</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-phone-12">
                                    <div class="policy_custom">
                                        <div class="policy-icon">
                                            <em class="fa fa-cloud-upload"> </em>
                                        </div>
                                        <p class="policy-titile">UP TO 20% OFF COSY LAYERS</p>
                                        <p class="policy-ct">Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-phone-12">
                                    <div class="policy_custom">
                                        <div class="policy-icon">
                                            <em class="fa fa-gift"> </em>
                                        </div>
                                        <p class="policy-titile">Buy 1 get 1 free</p>
                                        <p class="policy-ct">On order over $100</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div id="sns_menu">
            <div class="container">
                <div class="sns_mainmenu">
                    <div id="sns_mainnav">
                        <div id="sns_custommenu" class="visible-md visible-lg">
                            <ul class="mainnav">
                                <li class="level0 custom-item active">
                                    <a class="menu-title-lv0 pd-menu116" href="index.html" target="_self">
                                        <span class="title">Home</span>
                                    </a>
                                </li>
                                <li class="level0 nav-1 no-group first drop-submenu parent">
                                    <a class=" menu-title-lv0" href="listing-grid.html">
                                        <span class="title">Funiture</span>
                                    </a>
                                    <div class="no-width wrap_submenu">
                                        <div class="no-pd">
                                            <div class="wrap_dropdown fullwidth">
                                                <div class="class2 row">
                                                    <div class="col-sm-3">
                                                        <div class="wrap_submenu">
                                                            <h6 class="title menu1-2-5">Table</h6>
                                                            <ul class="level1">
                                                                <li class="level2 nav-1-3-16 first">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Living Room Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> Sofa Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-18">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> End Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-19">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> Coffee Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-20 last">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Pedestal Tables</span>
                                                                    </a>
                                                                </li>

                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Home Office Desks</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-16 first">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Coffee Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Pedestal Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-18">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Home Office Desks</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-19">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Kids' Furniture</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-20 last">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Kitchen & Dining Room Sets</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> Sofa Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-18">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> End Tables</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="wrap_submenu">
                                                            <h6 class="title menu1-2-5">Chair</h6>
                                                            <ul class="level1">
                                                                <li class="level2 nav-1-3-16 first">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Dining Room Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Folding Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-16 first">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Living Room Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> Sofa Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-18">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> End Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-19">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title"> Coffee Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-20 last">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Pedestal Tables</span>
                                                                    </a>
                                                                </li>

                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Home Office Desks</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-16 first">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Coffee Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-17">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Pedestal Tables</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-18">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Home Office Desks</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-19">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Kids' Furniture</span>
                                                                    </a>
                                                                </li>
                                                                <li class="level2 nav-1-3-20 last">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span class="title">Kitchen & Dining Room Sets</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 style-pd3">
                                                        <a class="banner5" href="#">
                                                            <img alt="" src="images/menu/bmenug.jpg">
                                                        </a>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="level0 nav-2 no-group drop-submenu parent">
                                    <a class=" menu-title-lv0" href="#">
                                        <span class="title">All products</span>
                                    </a>
                                    <div class="wrap_submenu">
                                        <ul class="level0">
                                            <li class="level1 nav-1-1 first">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Dining Room Tables</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-1-2">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Folding Tables</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-1-3 parent">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Living Room Tables</span>
                                                </a>
                                                <div class="wrap_submenu">
                                                    <ul class="level1">
                                                        <li class="level2 nav-1-3-16 first">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Dining Room Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-17">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Folding Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-16 first">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Living Room Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-17">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> Sofa Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-18">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> End Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-19">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> Coffee Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-20 last">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Pedestal Tables</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="level1 nav-1-4 last parent">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Sofa Tables</span>
                                                </a>
                                                <div class="wrap_submenu">
                                                    <ul class="level1">
                                                        <li class="level2 nav-1-3-16 first">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Dining Room Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-17">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Folding Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-16 first">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Living Room Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-17">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> Sofa Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-18">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> End Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-19">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title"> Coffee Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-1-3-20 last">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Pedestal Tables</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="level1 nav-1-1 first">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">End Tables</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-1-2">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Coffee Tables</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-1-2">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Pedestal Tables</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="level0 nav-3 no-group drop-submenu12 custom-itemdrop-staticblock">
                                    <a class=" menu-title-lv0" href="#">
                                        <span class="title">Shop</span>
                                    </a>
                                    <div class="wrap_dropdown fullwidth">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="title menu1-2-5">Table</h6>
                                                <ul class="level1">
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kitchen & Dining Room Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Folding Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-18">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Living Room Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-19">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Sofa Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-20 last">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">End Tables</span>
                                                        </a>
                                                    </li>

                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Coffee Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Pedestal Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Home Office Desks</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="title menu1-2-5">Table</h6>
                                                <ul class="level1">
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Living Room Tables</span>
                                                        </a>
                                                    </li>

                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Sofa Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-18">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">End Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-19">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Coffee Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-20 last">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Pedestal Tables</span>
                                                        </a>
                                                    </li>

                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Home Office Desks</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kids' Furniture</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kitchen & Dining Room Sets</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="title menu1-2-5">Table</h6>
                                                <ul class="level1">
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kitchen & Dining Room Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Folding Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-18">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">End Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-19">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Coffee Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-20 last">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Pedestal Tables</span>
                                                        </a>
                                                    </li>

                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Home Office Desks</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kids' Furniture</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Kitchen & Dining Room Sets</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="title menu1-2-5">Table</h6>
                                                <ul class="level1">
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Dining Room Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Folding Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-18">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Living Room Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-19">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Sofa Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-20 last">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">End Tables</span>
                                                        </a>
                                                    </li>

                                                    <li class="level2 nav-1-3-17">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Coffee Tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="level2 nav-1-3-16 first">
                                                        <a class=" menu-title-lv2" href="#">
                                                            <span class="title">Pedestal Tables</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="level0 nav-4 no-group drop-submenu last parent">
                                    <a class=" menu-title-lv0" href="#">
                                        <span class="title">Mobile</span>
                                    </a>
                                    <div class="wrap_submenu">
                                        <ul class="level0">
                                            <li class="level1 nav-3-1 first">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Cfg products</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-3-2">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Product types</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-3-3 parent">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Bicycle</span>
                                                </a>
                                                <div class="wrap_submenu">
                                                    <ul class="level1">
                                                        <li class="level2 nav-3-2-1 first">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Lifestyle</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-3-2-2">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Jackets</span>
                                                            </a>
                                                        </li>
                                                        <li class="level2 nav-3-2-3 last">
                                                            <a class=" menu-title-lv2" href="#">
                                                                <span class="title">Scarves</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="level1 nav-3-4">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Cosmetics</span>
                                                </a>
                                            </li>
                                            <li class="level1 nav-3-5 last">
                                                <a class=" menu-title-lv1" href="#">
                                                    <span class="title">Bras</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="level0 custom-itemdrop-staticblock">
                                    <a class="menu-title-lv0" href="404.html">
                                        <span class="title">Offer</span>
                                    </a>
                                    <div class="wrap_dropdown fullwidth">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a class="banner5" href="#">
                                                    <img alt="" src="images/menu/menu3.jpg">
                                                </a>
                                                <br>
                                                <h3 class="headtitle">Sofa</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <a class="banner5" href="#">
                                                    <img alt="" src="images/menu/menu4.jpg">
                                                </a>
                                                <br>
                                                <h3 class="headtitle">Chair</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <a class="banner5" href="#">
                                                    <img alt="" src="images/menu/menu5.jpg">
                                                </a>
                                                <br>
                                                <h3 class="headtitle">Bad</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <a class="banner5" href="#">
                                                    <img alt="" src="images/menu/menu6.jpg">
                                                </a>
                                                <br>
                                                <h3 class="headtitle">furniture chest</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="level0 custom-item">
                                    <a class="menu-title-lv0" href="#">
                                        <span class="title">Deal</span>
                                    </a>
                                </li>
                                <li class="level0 custom-item">
                                    <a class="menu-title-lv0" href="blog.html">
                                        <span class="title">Blog</span>
                                    </a>
                                </li>
                                <li class="level0 custom-item">
                                    <a class="menu-title-lv0" href="contact-us.html">
                                        <span class="title">Contact Us</span>
                                    </a>
                                </li>
                                <li class="level0 custom-item">
                                    <a class="menu-title-lv0" href="#">
                                        <span class="title">Custom menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="sns_mommenu" class="menu-offcanvas hidden-md hidden-lg">
                                    <span class="btn2 btn-navbar leftsidebar" style="display: inline-block;">
                                        <i class="fa fa-align-left"></i>
                                        <span class="overlay"></span>
                                    </span>
                            <span class="btn2 btn-navbar offcanvas">
                                        <i class="fa fa-align-justify"></i>
                                        <span class="overlay"></span>
                                    </span>
                            <span class="btn2 btn-navbar rightsidebar">
                                        <i class="fa fa-align-right"></i>
                                        <span class="overlay"></span>
                                    </span>
                            <div id="menu_offcanvas" class="offcanvas">
                                <ul class="mainnav">
                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="index.html">
                                                <span class="title">Home</span>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="level0 nav-5 first active">
                                        <div class="accr_header">
                                            <a class=" menu-title-lv0" href="listing-grid.html">
                                                <span>Funiture</span>
                                            </a>
                                        </div>
                                    </li>

                                    <li class="level0 nav-6 parent">
                                        <div class="accr_header">
                                            <a class=" menu-title-lv0" href="#">
                                                <span>All products</span>
                                            </a>
                                            <span class="btn_accor">

                                                    </span>
                                        </div>
                                        <div class="accr_content" style="display: none;">
                                            <ul class="level0">
                                                <li class="level1 nav-5-1 first parent">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Bags</span>
                                                        </a>
                                                        <span class="btn_accor">

                                                                </span>
                                                    </div>
                                                    <div class="accr_content" style="display: none;">
                                                        <ul class="level1">
                                                            <li class="level2 nav-5-1 first">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Laptop</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-2 parent">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Dresses</span>
                                                                    </a>
                                                                    <span class="btn_accor">

                                                                            </span>
                                                                </div>
                                                                <div class="accr_content" style="display: none;">
                                                                    <ul class="level2">
                                                                        <li class="level3 nav-5-1-1 first">
                                                                            <div class="accr_header">
                                                                                <a class=" menu-title-lv3" href="#">
                                                                                    <span>Briefs</span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="level3 nav-5-1-2 last parent">
                                                                            <div class="accr_header">
                                                                                <a class=" menu-title-lv3" href="#">
                                                                                    <span>Blog</span>
                                                                                </a>
                                                                                <span class="btn_accor">

                                                                                        </span>
                                                                            </div>
                                                                            <div class="accr_content" style="display: none;">
                                                                                <ul class="level3">
                                                                                    <li class="level4 nav-5-1-1-1 first last">
                                                                                        <div class="accr_header">
                                                                                            <a class=" menu-title-lv4" href="#">
                                                                                                <span>Bands</span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-3">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Cosmetic</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-4">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Duffle</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-5 last">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Nightwear</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-5-2 parent">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Shirts</span>
                                                        </a>
                                                        <span class="btn_accor">

                                                                </span>
                                                    </div>
                                                    <div class="accr_content" style="display: none;">
                                                        <ul class="level1">
                                                            <li class="level2 nav-5-1-6 first">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Tops</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-1-7">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Camis</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-1-8">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Helmet</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-1-9">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Lingerie</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-1-10 last">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Hair</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-5-3 parent">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Shoes</span>
                                                        </a>
                                                        <span class="btn_accor">

                                                                </span>
                                                    </div>
                                                    <div class="accr_content" style="display: none;">
                                                        <ul class="level1">
                                                            <li class="level2 nav-5-2-11 first">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Leathers</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-2-12">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Rings</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-2-13">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Cocktail</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-2-14">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Gloves</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-2-15 last">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Clothing</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-5-4 last parent">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Shapewear</span>
                                                        </a>
                                                        <span class="btn_accor">

                                                                </span>
                                                    </div>
                                                    <div class="accr_content" style="display: none;">
                                                        <ul class="level1">
                                                            <li class="level2 nav-5-3-16 first">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Hats</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-3-17">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Outerwear</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-3-18">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Novelty</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-3-19">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Footwear</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-5-3-20 last">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Sundresses</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="level0 nav-7">
                                        <div class="accr_header">
                                            <a class=" menu-title-lv0" href="#">
                                                <span>Shop</span>
                                            </a>
                                        </div>
                                    </li>


                                    <li class="level0 nav-8 last parent">
                                        <div class="accr_header">
                                            <a class=" menu-title-lv0" href="#">
                                                <span>Mobile </span>
                                            </a>
                                            <span class="btn_accor">

                                                    </span>
                                        </div>
                                        <div class="accr_content" style="display: none;">
                                            <ul class="level0">
                                                <li class="level1 nav-7-1 first">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Cfg products</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-7-2">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Product types</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-7-3 parent">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Bicycle</span>
                                                        </a>
                                                        <span class="btn_accor">

                                                                </span>
                                                    </div>
                                                    <div class="accr_content" style="display: none;">
                                                        <ul class="level1">
                                                            <li class="level2 nav-7-2-1 first">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Lifestyle</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-7-2-2">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Jackets</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="level2 nav-7-2-3 last">
                                                                <div class="accr_header">
                                                                    <a class=" menu-title-lv2" href="#">
                                                                        <span>Scarves</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-7-4">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Cosmetics</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="level1 nav-7-5 last">
                                                    <div class="accr_header">
                                                        <a class=" menu-title-lv1" href="#">
                                                            <span>Bras</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="404.html">
                                                <span class="title">Offer</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="#">
                                                <span class="title">Deal</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="blog.html">
                                                <span class="title">Blog</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="contact-us.html">
                                                <span class="title">Contact Us</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="level0 custom-item">
                                        <div class="accr_header">
                                            <a class="menu-title-lv0" href="#">
                                                <span class="title">Custom menu</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sns_menu_right">
                        <div class="block_topsearch">
                            <div class="top-cart">
                                <div class="mycart mini-cart">
                                    <div class="block-minicart">
                                        <div class="tongle">
                                            <i class="fa fa-shopping-cart"></i>
                                            <div class="summary">
                                                        <span class="amount">
                                                            <a href="#">
                                                                <span>3</span>
                                                                ( items )
                                                            </a>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="block-content content">
                                            <div class="block-inner">
                                                <ol id="cart-sidebar" class="mini-products-list">
                                                    <li class="item odd">
                                                        <a class="product-image" title="Modular Modern" href="detail.html">
                                                            <img alt="" src="images/products/1.jpg">
                                                        </a>
                                                        <div class="product-details">
                                                            <a class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" title="Remove This Item" href="#">Remove This Item</a>
                                                            <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                            <p class="product-name">
                                                                <a href="detail.html">Modular Modern</a>
                                                            </p>
                                                            <!-- <strong>1</strong>
                                                                    x -->
                                                            <span class="price">$ 540.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="item odd">
                                                        <a class="product-image" title="Modular Modern" href="detail.html">
                                                            <img alt="" src="images/products/22.jpg">
                                                        </a>
                                                        <div class="product-details">
                                                            <a class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" title="Remove This Item" href="#">Remove This Item</a>
                                                            <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                            <p class="product-name">
                                                                <a href="detail.html">Modular Modern</a>
                                                            </p>
                                                            <!-- <strong>1</strong>
                                                                    x -->
                                                            <span class="price">$ 540.00</span>
                                                        </div>
                                                    </li>
                                                    <li class="item last even">
                                                        <a class="product-image" title="Modular Modern" href="detail.html">
                                                            <img alt="" src="images/products/3.jpg">
                                                        </a>
                                                        <div class="product-details">
                                                            <a class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" title="Remove This Item" href="#">Remove This Item</a>
                                                            <a class="btn-edit" title="Edit item" href="detail.html">Edit item</a>
                                                            <p class="product-name">
                                                                <a href="#">Modular Modern</a>
                                                            </p>
                                                            <!--  <strong>1</strong>
                                                                    x -->
                                                            <span class="price">$ 540.00</span>
                                                        </div>
                                                    </li>
                                                </ol>
                                                <p class="cart-subtotal">
                                                    <span class="label">Total:</span>
                                                    <span class="price">$ 540.00</span>
                                                </p>
                                                <div class="actions">
                                                    <a class="button">
                                                                <span>
                                                                    <span>Check out</span>
                                                                </span>
                                                    </a>
                                                    <a class="button gfont go-to-cart" href="shoppingcart.html">Go to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="icon-search"></span>
                            <div class="top-search">
                                <div id="sns_serachbox_pro11739847651442478087" class="sns-serachbox-pro">
                                    <div class="sns-searbox-content">
                                        <form id="search_mini_form3703138361442478087" method="get" action="http://demo.snstheme.com/sns-simen/index.php/catalogsearch/result/">
                                            <div class="form-search">
                                                <input id="search3703138361442478087" class="input-text" type="text" value="" name="q" placeholder="Search here...." size="30" autocomplete="off">
                                                <button class="button form-button" title="Search" type="submit">Search</button>
                                                <div id="search_autocomplete3703138361442478087" class="search-autocomplete" style="display: none;"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND HEADER -->

    <!-- SLIDESHOW -->
    <div id="sns_slideshow1" class="wrap">
        <div id="header-slideshow">
            <div class="container">
                <div class="row">
                    <div class="slideshows col-md-6 col-sm-8">
                        <div id="slider123" class="owl-carousel owl-theme" style="overflow: hidden;">
                            <div class="item style1">
                                <img src="images/sildeshow/slideshow1.jpg" alt="">
                            </div>
                            <div class="item style2">
                                <img src="images/sildeshow/slideshow2.jpg" alt="">
                            </div>
                            <div class="item style3">
                                <img src="images/sildeshow/slideshow3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="banner-right col-md-6 col-sm-4">
                        <div class="banner6 banner5 dbn col-md-12 col-sm-6">
                            <a href="#">
                                <img src="images/sildeshow/banner1.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner6 pdno col-md-12 col-sm-12">
                            <div class="banner7 banner6  banner5 col-md-6 col-sm-12">
                                <a href="#">
                                    <img src="images/sildeshow/banner2.jpg" alt="">
                                </a>
                            </div>
                            <div class="banner8 banner6  banner5 col-md-6 col-sm-12">
                                <a href="#">
                                    <img src="images/sildeshow/banner3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND SLIDESHOW -->

    <!-- CONTENT -->
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div id="sns_producttaps1" class="sns_producttaps_wraps">
                            <h3 class="precar">PRODUCT TAPS</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Latest</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sale off</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Best sale</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="products-grid row style_grid">
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/1.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>

                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/2.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/3.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/4.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/5.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/6.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/7.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>
                                                        </div>

                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/8.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/9.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/10.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="products-grid row style_grid">
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/30.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/29.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/28.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/27.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/26.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/25.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/24.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/23.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/22.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/21.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="products-grid row style_grid">
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/3.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/5.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/7.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/9.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/11.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/13.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                        <span class="price2">$ 600.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/15.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/17.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/19.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label"></div>
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                <span class="img-main">
                                                               <img src="images/products/21.jpg" alt="">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ 540.00</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart"
                                                                    title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="bt-more">
                                <span>Load more items</span>
                            </h3>
                        </div>

                        <div class="sns_banner">
                            <a href="#">
                                <img src="images/banner11.jpg" alt="">
                            </a>
                            <div class="style-title">NEW products</div>
                            <div class="style-text1">Axel - stool</div>
                            <div class="style-text2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
                            <div class="style-button">Buy now</div>
                        </div>
                        <!--  <div class="clearfix"></div> -->
                        <div id="sns_suggest12" class="sns_suggest">
                            <div class="block-title">
                                <h3>suggest collection</h3>
                                <i class="fa fa-align-justify"></i>
                            </div>
                            <div class="suggest-content">
                                <div class="suggest-item">
                                    <img src="images/products/21.jpg" alt="">
                                    <div class="title"><a href="#">Office chair</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/22.jpg" alt="">
                                    <div class="title"><a href="#">Lorem Ipsum is</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/23.jpg" alt="">
                                    <div class="title"><a href="#">Outdoor table</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/24.jpg" alt="">
                                    <div class="title"><a href="#">Coffee chair</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/25.jpg" alt="">
                                    <div class="title"><a href="#">Good chair</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/26.jpg" alt="">
                                    <div class="title"><a href="#">Leather Sofa</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/27.jpg" alt="">
                                    <div class="title"><a href="#">Office chair</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/28.jpg" alt="">
                                    <div class="title"><a href="#">Computer chair</a></div>
                                </div>
                                <div class="suggest-item">
                                    <img src="images/products/29.jpg" alt="">
                                    <div class="title"><a href="#">Office chair</a></div>
                                </div>
                            </div>
                        </div>



                        <div class="products-upsell products-index">
                            <div class="detai-products1">
                                <div class="products-grid">
                                    <div id="product_index" class="item-row owl-carousel owl-theme" style="display: inline-block">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>
                                                        <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="images/products/16.jpg">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" title="Add to Compare" href="#">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn" href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div>
                                                        <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="images/products/17.jpg">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" title="Add to Compare" href="#">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn" href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="images/products/18.jpg">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                    <span class="price2">$ 600.00</span>
                                                                                </span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" title="Add to Compare" href="#">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn" href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>
                                                        </div>
                                                        <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="images/products/19.jpg">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" title="Add to Compare" href="#">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn" href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="detail.html" title="Modular Modern">
                                                                    <span class="img-main">
                                                                        <img alt="" src="images/products/11.jpg">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="detail.html" title="Modular Modern"> Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                            <span class="regular-price">
                                                                                <span class="price">
                                                                                    <span class="price1">$ 540.00</span>
                                                                                </span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" title="Add to Wishlist" href="#">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" title="Add to Compare" href="#">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn" href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="sns_banner1">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="banner-content banner5">
                                        <a href="#">
                                            <img src="images/banner12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="banner-content banner5 style-banner2">
                                        <a href="#">
                                            <img src="images/banner13.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="banner-content banner5">
                                        <a href="#">
                                            <img src="images/banner14.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sns-products-list">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <h3>MOST VIEWED</h3>
                                    </div>
                                </div>
                                <div id="products_small" class="products-small owl-carousel owl-theme" style="display: inline-block">
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/11.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/12.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/13.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/14.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/15.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/16.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/17.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/18.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/19.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Modular Modern"
                                                           href="detail.html">
                                                                    <span class="img-main">
                                                                   <img src="images/products/8.jpg" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                   href="detail.html">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sns-latestblog">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <h3>LATEST POSTS</h3>
                                    </div>
                                </div>
                                <div id="latestblog132" class="latestblog-content owl-carousel owl-theme" style="display: inline-block">
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">08</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Chair furnitured</a></p>
                                                <p class="style2">Lorem Ipsum has been the industry's </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">06</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Leather Sofas</a></p>
                                                <p class="style2">When an unknown printer took galley</p>
                                                <p class="style3">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">05</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Chair furnitured</a></p>
                                                <p class="style2">Lorem Ipsum has been </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry ...</p>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">08</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Chair furnitured</a></p>
                                                <p class="style2">Lorem Ipsum has been the industry's </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">06</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Leather Sofas</a></p>
                                                <p class="style2">When an unknown printer took galley</p>
                                                <p class="style3">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="banner5">
                                            <a href="blog-detail.html">
                                                <img src="images/blog/blog7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">05</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="blog-detail.html">Chair furnitured</a></p>
                                                <p class="style2">Lorem Ipsum has been </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry ...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND CONTENT -->

    <!-- PARTNERS -->
    <div id="sns_partners" class="wrap">
        <div class="container">
            <div class="slider-wrap">
                <div class="partners_slider_in">
                    <div id="partners_slider1" class="our_partners owl-carousel owl-theme owl-loaded" style="display: inline-block">
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/1.png">
                            </a>
                        </div>
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/2.png">
                            </a>
                        </div>
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/3.png">
                            </a>
                        </div>
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/4.png">
                            </a>
                        </div>
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/5.png">
                            </a>
                        </div>
                        <div class="item">
                            <a class="banner11" href="#" target="_blank">
                                <img alt="" src="images/brands/6.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND PARTNERS -->

    <!-- FOOTER -->
    <div id="sns_footer" class="footer_style vesion2 wrap">
        <div id="sns_footer_top" class="footer">
            <div class="container">
                <div class="container_in">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 column0">
                            <div class="contact_us">
                                <h6>Contact us</h6>
                                <ul class="fa-ul">
                                    <li class="pd-right">
                                        <i class="fa-li fa fw fa-home"> </i>
                                        8888 South Avenue Street, New York
                                    </li>
                                    <li>
                                        <i class="fa-li fa fw fa-phone"> </i>
                                        <p>(12) 3 456 7896</p>
                                        <p>(12) 3 456 7895</p>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fw fa-envelope"> </i>
                                        <p>
                                            <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                        </p>
                                        <p>
                                            <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column1">
                            <h6>Service</h6>
                            <ul>
                                <li>
                                    <a href="#">rices & Currencies</a>
                                </li>
                                <li>
                                    <a href="#">Secure Payment</a>
                                </li>
                                <li>
                                    <a href="#">Delivery Times & Costs</a>
                                </li>
                                <li>
                                    <a href="#">Returns & Exchanges</a>
                                </li>
                                <li>
                                    <a href="#">FAQ's</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column2">
                            <h6>account</h6>
                            <ul>
                                <li>
                                    <a href="#">My account</a>
                                </li>
                                <li>
                                    <a href="#">Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Order history</a>
                                </li>
                                <li>
                                    <a href="#">Specials</a>
                                </li>
                                <li>
                                    <a href="#">Gift vouchers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column3">
                            <h6>information</h6>
                            <ul>
                                <li>
                                    <a href="#">My account</a>
                                </li>
                                <li>
                                    <a href="#">Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Order history</a>
                                </li>
                                <li>
                                    <a href="#">Specials</a>
                                </li>
                                <li>
                                    <a href="#">Gift vouchers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-3 column column4">
                            <div class="subcribe-footer">
                                <div class="block_border block-subscribe">
                                    <div class="block_head">
                                        <h6>Newsletter</h6>
                                        <p>Register your email for news</p>
                                    </div>
                                    <form id="newsletter-validate-detail">
                                        <div class="block_content">
                                            <div class="input-box">
                                                <div class="input_warp">
                                                    <input id="newsletter" class="input-text required-entry validate-email" type="text" title="Sign up for our newsletter" placeholder="Your email here" name="email">
                                                </div>
                                                <div class="button_warp">
                                                    <button class="button gfont" title="Subcribe" type="submit">
                                                                <span>
                                                                    <span>Subscribe</span>
                                                                </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sns_footer_bottom" class="footer">
            <div class="container">
                <div class="row">
                    <div class="bottom-pd1 col-sm-6">
                        <div class="sns-copyright">
                            © 2015 Magento Demo Store. All Rights Reserved. Developer by
                            <a title="" data-original-title="Visit SNSTheme.Com!" data-toggle="tooltip" href="http://www.snstheme.com/">SNSTheme.Com</a>
                        </div>
                    </div>
                    <div class="bottom-pd2 col-sm-6">
                        <div class="payment">
                            <img src="images/sns_paymal.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND FOOTER -->
</div>
<!-- Scripts -->
<script src="template/js/jquery-1.9.1.min.js"></script>
<script src="template/bootstrap/js/bootstrap.min.js"></script>
<script src="template/js/less.min.js"></script>
<script src="template/js/sns-extend.js"></script>
<script src="template/js/custom.js"></script>
<!-- <script src="owl-carousel/jquery.min.js"></script> -->
<script src="template/js/owl-carousel/owl.carousel.min.js"></script>
</body>
</html>
