@extends('layouts/vista_padre')

@section('title', 'Inicio')

@section('css')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
@stop

@section('slideshow')
    <!-- SLIDESHOW -->
    <div class="slideshow">
        <div id="sns_slideshows3" class="swiper">
            <div id="slishow_wrap12" class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="img_slideshow" src="/images/slideshow/slideshow_hd_background_moments.jpg" alt="Slideshow 1 - para tus momentos">
                </div>
                <div class="swiper-slide">
                    <img class="img_slideshow" src="/images/slideshow/slideshow_hd_background_variety.jpg" alt="Slideshow 2 - variedad">
                </div>
                <div class="swiper-slide">
                    <img class="img_slideshow" src="/images/slideshow/slideshow_hd_background_prices.jpg" alt="Slideshow 3 - mejores precios">
                </div>
            </div>
            <!-- navigation buttons -->
            <div id="swpBtnPrevSlideshow" class="swiper-button-prev"></div>
            <div id="swpBtnNextSlideshow" class="swiper-button-next"></div>
        </div>
        <!-- <div id="slideshow_controls">
            <button class="previous"><i class="fa fa-angle-left fa-3x"></i></button>
            <button class="next"><i class="fa fa-angle-right fa-3x"></i></button>
        </div> -->
    </div>
    <!-- END SLIDESHOW -->
@stop

@section('contenido_principal')
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                    <div id="sns_main" class="col-md-12 col-main">
                        <div id="sns_mainmidle">
                            <div id="sns_producttaps1" class="sns_producttaps_wraps">
                                <h3 class="precar">VER PRODUCTOS POR:</h3>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="javascript:void(0)" aria-controls="nuevos" role="tab" data-toggle="tab">Nuevos</a></li>
                                    <li role="presentation"><a href="javascript:void(0)" aria-controls="ofertas" role="tab" data-toggle="tab">En oferta</a></li>
                                    <li role="presentation"><a href="javascript:void(0)" aria-controls="mas_vendidos" role="tab" data-toggle="tab">Más vendidos</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="nuevos">
                                        <div id="tabContainerNewPrd" class="products-grid row style_grid">
                                            <!-- Aquí se insertan productos nuevos mediante api -->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ofertas">
                                        <div id="tabContainerOfferPrd" class="products-grid row style_grid">
                                            <!-- Aquí se insertan productos con ofertas mediante api -->
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="mas_vendidos">
                                        <div id="tabContainerMostSoldPrd" class="products-grid row style_grid">
                                            <!-- Aquí se insertan productos más vendidos mediante api -->
                                        </div>
                                    </div>
                                </div>
                                <h3 class="bt-more">
                                    <span id="btnVerTodosProd">Ver todos los productos</span>
                                </h3>
                            </div>

                            <div class="sns_banner">
                                <a id="linkNewestPrd" href="#">
                                <div class="newestPrd_imgContainer">
                                    <img src="/images/backgrounds/banner11_edited.png" alt="">
                                    <img id="newestPrdImg" src="" alt="">
                                </div>
                                </a>
                                <div class="style-title">Nuestro NUEVO producto</div>
                                <div id="txt_newest_prd_title" class="style-text1">NOMBRE - categoria</div>
                                <div id="txt_newest_prd_desc" class="style-text2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
                                <div id="btnNewestPrd" class="style-button">Comprar</div>
                            </div>

                            <div class="sns-products-list">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="block-title">
                                            <h3>LOS MÁS VISTOS</h3>
                                        </div>
                                    </div>
                                    <div id="products_small" class="products-small owl-carousel owl-theme" style="display: inline-block">
                                        <!-- Aquí se insertan los productos más vistos mediante api -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- AND CONTENT -->
            </div>
        </div>
    </div>

    <!-- PARTNERS -->
    <div id="sns_partners" class="wrap">
        <div class="container">
            <div id="swiperBrands" class="swiper">
                <div id="partners_slider1" class="swiper-wrapper">
                    <!-- Aquí de insertan logos de marcas mediante api -->
                </div>
                <div id="swpBtnPrevBrands" class="swiper-button-prev" style="display: none;"></div>
                <div id="swpBtnNextBrands" class="swiper-button-next" style="display: none;"></div>
            </div>
        </div>
    </div>
    <!-- AND PARTNERS -->

    <div id="toastContainer" class="toast-container position-fixed top-0 end-0 p-3">
        <!-- Se insertan alertas de productos agregados mediante la funcion alerta_producto_agregado() -->
    </div>

    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
        // echo $user;

        $current_time = Carbon\Carbon::now('-05:00');
        // echo $current_time;Carbon::createFromTimestamp
    @endphp

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        let queryString = location.search.substring(1);
        let array = queryString.split("&");
        const collection_status = array[1],
            status = array[3],
            payment_id = array[2];
        let userMail = "{{isset($user) ? $user->email : ''}}";
        let a = "Bearer {{config('services.api_keys.mp_secret_key')}}";

        if ( array.includes("collection_status=approved") && array.includes("status=approved") ) {
            //api consultar pago, get
            fetch('https://api.mercadopago.com/v1/payments/'+payment_id.split("=")[1], {
                method: 'GET',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer {{config('services.api_keys.mp_public_key')}}",
                },
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    userMail = data.payer.email;
                })
                .catch(error => console.log(error));

            registro_venta({{isset($user) ? $user->id : '``'}}, "{{$current_time}}", 3, userMail); //estado 3=pagado y entregado

            limp_carrito();

            Swal.fire({
                title: 'Compra exitosa',
                icon: 'success',
            }).then( (result) => {
                window.location.href = "/home";
            })
        }

        const swiper = new Swiper('#sns_slideshows3', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            effect: "fade",
            spaceBetween: 30,
            autoplay: {
                delay: 4000,
                disableOnInteraction: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '#swpBtnNextSlideshow',
                prevEl: '#swpBtnPrevSlideshow',
            },
        });

        const displaying_marcas = (array_data) => {
            const container = document.getElementById("partners_slider1");
            array_data.forEach(element => {
                container.insertAdjacentHTML('beforeend', `
                    <div class="swiper-slide textAlignCenter">
                        <a class="banner11" href="/productos?m=${element.id_marca}&min_price=0&max_price=1000&">
                            <img alt="" src="${element.mrc_image_path}">
                        </a>
                    </div>
                `);
            });

            const swiper = new Swiper('#swiperBrands', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 4,
                navigation: {
                    nextEl: '#swpBtnNextBrands',
                    prevEl: '#swpBtnPrevBrands',
                },
            });
        }
        const displaying_prd_mas_vistos = (array_data) => {
            const container = document.getElementById("products_small");
            array_data.forEach(element => {
                let nombre = element.prd_nombre;
                let id = element.id_producto;
                let img_path = element.prd_imagen_path;
                let precio = parseFloat(element.prd_precio).toFixed(2);
                let maxStock = parseInt(element.prd_stock);
                if(element.precioConDescuento){
                    precio = parseFloat(element.precioConDescuento).toFixed(2);
                }

                container.insertAdjacentHTML('beforeend', `
                    <div class="item-row">
                        <div class="item">
                            <div class="item-inner">
                                <div class="prd">
                                    <div class="item-img clearfix">
                                        <a class="product-image have-additional"
                                            title="${nombre}"
                                            href="detalle-producto?${id}">
                                                    <span class="img-main">
                                                    <img src="${img_path}" alt="">
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a title="${nombre}"
                                                    href="detalle-producto?${id}">
                                                    ${nombre} </a>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">
                                                                <span class="price1">S/ ${precio}</span>
                                                            </span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-bot">
                                            <div class="wrap-addtocart">
                                                <button class="btn-cart" title="Añadir al carrito"
                                                        onclick="addProduct(${id}, '${nombre}', ${precio}, '${img_path}', 1, ${maxStock})">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Añadir al carrito</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
        const displaying_prd_nuevos = (array_data) => {
            const container = document.getElementById("tabContainerNewPrd");
            array_data.forEach(element => {
                let nombre = element.prd_nombre;
                let id = element.id_producto;
                let precio = parseFloat(element.prd_precio).toFixed(2);
                let img_path = element.prd_imagen_path;
                let maxStock = parseInt(element.prd_stock);

                container.insertAdjacentHTML('beforeend', `
                    <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                        <div class="item-inner">
                            <div class="prd">
                                <div class="item-img clearfix">
                                    <div class="ico-label">
                                        <span class="ico-product ico-new">Nuevo</span>
                                    </div>

                                    <a class="product-image have-additional"
                                        title="${nombre}"
                                        href="detalle-producto?${id}">
                                                <span class="img-main">
                                                <img src="${img_path}" alt="">
                                                </span>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a title="${nombre}"
                                                href="detalle-producto?${id}">
                                                ${nombre} </a>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">
                                                        <span class="price1">S/ ${precio}</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-bot">
                                    <div class="wrap-addtocart">
                                        <button class="btn-cart" title="Añadir al carrito"
                                            onclick="addProduct(${id}, '${nombre}', ${precio}, '${img_path}', 1, ${maxStock})">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Añadir al carrito</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
        const displaying_prd_en_oferta = (array_data) => {
            const container = document.getElementById("tabContainerOfferPrd");
            array_data.forEach(element => {
                let nombre = element.prd_nombre;
                let id = element.id_producto;
                let precioOriginal = parseFloat(element.prd_precio).toFixed(2);
                let precioOferta = parseFloat(element.precioConDescuento).toFixed(2);
                let img_path = element.prd_imagen_path;
                let maxStock = parseInt(element.prd_stock);

                container.insertAdjacentHTML('beforeend', `
                    <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                        <div class="item-inner">
                            <div class="prd">
                                <div class="item-img clearfix">
                                    <div class="ico-label">
                                        <span class="ico-product ico-sale">Oferta</span>
                                    </div>

                                    <a class="product-image have-additional"
                                        title="${nombre}"
                                        href="detalle-producto?${id}">
                                                <span class="img-main">
                                                <img src="${img_path}" alt="">
                                                </span>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a title="${nombre}"
                                                href="detalle-producto?${id}">
                                                ${nombre} </a>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">
                                                        <span class="price1">S/ ${precioOriginal}</span>
                                                        <span class="price2">S/ ${precioOferta}</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-bot">
                                    <div class="wrap-addtocart">
                                        <button class="btn-cart" title="Añadir al carrito"
                                            onclick="addProduct(${id}, '${nombre}', ${precioOferta}, '${img_path}', 1, ${maxStock})">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Añadir al carrito</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
        const displaying_prd_mas_vendidos = (array_data) => {
            const container = document.getElementById("tabContainerMostSoldPrd");
            array_data.forEach(element => {
                let nombre = element.prd_nombre;
                let id = element.id_producto;
                let precio = parseFloat(element.prd_precio).toFixed(2);
                let img_path = element.prd_imagen_path;
                let maxStock = parseInt(element.prd_stock);

                container.insertAdjacentHTML('beforeend', `
                    <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                        <div class="item-inner">
                            <div class="prd">
                                <div class="item-img clearfix">
                                    <a class="product-image have-additional"
                                        title="${nombre}"
                                        href="detalle-producto?${id}">
                                                <span class="img-main">
                                                <img src="${img_path}" alt="">
                                                </span>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a title="${nombre}"
                                                href="detalle-producto?${id}">
                                                ${nombre} </a>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">
                                                        <span class="price1">S/ ${precio}</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-bot">
                                    <div class="wrap-addtocart">
                                        <button class="btn-cart" title="Añadir al carrito"
                                            onclick="addProduct(${id}, '${nombre}', ${precio}, '${img_path}', 1, ${maxStock})">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Añadir al carrito</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
        const displaying_prd_mas_nuevo = (data) => {
            let nombre_prd = document.getElementById("txt_newest_prd_title");
            nombre_prd.innerHTML = data.prd_nombre;
            nombre_prd.title = data.prd_nombre;
            document.getElementById("txt_newest_prd_desc").innerHTML = data.prd_descripcion;
            document.getElementById("linkNewestPrd").setAttribute("href", "/detalle-producto?"+data.id_producto);
            document.getElementById("btnNewestPrd").addEventListener("click", () => {addProduct(data.id_producto, data.prd_nombre, data.prd_precio, data.prd_imagen_path, 1, data.prd_stock)});
            document.getElementById("newestPrdImg").src = data.prd_imagen_path;
        }

        //llamado al api data_homepage, home_data
        const url = urlDominio + 'api/data_homepage';
        fetch( url, {
            method: 'GET',
            headers: {
                "Content-Type": "application/json",
            }
        } )
            .then( success => success.json() )
            .then( response => {
                displaying_prd_nuevos(response.prd_nuevos);
                displaying_prd_en_oferta(response.prd_en_oferta);
                displaying_prd_mas_vendidos(response.data_prd_mas_vendidos);
                displaying_prd_mas_vistos(response.prd_mas_vistos);
                displaying_prd_mas_nuevo(response.prd_nuevos[0]);
                displaying_marcas(response.marcas);
            } )
            .catch( error => console.log(error) );
        
        /* let btnAddToCart = document.querySelectorAll(".btn-cart");
        btnAddToCart.forEach( p => p.addEventListener('click', event => {
            console.log(event.target.getAttribute("data-el"));
            addProduct = (id, prd_nombre, prd_precio, prd_imagen_path, cntd)
        }) ); */

        document.getElementById("btnVerTodosProd").addEventListener("click", () => {window.location.href = "/productos"});

        //tabs configuration
        $('#sns_producttaps1 .nav.nav-tabs li').on('click', function(){
            if(!$(this).hasClass('active')) {
                $('#sns_producttaps1 .nav.nav-tabs li.active').removeClass( "active" );
                $(this).addClass('active');
                switch ($('#sns_producttaps1 .nav.nav-tabs li.active a').attr('aria-controls')) {
                    case 'nuevos':
                        $('#ofertas').hide();
                        $('#mas_vendidos').hide();
                        $('#nuevos').show();
                        break;
                    case 'ofertas':
                        $('#nuevos').hide();
                        $('#mas_vendidos').hide();
                        $('#ofertas').show();
                        break;
                    case 'mas_vendidos':
                        $('#nuevos').hide();
                        $('#ofertas').hide();
                        $('#mas_vendidos').show();
                        break;
                }
            }
        });

        //toggle brands arrows visibility
        $("#swiperBrands").mouseover( function() {
            $("#swpBtnPrevBrands").show();
            $("#swpBtnNextBrands").show();
        });
        $("#swiperBrands").mouseout( function() {
            $("#swpBtnPrevBrands").hide();
            $("#swpBtnNextBrands").hide();
        });
    </script>
@stop