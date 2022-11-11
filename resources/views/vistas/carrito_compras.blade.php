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
                    <div class="row">
                        <div class="tableContainer col-md-8">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col" class="headPrd">Producto</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody id="tabla_prod_carrito">
                                    <!-- Aquí se insertan los productos -->
                                </tbody>
                            </table>
        
                            <ul class="nav-bot clearfix">
                                <li class="continue"><a href="/productos" class="btnSeguirComprando">Seguir comprando</a></li>
                                <li class="clear"><a href="#" onclick="confirm_vac_carrt();" class="btnLimpCarrito">Limpiar carrito</a></li>
                                <!-- <li class="update"><a href="#">update shopping cart</a></li> -->
                            </ul>
                        </div>

                        <form class="form-right col-md-4">
                            <div class="form-bd cuadro_totales">
                                <p class="tltResumenFinal">RESUMEN FINAL</p>
                                <div class="container-4 prcDesc">
                                    <div class="row rowPrcRegular">
                                        <div class="col prcReg">Precio regular:</div>
                                        <div class="col-3" id="txt_prc_regular">S/ 0.00</div>
                                        <div class="col-2"></div>
                                    </div>

                                    <!-- Aquí se insertan los descuentos aplicados -->

                                    <div class="row prcTotalRow" id="h3_prc_total">
                                        <div class="col">
                                            <span class="txt_igv">(incluye impuestos)</span>
                                            <span class="textTotal">TOTAL:</span>
                                        </div>
                                        <div class="col-3 prcMontoTotal" id="txt_prc_total">S/ 0.00</div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                                <span id="btnInfPago" class="style-bd" onclick="redirect_pago()">Proceder a pagar</span>
                                <!-- <p class="checkout">Checkout with Multiple Addresses</p> -->
                            </div>
                        </form>
                    </div>

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
                        <form id="formApplyCoupon" class="col-md-4" style="visibility: hidden;">
                            <div class="form-bd">
                                <h3>CÓDIGOS DE DESCUENTO</h3>
                                <p class="formbd2">Ingrese su código de cupón si tiene uno.</p>
                                <input id="codigoCupon" class="styleip" type="text" value="" size="10"/>
                                <span id="btnAplicarCupon" class="style-bd">Aplicar cupón</span>
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
                    <li class="continue"><a class="btnIrAComprar" href="/productos">Ir a comprar</a></li>
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
        // let btnRmv = document.getElementsByClassName("btn-remove"); no se usa
        
        let cargar_tbl_prod = () => {
            lst_crrt.innerHTML = carrito.map( (p) => {
                return `
                    <tr>
                        <th scope="row">
                            <button type="button" class="btnDltPrd btn-sm" onclick="quitarProd(${p.id})">
                                <i class="fa fa-xmark fa-1x"></i>
                            </button>
                        </th>
                        <td>
                            <a href="/detalle-producto?${p.id}">
                                <img class="imgCartProd" src="${p.img}" alt="${p.nmbr}">
                            </a>
                        </td>
                        <td class="prdItemName">
                            <a href="/detalle-producto?${p.id}">${p.nmbr}</a>
                        </td>
                        <td>S/ ${p.precio.toFixed(2)}</td>
                        <td>
                            <button id="btn_decrs_${p.id}" class="btn" type="button" onclick="decr_cant(event, ${p.id}, ${p.precio.toFixed(2)})">
                                <i class="fa fa-minus fa-sm"></i>
                            </button>
                            <a id="txt_cntd_${p.id}">${p.cntd}</a>
                            <button id="btn_incrs_${p.id}" class="btn" type="button" onclick="incr_cant(event, ${p.id}, ${p.precio.toFixed(2)})">
                                <i class="fa fa-plus fa-sm"></i>
                            </button>
                        </td>
                        <td id="multiplied_prc_${p.id}">S/ ${(p.precio*p.cntd).toFixed(2)}</td>
                    </tr>
                `;
            }).join("");

            document.getElementById('txt_prc_regular').innerHTML = "S/" + prc_regular;
            document.getElementById('txt_prc_total').innerHTML = "S/" + prc_total;
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

        // disscounts
        if( prc_desc1 && prc_desc1 != 0 ){
            console.log("prc_desc1: "+prc_desc1);
            document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
            `<div class="row rowDesc">
                <div class="col prcDescApl">Precio online:</div>
                <div class="col-3" id="txt_prc_desc1">S/${prc_desc1}</div>
                <div class="col-2 dscPerctng">
                    <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 1 )).cantidad}%</span>
                </div>
            </div>`);

            document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
        }
        if( prc_desc2 ){
            document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
            `<p class="subtotal prc-descuentos">
                <span class="text1">Primera compra:</span>
                <span id="txt_prc_desc2" class="text2">S/ ${prc_desc2}</span>
                <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 2 )).cantidad}%</span>
            </p>`);
            
            document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
        }

        let update_total_price = () => {
            document.getElementById('txt_prc_regular').innerHTML = "S/" + prc_regular;
            if( prc_desc1 ){
                document.getElementById('txt_prc_desc1').innerHTML = "S/" + prc_desc1;
            }
            if( prc_desc2 ){
                document.getElementById('txt_prc_desc2').innerHTML = "S/" + prc_desc2;
            }
            document.getElementById('txt_prc_total').innerHTML = "S/" + prc_total;
        }

        // increase decrease product amount
        let calcular_precio_x_prd = (id, prc, cntd) => {
            // let unt_prc = document.getElementById("unt_prc_"+id).
            document.getElementById("multiplied_prc_"+id).innerHTML = "S/ " + (prc * cntd).toFixed(2);
        }

        let incr_cant = (e, id, prc) => {
            e = e || window.event;
            let target = e.target || e.srcElement;
            let elmt_cntd = document.getElementById("txt_cntd_"+id);
            let cntd = parseInt(elmt_cntd.innerHTML);
            
            if(cntd == 1){
                document.getElementById("btn_decrs_"+id).disabled = false;
            }

            cntd = cntd + 1;
            elmt_cntd.innerHTML = cntd;

            calcular_precio_x_prd(id, prc, cntd);
            increment(id);
            update_total_price();
        }

        let decr_cant = (e, id, prc) => {
            e = e || window.event;
            let target = e.target || e.srcElement;
            let elmt_cntd = document.getElementById("txt_cntd_"+id);
            let cntd = parseInt(elmt_cntd.innerHTML);
            
            if(cntd >= 2){
                cntd = cntd - 1;
                elmt_cntd.innerHTML = cntd;
            }

            if(cntd <= 1){
                document.getElementById("btn_decrs_"+id).disabled = true;
            }

            calcular_precio_x_prd(id, prc, cntd);
            decrement(id);
            update_total_price();
        }

        let aplicarDescuentoCupon = (data) => {
            prc_total = (prc_total - data.dsc_cantidad).toFixed(2);
            console.log("precio con cupon: "+prc_total);
            document.getElementById('txt_prc_total').innerHTML = "S/" + prc_total;
            set_total_order(prc_total);
        };

        let consultCoupon = () => {
            const codigoCupon = document.getElementById("codigoCupon").value;
            console.log(codigoCupon);

            //api descuento, get by codigo
            let url = urlDominio + 'api/descuento/buscar/' + codigoCupon;
            fetch(url, {
                method: 'GET'
            })
                .then(res => res.json())
                .then(success => {
                    console.log(success);
                    aplicarDescuentoCupon(success.data);
                })
                .catch(error => console.log(error));
        }
        const formCoupon = document.getElementById('formApplyCoupon');
        if(formCoupon){
            formCoupon.addEventListener("submit", (event) => {
                event.preventDefault();
                consultCoupon();
            });
        }
        const btnCuponElmnt = document.getElementById('btnAplicarCupon');
        if(btnCuponElmnt){
            btnCuponElmnt.addEventListener("click", consultCoupon);
        }

    </script>
@stop
