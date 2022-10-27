@extends('layouts/vista_padre')

@section('title', 'Carrito de compra')

@section('css')
    <link rel="stylesheet" href="/css/carrito.css">
@stop

@section('contenido_principal')
<div id="sns_content" class="wrap layout-m">
    <div class="container">
        <div class="row">

            @if( isset($_COOKIE['data_carrito']) !== false && $_COOKIE['data_carrito'] !== '[]' )
            <div class="shoppingcart">
                <div class="sptitle title_carr col-md-12">
                    <h3 id="title_carr">CARRITO DE COMPRAS</h3>
                    <h4  id="btnSupPago" class="style btnProcPagar" onclick="redirect_pago()">PROCEDER A PAGAR</h4>
                </div>
                <div class="content col-md-12">
                    <ul class="title clearfix">
                        <li class="text1"><a href="#">NOMBRE DEL PRODUCTO</a></li>
                        <li class="text2"><a href="#">PRECIO UNT.</a></li>
                        <li class="text2"><a href="#">CNTD.</a></li>
                        <li class="text2"><a href="#">SUB TOTAL</a></li>
                    </ul>

                    <div id="tabla_prod_carrito">
                        <!-- Aquí se insertan los productos del carrito mediante javascript -->
                    </div>

                    <!-- <ul class="nav-mid clearfix">
                        <li class="image"><a href="#"><img src="images/placehoder.jpg" alt=""></a></li>
                        <li class="item-title"><a href="#">Modular Modern</a></li>
                        <li class="icon1"><i class="btn-edit fa fa-edit"></i></li>
                        <li class="price1">$659.00</li>
                        <li class="number"><a href="#">1</a></li>
                        <li class="price2">$659.00</li>
                        <li class="icon2"><i class="btn-remove fa fa-xmark"></i></li>
                    </ul> -->
                    <ul class="nav-bot clearfix">
                        <li class="continue"><a href="/productos">Seguir comprando</a></li>
                        <li class="clear"><a href="#" onclick="confirm_vac_carrt();">Limpiar carrito</a></li>
                        <!-- <li class="update"><a href="#">update shopping cart</a></li> -->
                    </ul>
                    <div class="row">
                        <form class="col-md-4" style="visibility: hidden;">
                            <div class="form-bd">
                                <h3>ESTIMACIÓN DE ENVÍO E IMPUESTO</h3>
                                <p class="text1">Enter your destination to get a shipping estimate.</p>
                                <p class="country">
                                    <span class="color1">*</span>Country
                                </p>
                                <select id="country" class="validate-select" title="Country" name="country_id">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                </select>

                                <p>State/Province</p>

                                <select id="region_id" class="required-entry validate-select" title="State/Province" name="region_id">
                                    <option value="">Please select region, state or province</option>
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                </select>
                                <p class="zip">Zip/Postal Code</p>
                                <input class="style23" type="text" value="" size="30" />
                                <span class="style-bd">Get a quote</span>
                            </div>
                        </form>
                        <form class="col-md-4">
                            <div class="form-bd">
                                <h3>CÓDIGOS DE DESCUENTO</h3>
                                <p class="formbd2">Ingrese su código de cupón si tiene uno.</p>
                                <input class="styleip" type="text" value="" size="30" />
                                <span class="style-bd">Aplicar cupón</span>
                            </div>
                        </form>
                        <form class="form-right col-md-4">
                            <div class="form-bd cuadro_totales">
                                <p class="subtotal">
                                    <span class="text1">Precio regular:</span>
                                    <span id="txt_prc_regular" class="text2">S/ 0.00</span>
                                </p>
                                <h3 id="h3_prc_total">
                                    <span id="txt_igv">(incluye impuestos)</span>
                                    <span class="text3">TOTAL:</span>
                                    <span id="txt_prc_total" class="text4">S/ 0.00</span>
                                </h3>
                                <span id="btnInfPago" class="style-bd" onclick="redirect_pago()">Proceder a pagar</span>
                                <!-- <p class="checkout">Checkout with Multiple Addresses</p> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="shoppingcart">
                <div class="sptitle title_carr col-md-12">
                    <h3 id="title_carr">CARRITO DE COMPRAS</h3>
                    <span class="message_empty">Su carrito está vacio</span>
                </div>
                <ul class="nav-bot clearfix">
                    <li class="continue"><a href="/productos">Ir a comprar</a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        document.getElementById('bd').classList.add('sns-shopping-cart');
        document.getElementById('breadcrumb_1').innerHTML = "Carrito de compras";
        document.getElementById("carrito_dropdown_div").style.display = "none";

        let lst_crrt = document.getElementById('tabla_prod_carrito');
        let btnRmv = document.getElementsByClassName("btn-remove");
        
        let cargar_tbl_prod = () => {
            lst_crrt.innerHTML = carrito.map( (p) => {
                return `
                    <ul class="nav-mid clearfix">
                        <li class="image"><a href="/detalle-producto?${p.id}"><img class="img_sml_crrt" src="${p.img}" alt="${p.nmbr}"></a></li>
                        <li class="item-title nombre1linea"><a href="/detalle-producto?${p.id}">${p.nmbr}</a></li>
                        <li class="icon1"><i class="btn-edit fa fa-square-plus"></i></li>
                        <li class="price1">S/ ${p.precio.toFixed(2)}</li>
                        <li class="number"><a>${p.cntd}</a></li>
                        <li class="price2">S/ ${(p.precio*p.cntd).toFixed(2)}</li>
                        <li class="icon2"><i class="btn-remove fa fa-xmark" onclick="quitarProd(${p.id})"></i></li>
                    </ul>
                `;
            }).join("");

            document.getElementById('txt_prc_regular').innerHTML = "S/ " + prc_regular;
            document.getElementById('txt_prc_total').innerHTML = "S/ " + prc_total;
        }

        if ( carrito.length !== 0 ) {
            cargar_tbl_prod();
        }

        const redirect_pago = () => {
            window.location.href = "/pago";
        };

        let confirm_vac_carrt = () => {
            Swal.fire({
                title: 'Confirma vaciar todo el carrito?',
                showCancelButton: true,
                showConfirmButton: true,
                icon: 'warning',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Confirmar',
            }).then( (result) => {
                if (result.value == true) {
                    limp_carrito();
                    window.location.href = "/productos";
                }else{
                    console.log('cancelado');
                }
            })
        };
        
        let quitarProd = (id) => {
            remove(id);

            cargar_tbl_prod();

            if( lst_crrt.innerHTML === ''){
                window.location.href = "/productos";
            }
        }

        //descuentos
        if( prc_desc1 ){
            document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
            `<p class="subtotal prc-descuentos">
                <span class="text1">Precio online:</span>
                <span id="txt_prc_desc1" class="text2">S/ ${prc_desc1}</span>
                <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 1 )).cantidad}%</span>
            </p>`);

            document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
        }
        if( prc_desc2 ){
            document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
            `<p class="subtotal prc-descuentos">
                <span class="text1">Precio por tarjeta:</span>
                <span id="txt_prc_desc2" class="text2">S/ ${prc_desc2}</span>
                <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 2 )).cantidad}%</span>
            </p>`);
            
            document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
        }

    </script>
@stop
