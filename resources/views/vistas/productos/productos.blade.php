@extends('layouts/vista_padre')

@section('title', 'Productos')

@section('css')
    <link rel="stylesheet" href="/css/productos.css">
@stop

@section('contenido_principal')

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
                                    <ol id="listaCategorias">

                                        <!-- Aquí se insertan las categorias y sus cantidades de productos mediante api -->

                                    </ol>
                                </dd>

                                <dt class="odd">Precio</dt>
                                <dd class="odd">
                                    <div class="price-input">
                                        <div class="field">
                                            <input id="min_price" type="number" class="input-min" value="0">
                                        </div>
                                        <div class="field">
                                            <input id="max_price" type="number" class="input-max" value="1000">
                                        </div>
                                    </div>
                                    <div class="slider">
                                        <div id="price_progress" class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input id="icon_min_range" type="range" class="range-min" min="0" max="1000" value="0" step="10">
                                        <input id="icon_max_range" type="range" class="range-max" min="0" max="1000" value="1000" step="10">
                                    </div>
                                </dd>

                                <dt class="even">Marcas</dt>
                                <dd class="even">
                                    <ol id="listaMarcas" class="configurable-swatch-list last-child">

                                        <!-- Aquí se insertan las marcas y sus cantidades de productos mediante api -->

                                    </ol>
                                </dd>
                            </dl>
                            <button id="btn_filtrar" type="button" class="style3 btnFiltrar" onclick="filtrar_productos()">FILTRAR</button>
                            <button type="button" class="style3 btnFiltrar" onclick="location.href = '/productos'">BORRAR FILTROS</button>
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
                        <img src="images/staticas/banner.jpg" alt="banner">
                    </p>

                    <div class="category-products">

                        <!-- toolbar clearfix -->
                        <!-- <div class="toolbar clearfix">
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
                                     <a class="set-desc" title="Set Descending Direction" href="http://demo.snstheme.com/sns-simen/index.php/women.html?dir=desc&order=position"></a>
                                </div>
                                <div class="pager">
                                    <p class="amount cantProd">
                                        <span>1 a 20 </span>

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
                        </div> -->
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
                                    <p class="amount cantProd">
                                        <span>1 a 20 </span>

                                    </p>
                                    <div class="pages">
                                        <strong>Páginas:</strong>
                                        <ol>
                                            <li class="current">1</li>
                                            <!-- <li>
                                                <a href="#">2</a>
                                            </li> -->
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

<div id="toastContainer" class="toast-container position-fixed top-0 end-0 p-3">
    <!-- Se insertan alertas de productos agregados mediante la funcion alerta_producto_agregado() -->
</div>

@stop

@section('js')
    <script>
        const contenedor_prod = document.getElementById('contenedor_productos_grid');
        const listaCategorias = document.getElementById('listaCategorias');
        const listaMarcas = document.getElementById('listaMarcas');
        const numProd = document.getElementsByClassName('amount cantProd');
        let search_params = (new URL(window.location.href)).search;
        let params_object = new URLSearchParams(search_params);
        let url = urlDominio + 'api/';

        const elmt_min_price = document.getElementById('min_price');
        const elmt_max_price = document.getElementById('max_price');
        const price_progress = document.getElementById('price_progress');

        /* let icon_percentage_max = parseInt(elmt_max_price.value);
        if(icon_percentage_max > 100 && icon_percentage_max < 900) {
            icon_percentage_max = icon_percentage_max + 50;
            icon_percentage_max = icon_percentage_max/10;
        }
        console.log("icon_percentage_max: "+icon_percentage_max);
        document.getElementById("icon_max_range").style.width = icon_percentage_max+"%";

        let icon_percentage_min = parseInt(elmt_min_price.value);
        if(icon_percentage_min > 100 && icon_percentage_min < 900) {
            icon_percentage_min = icon_percentage_min + 50;
            icon_percentage_min = icon_percentage_min/10;
        }
        console.log("icon_percentage_min: "+icon_percentage_min);
        document.getElementById("icon_min_range").style.width = (100-icon_percentage_min)+"%";

        price_progress.style.right = (100-icon_percentage_max)+"%"; */
        
        document.getElementById('breadcrumb_1').innerHTML = "Productos";
        
        if(search_params){
            url = url + "producto/buscar/" + search_params.replace('?', '');
            
            elmt_min_price.value = params_object.get("min_price");
            elmt_max_price.value = params_object.get("max_price");
        }else{
            url = url + "productos";
        }

        let mostrar_productos = (data) => {
            data.forEach( producto => {
                let {id_producto, prd_nombre, prd_precio, prd_imagen_path, prd_stock} = producto;

                contenedor_prod.insertAdjacentHTML("beforeend", `
                    <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                        <div class="item-inner">
                            <div class="prd">
                                <div class="item-img clearfix">
                                    <a class="product-image have-additional" title="${prd_nombre}" href="/detalle-producto?${id_producto}">
                                        <span class="img-main">
                                            <img src="${prd_imagen_path}" alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a class="nombre2lineas" href="/detalle-producto?${id_producto}" title="${prd_nombre}">
                                                    ${prd_nombre}
                                            </a>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <span class="price">
                                                        <span class="price1">S/ ${parseFloat(prd_precio).toFixed(2)}</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-bot action123 btnAnadirCarrito">
                                    <div class="wrap-addtocart">
                                        <button class="btn-cart" onclick="addProduct(${id_producto}, '${prd_nombre}', ${prd_precio}, '${prd_imagen_path}', 1, ${prd_stock})"
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
        }

        let cargar_api = () => {
            //api productos, get
            fetch(url, {
                method: 'GET'
            })
                .then(res => res.json())
                .then(data => {
                    console.log(data);

                    for(let i=0; i<numProd.length; i++){
                        numProd.item(i).insertAdjacentHTML("beforeend", data.length + " productos (s)");
                    }

                    mostrar_productos(data);
                })
                .catch(error => console.log(error));
        }

        cargar_api();

        //updating styles for selected filters
        let update_filter_style = () => {
            slctd_categorias = params_object.getAll('c');
            slctd_marcas = params_object.getAll('m');
            slctd_categorias.forEach(c => {
                console.log("c: "+c);
                let elmt_c = document.getElementById("c"+c);
                elmt_c.parentElement.classList.add("filter_selected");
                elmt_c.classList.add("filter_selected_text");
            });
            slctd_marcas.forEach(m => {
                console.log("m: "+m);
                let elmt_m = document.getElementById("m"+m);
                elmt_m.parentElement.classList.add("filter_selected");
                elmt_m.classList.add("filter_selected_text");
            });
        }

        //api count_productos, get
        let urlFiltro = urlDominio + 'api/count_productos';
        fetch(urlFiltro, {
            method: 'GET'
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                data.categorias.forEach( categoria => {
                    listaCategorias.insertAdjacentHTML("beforeend", `
                        <li>
                            <a id="c${categoria.id_categoria}" href="#" onclick="search_products(event, 'c', ${categoria.id_categoria}); return false">
                                ${categoria.ctg_nombre}
                                <span class="count">(${categoria.cantidad_productos})</span>
                            </a>
                        </li>
                    `)
                });
                data.marcas.forEach( marca => {
                    listaMarcas.insertAdjacentHTML("beforeend", `
                        <li>
                            <a id="m${marca.id_marca}" class="swatch-link" href="#" onclick="search_products(event, 'm', ${marca.id_marca}); return false">
                                ${marca.mrc_nombre}
                                <span class="count">(${marca.cantidad_productos})</span>
                            </a>
                        </li>
                    `)
                });

                if(search_params){
                    update_filter_style();
                }
            })
            .catch(error => console.log(error));

        //filtro por precio
        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 100;
        priceInput.forEach(input =>{
            input.addEventListener("input", e =>{
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
                    if(e.target.className === "input-min"){
                        rangeInput[0].value = minPrice;
                        range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                    }else{
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });
        rangeInput.forEach(input =>{
            input.addEventListener("input", e =>{
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);
                if((maxVal - minVal) < priceGap){
                    if(e.target.className === "range-min"){
                        rangeInput[0].value = maxVal - priceGap
                    }else{
                        rangeInput[1].value = minVal + priceGap;
                    }
                }else{
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });

        // products filter
        let search_products = (e, tipo, valor) => {
            e = e || window.event;
            let target = e.target || e.srcElement;
            if(target.classList.contains("filter_selected_text")){
                search_params = search_params.replace((tipo+'='+valor+'&'),'');
                target.parentElement.classList.remove("filter_selected");
                target.classList.remove("filter_selected_text");
            }else{
                search_params = search_params + tipo + "=" + valor + "&";
                target.parentElement.classList.add("filter_selected");
                target.classList.add("filter_selected_text");
            }
            console.log("string obtained: "+ search_params);
        }

        let filtrar_productos = () => {
            let min_price = elmt_min_price.value;
            let max_price = elmt_max_price.value;
            const params_obj = new URLSearchParams(search_params);
            params_obj.set('min_price', min_price);
            params_obj.set('max_price', max_price);
            console.log("final string: "+ params_obj);
            window.location.href = "/productos?" + params_obj.toString() + "&";
        }
    </script>
@stop
