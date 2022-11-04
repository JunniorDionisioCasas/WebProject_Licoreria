<div id="sns_header" class="wrap">
    <!-- Header Top -->
    <div class="sns_header_top">
        <div class="container">
            <div class="sns_module">
                <div class="header-setting">
                    <div class="module-setting">

                    </div>
                </div>
                <div class="header-account">
                    <div class="myaccount">
                        <div class="tongle">
                            <i class="fa fa-user"></i>
                            <span>Mi cuenta</span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="customer-ct content">
                            <ul class="links">
                                @if( Auth::check() )
                                <li class="first">
                                    <!-- <a class="top-link" title="Salir" href="/logout">Salir</a> -->
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button class="top-link logout" type="submit"
                                                style="border: none; background: none;color: #888;">
                                            {{ __('Salir') }}
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <a class="top-link-myaccount" title="Mi perfil" href="/user/profile">Mi perfil</a>
                                </li>
                                @else
                                <li>
                                    <a class="top-link register" title="Registrarse" href="/register">Registrarse</a>
                                </li>
                                <li class=" last">
                                    <a class="top-link-login" title="Log In" href="/login">Login</a>
                                </li>
                                @endif
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
                        <a href="/home" title="San Sebastián">
                            <img alt="" src="images/logo/logo_black_and_white.PNG" height="100px">
                        </a>
                    </h1>
                    <div class="col-md-9 policy">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-phone-12">
                                <div class="policy_custom">
                                    <div class="policy-icon">
                                        <em class="fa fa-truck"> </em>
                                    </div>
                                    <p class="policy-titile">Delivery express</p>
                                    <p class="policy-ct">En pedidos mayores a S/ 50</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-phone-12">
                                <div class="policy_custom">
                                    <div class="policy-icon">
                                        <em class="fa fa-cloud-upload"> </em>
                                    </div>
                                    <p class="policy-titile">Hasta 20% de descuento</p>
                                    <p class="policy-ct">En días festivos</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-phone-12">
                                <div class="policy_custom">
                                    <div class="policy-icon">
                                        <em class="fa fa-gift"> </em>
                                    </div>
                                    <p class="policy-titile">2x1 en tu primera compra</p>
                                    <p class="policy-ct">Para clientes nuevos</p>
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
                                <a class="menu-title-lv0 pd-menu116" href="/home" target="_self">
                                    <span class="title">Inicio</span>
                                </a>
                            </li>
                            <li class="level0 nav-1 no-group first drop-submenu parent">
                                <a class=" menu-title-lv0" href="/productos">
                                    <span class="title">Productos</span>
                                </a>
                                <!-- <div class="no-width wrap_submenu">
                                    <div class="no-pd">
                                        <div class="wrap_dropdown fullwidth">
                                            <div class="class2 row">
                                                <div class="col-sm-3">
                                                    <div class="wrap_submenu">
                                                        <h6 class="title menu1-2-5">Categorias</h6>
                                                        <ul class="level1">
                                                            <li class="level2 nav-1-3-16 first">
                                                                <a class=" menu-title-lv2" href="#">
                                                                    <span class="title">Licores</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="wrap_submenu">
                                                        <h6 class="title menu1-2-5">Marcas</h6>
                                                        <ul class="level1">
                                                            <li class="level2 nav-1-3-16 first">
                                                                <a class=" menu-title-lv2" href="#">
                                                                    <span class="title">Burgos</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </li>

                        </ul>
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
                                                <a href="/carrito_compras">
                                                    <span id="carrito_cntd_prod">0</span>
                                                    ( productos )
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="carrito_dropdown_div" class="block-content content">
                                        <div class="block-inner">
                                            <ol id="cart-sidebar" class="mini-products-list">

                                                <!-- lista de productos en el carrito -->

                                            </ol>
                                            <p class="cart-subtotal">
                                                <span class="label">Total:</span>
                                                <span id="carrito_precio_total" class="price">S/ 0.00</span>
                                            </p>
                                            <div class="actions">
                                                @if(isset($_COOKIE['data_carrito']))
                                                <a id="btnContinuarAPago" class="button" href="/pago">Continuar</a>
                                                @endif
                                                <a class="button gfont go-to-cart" href="/carrito_compras">Ver carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <span class="icon-search"></span>
                        <div class="top-search">
                            <div id="sns_serachbox_pro11739847651442478087" class="sns-serachbox-pro">
                                <div class="sns-searbox-content">
                                    <form id="search_mini_form3703138361442478087" method="get" action="">
                                        <div class="form-search">
                                            <input id="search3703138361442478087" class="input-text" type="text" value="" name="q" placeholder="Estoy buscando...." size="30" autocomplete="off">
                                            <button class="button form-button" title="Search" type="submit">Buscar</button>
                                            <div id="search_autocomplete3703138361442478087" class="search-autocomplete" style="display: none;"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BREADCRUMBS -->
<div id="sns_breadcrumbs" class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="sns_titlepage"></div>
                <div id="sns_pathway" class="clearfix">
                    <div class="pathway-inner">
                        <span class="icon-pointer "></span>
                        <ul class="breadcrumbs">
                            <li class="home">
                                <a title="Ir a la página de inicio" href="/home">
                                    <i class="fa fa-home"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li class="category3 last">
                                <span id="breadcrumb_1"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AND BREADCRUMBS -->

@php
                    use Illuminate\Support\Facades\Auth;
                    $user = Auth::check();
                    echo $user;
                @endphp