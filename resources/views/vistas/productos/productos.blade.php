@extends('layouts/vista_padre')

@section('title', 'Productos')

@section('contenido_principal')

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
                                    <a title="Ir a la página de inicio" href="/">
                                        <i class="fa fa-home"></i>
                                        <span>Inicio</span>
                                    </a>
                                </li>
                                <li class="category3 last">
                                    <span>Productos</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND BREADCRUMBS -->

    <div id="sns_content" class="wrap layout-lm">
        <div class="container">
            <div class="row">

                <!-- sns_left -->
                <div id="sns_left" class="col-md-3">
                    <div class="wrap-in">
                        <div class="block block-layered-nav block-layered-nav--no-filters">
                            <div class="block-title">
                                <strong>
                                    <span>Filtrar por</span>
                                </strong>
                            </div>
                            <div class="block-content toggle-content">
                                <dl id="narrow-by-list">
                                    <dt class="odd">Categorias</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li>
                                                <a href="#">
                                                    Licores
                                                    <span class="count">(12)</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </dd>

                                    <dt class="odd">Precio</dt>
                                    <dd class="odd">
                                        <ol class="js-price">
                                            <li><input type="text" id="amount-1" style="border:0; color:#666;" value="1"></li>
                                            <li><input type="text" id="amount-2" style="border:0; color:#666;" value="9999"></li>
                                            <li class="style3">FILTRAR</li>
                                        </ol>
                                        <div id="slider-range"></div>
                                    </dd>
                                    <dt class="even">Marcas</dt>
                                    <dd class="even">
                                        <ol class="configurable-swatch-list last-child">
                                            <li>
                                                <a class="swatch-link" href="#">
                                                    <span class="swatch-label"> Burgos </span>
                                                    <span class="count">(12)</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- sns_left -->


                <div id="sns_main" class="col-md-9 col-main">
                    <div id="sns_mainmidle">
                        <div class="page-title category-title">
                            <h1>Productos</h1>
                        </div>
                        <div class="category-cms-block"></div>
                        <p class="category-image banner5">
                            <img src="images/staticas/banner.png" alt="banner">
                        </p>

                        <div class="category-products">

                            <!-- toolbar clearfix -->
                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <p class="view-mode">
                                        <label>Ver como</label>
                                        <strong class="icon-grid" title="Cuadrícula"></strong>
                                        <a class="icon-list" title="List" href="#"></a>
                                    </p>
                                    <div class="limiter">
                                        <label>Mostrar</label>
                                        <div class="select-new">
                                            <div class="select-inner jqtransformdone">
                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 80px;">
                                                    <div>
                                                        <span style="width: 50px;"> 20 </span>
                                                        <a class="jqTransformSelectOpen" href="#"></a>
                                                    </div>
                                                    <ul style="width: 78px; display: none; visibility: visible;">
                                                        <li>
                                                            <a class="selected" href="#"> 20 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 28 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 36 </a>
                                                        </li>
                                                    </ul>
                                                    <select class="select-limit-show jqTransformHidden" onchange="setLocation(this.value)" style="">
                                                        <option selected="selected" value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=20"> 20 </option>
                                                        <option value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=28"> 28 </option>
                                                        <option value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=36"> 36 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span>por página</span>
                                    </div>
                                    <div class="sort-by">
                                        <label>Ordenar por</label>
                                        <div class="select-new">
                                            <div class="select-inner jqtransformdone">
                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 118px;">
                                                    <div>
                                                        <span style="width: 50px;"> Nombre </span>
                                                        <a class="jqTransformSelectOpen" href="#"></a>
                                                    </div>
                                                    <ul style="width: 116px; display: none; visibility: visible;">
                                                        <li class="active">
                                                            <a class="selected" href="#"> Nombre </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Precio </a>
                                                        </li>
                                                    </ul>
                                                    <select class="select-sort-by jqTransformHidden" onchange="setLocation(this.value)" style="">
                                                        <option selected="selected"> Nombre </option>
                                                        <option> Precio </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  <a class="set-desc" title="Set Descending Direction" href="http://demo.snstheme.com/sns-simen/index.php/women.html?dir=desc&order=position"></a> -->
                                    </div>
                                    <div class="pager">
                                        <p class="amount">
                                            <span>1 a 20 </span>
                                            # producto (s)
                                        </p>
                                        <div class="pages">
                                            <strong>Páginas:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" title="Siguiente" href="#"> Siguiente </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix -->

                            <!-- sns-products-container -->
                            <div class="sns-products-container clearfix">
                                <div id="contenedor_productos_grid" class="products-grid row style_grid">

                                    <!-- Aquí se insertan los productos mediante api -->

                                </div>
                            </div>
                            <!-- sns-products-container -->

                            <!-- toolbar clearfix  bottom-->
                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <div class="pager">
                                        <p class="amount">
                                            <span>1 a 20 </span>
                                            # producto (s)
                                        </p>
                                        <div class="pages">
                                            <strong>Páginas:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" title="Siguiente" href="#"> Siguiente </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix bottom -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script>
        const urlDominio = 'http://127.0.0.1:8080/';
        const contenedor_prod = document.getElementById('contenedor_productos_grid');
        window.addEventListener('load', function () {
            //api productos, get
            let url = urlDominio + 'api/productos';
            fetch(url, {
                method: 'GET'
            })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    data.forEach( producto => {
                        contenedor_prod.insertAdjacentHTML("beforeend", `
                            <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                <div class="item-inner">
                                    <div class="prd">
                                        <div class="item-img clearfix">
                                            <a class="product-image have-additional"
                                               title="${producto.prd_nombre}"
                                               href="detalle-producto?${producto.id_producto}">
                                                    <span class="img-main">
                                                       <img src="${producto.prd_imagen_path}" alt="">
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a>${producto.prd_nombre}</a>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">
                                                                <span class="price1">S/ ${producto.prd_precio}</span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-bot action123">
                                            <div class="wrap-addtocart">
                                                <button class="btn-cart"
                                                        title="Añadir al carrito">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Añadir al carrito</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                    })
                })
                .catch(error => console.log(error));
        });
    </script>
@stop
