@extends('layouts/vista_padre')

@section('title', 'Detalle producto')

@section('css')
    <link rel="stylesheet" href="/css/detalle_producto.css">
@stop

@section('contenido_principal')

<div id="sns_content" class="wrap layout-m">
    <div class="container">
        <div class="row">
            <div id="sns_main" class="col-md-12 col-main">
                <div id="sns_mainmidle">
                    <div class="product-view sns-product-detail">
                        <div class="product-essential clearfix">
                            <div class="row row-img">

                                <div class="product-img-box col-md-4 col-sm-5">
                                    <div class="detail-img">
                                        <img id="imagen_principal" src="" alt="">
                                    </div>
                                </div>
                                <div id="product_shop" class="product-shop col-md-8 col-sm-7">
                                    <div class="item-inner product_list_style">
                                        <div class="item-info">
                                            <div class="item-title">
                                                <span id="nombre_producto" title=""></span>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box">
                                                            <span class="regular-price">
                                                                <span id="precio_producto" class="price"></span>
                                                            </span>
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <p class="style1">Disponibilidad: En stock</p>
                                            </div>
                                            <div class="desc std">
                                                <h5>DESCRIPCIÓN</h5>
                                                <p id="desc_producto"></p>
                                            </div>
                                            <div class="availability">
                                                <p id="fecha_venc" class="style1"></p>
                                            </div>
                                            <div class="actions">
                                                <label class="gfont" for="qty">Cantidad : </label>
                                                <div class="qty-container">
                                                    <button class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button">
                                                        <i class="fa fa-minus fa-sm"></i>
                                                    </button>
                                                    <input id="qty" class="input-text qty" type="text" title="Qty" value="1" name="qty">
                                                    <button class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button">
                                                        <i class="fa fa-plus fa-sm"></i>
                                                    </button>
                                                </div>

                                                <button id="btnAddProd" class="btn-cart" title="Añadir al carrito" data-id="qv_item_8">
                                                    Añadir al carrito
                                                </button>
                                            </div>
                                            <div class="addthis_native_toolbox"></div>

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

<div id="toastContainer" class="toast-container position-fixed bottom-0 end-0 p-3">
    <!-- Se insertan alertas de productos agregados mediante la funcion alerta_producto_agregado() -->
</div>

@stop

@section('js')
    <script>
        let queryString = location.search.substring(1);
        let array = queryString.split("|");
        const idProd = array[0];
        let cant = document.getElementById("qty");

        const breadcrumb = document.getElementById('breadcrumb_1');
        breadcrumb.innerHTML = "Detalle producto";

        //api producto, get
        let urlDetail = urlDominio + 'api/producto/' + idProd;
        fetch(urlDetail, {
            method: 'GET'
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                data_prod = data;
                $("#imagen_principal").attr('src', data.prd_imagen_path);
                $("#nombre_producto").text(data.prd_nombre);
                $("#precio_producto").text('S/ '+data.prd_precio);
                $("#fecha_venc").text('Fecha de vencimiento: '+data.prd_fecha_vencimiento);
                $("#desc_producto").text(data.prd_descripcion);
            })
            .catch(error => console.log(error));
        
        const btnAdd = document.getElementById('btnAddProd');
        btnAdd.onclick = () => {
            console.log(cant.value);
            addProduct(data_prod.id_producto, data_prod.prd_nombre, data_prod.prd_precio, data_prod.prd_imagen_path, cant.value);
        };

        //api count_vistas, put
        let urlCount = urlDominio + 'api/producto_cont/' + idProd;
        fetch(urlCount, {
            method: 'PUT'
        })
            .then(res => res.json())
            .then(data => { console.log(data); })
            .catch(error => console.log(error));
    </script>
@stop
