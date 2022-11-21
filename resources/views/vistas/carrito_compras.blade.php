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
                        <div class="col-md-8">
                            <div class="tableContainer">
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
            
                                <ul class="nav-bot clearfix btnsUnderTable">
                                    <li class="continue"><a href="/productos" class="btnSeguirComprando">Seguir comprando</a></li>
                                    <li class="clear"><a href="#" onclick="confirm_vac_carrt();" class="btnLimpCarrito">Limpiar carrito</a></li>
                                    <!-- <li class="update"><a href="#">update shopping cart</a></li> -->
                                </ul>
                            </div>

                            <form id="formApplyCoupon">
                                <div class="form-bd formCouponDiv">
                                    <h3>CÓDIGOS DE DESCUENTO</h3>
                                    <p class="formbd2">Ingrese su código de cupón si tiene uno.</p>
                                    <input id="codigoCupon" class="styleip" type="text" value="" size="10"/>
                                    <span id="btnAplicarCupon" class="style-bd">Aplicar cupón</span>
                                </div>
                            </form>
                            
                            <form>
                                <div class="form-bd deliveryContainer">
                                    <h3>LUGAR DE ENVÍO</h3>
                                    <p class="text1">Seleccione su lugar de envío</p>
                                    <input id="nombreUbicacion" class="style23 inputNombreLugar" type="text" placeholder="Seleccione en el mapa" size="100" readonly/>
                                    <input id="coordenadas_envio" type="hidden"/>
                                    <div id="map">
                                        <!-- Aquí se carga el mapa de google -->
                                    </div>
                                    <span class="style-bd btnGuardarUbc">Guardar</span>
                                </div>
                            </form>
                        </div>

                        <form class="form-right col-md-4">
                            <div class="form-bd cuadro_totales">
                                <p class="tltResumenFinal">RESUMEN FINAL</p>
                                <div class="container-4 prcDesc">
                                    <div class="row rowPrcRegular">
                                        <div class="col prcReg">Precio regular:</div>
                                        <div class="col-4" id="txt_prc_regular">S/ 0.00</div>
                                        <div class="col-3"></div>
                                    </div>

                                    <!-- Aquí se insertan los descuentos aplicados -->

                                    <div class="row prcTotalRow" id="h3_prc_total">
                                        <div class="col">
                                            <span class="txt_igv">(incluye impuestos)</span>
                                            <span class="textTotal">TOTAL:</span>
                                        </div>
                                        <div class="col-4 prcMontoTotal" id="txt_prc_total">S/ 0.00</div>
                                        <div class="col-3"></div>
                                    </div>
                                </div>
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
                    <li class="continue"><a class="btnIrAComprar" href="/productos">Ir a comprar</a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@stop

@section('js')
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key={{config('services.api_keys.gl_api_key')}}&callback=initMap"></script> -->
    <script>
        // API Google Maps
        let map;
        let marker;
        let geocoder;
        let responseDiv;
        let response;

        const nombreUbi = document.getElementById('nombreUbicacion');
        const coordUbi = document.getElementById('coordenadas_envio');

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -12.054252, lng: -75.2514495 },
                zoom: 13,
                mapTypeControl: false,
            });

            geocoder = new google.maps.Geocoder();

            const inputText = document.createElement("input");

            inputText.type = "text";
            inputText.placeholder = "Ingrese su dirección de envio";

            const submitButton = document.createElement("input");

            submitButton.type = "button";
            submitButton.value = "Ubicar";
            submitButton.classList.add("button", "button-primary");

            const clearButton = document.createElement("input");

            clearButton.type = "button";
            clearButton.value = "Limpiar";
            clearButton.classList.add("button", "button-secondary");

            response = document.createElement("pre");
            response.id = "response";
            response.innerText = "";
            
            responseDiv = document.createElement("div");
            responseDiv.id = "response-container";
            responseDiv.appendChild(response);

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);
            marker = new google.maps.Marker({
                map,
            });
            map.addListener("click", (e) => {
                geocode({ location: e.latLng });
            });
            submitButton.addEventListener("click", () =>
                geocode({ address: inputText.value })
            );
            clearButton.addEventListener("click", () => {
                clear();
                //también borra el valor de los input ubicacion al hacer click en Limpiar------------------
                nombreUbi.value = null;
                coordUbi.value = null;
            });
            clear();
        }

        function clear() {
            marker.setMap(null);
            responseDiv.style.display = "none";
        }

        function geocode(request) {
            clear();
            geocoder
                .geocode(request)
                .then((result) => {
                    const { results } = result;

                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    marker.setMap(map);
                    responseDiv.style.display = "block";
                    response.innerText = JSON.stringify(result, null, 2);

                    //ingresa el resultado al input ubicacion
                    nombreUbi.value = results[0].formatted_address;
                    coordUbi.value = results[0].place_id;

                    return results;
                })
                .catch((e) => {
                    alert("Geocode was not successful for the following reason: " + e);
                });
        }

        /* window.initMap = initMap; */
        // End API Google Maps -------------------------------------------------------

        document.getElementById('bd').classList.add('sns-shopping-cart');
        document.getElementById('breadcrumb_1').innerHTML = "Carrito de compras";
        document.getElementById("carrito_dropdown_div").style.display = "none";
        const formCoupon = document.getElementById('formApplyCoupon');
        const btnCuponElmnt = document.getElementById('btnAplicarCupon');

        let lst_crrt = document.getElementById('tabla_prod_carrito');
        let prc_desc1, prc_desc2, prc_desc3, prc_total_before_coupon;
        let is1stBuy = false;
        let cnt_dsc_ttl = 0;
        
        const set_cookie_total_disscount = (qTotalDissc) => {
            document.cookie = "total_descuento=" + qTotalDissc;
        };

        set_cookie_total_disscount(cnt_dsc_ttl);
        
        let cargar_tbl_prod = () => {
            lst_crrt.innerHTML = carrito.map( (p) => {
                let disabledIfOne = '';
                if(p.cntd == 1){
                    disabledIfOne = 'disabled'
                };
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
                        <td>S/ ${parseFloat(p.precio).toFixed(2)}</td>
                        <td>
                            <button id="btn_decrs_${p.id}" class="btn btnIncrAmnt" type="button" onclick="decr_cant(event, ${p.id}, ${parseFloat(p.precio).toFixed(2)})" ${disabledIfOne}>
                                <i class="fa fa-minus fa-sm"></i>
                            </button>
                            <a id="txt_cntd_${p.id}">${p.cntd}</a>
                            <button id="btn_incrs_${p.id}" class="btn btnDcrsAmnt" type="button" onclick="incr_cant(event, ${p.id}, ${parseFloat(p.precio).toFixed(2)})">
                                <i class="fa fa-plus fa-sm"></i>
                            </button>
                        </td>
                        <td id="multiplied_prc_${p.id}">S/ ${(p.precio*p.cntd).toFixed(2)}</td>
                    </tr>
                `;
            }).join("");

            document.getElementById('txt_prc_regular').innerHTML = "S/" + prc_regular.toFixed(2);
            document.getElementById('txt_prc_total').innerHTML = "S/" + prc_total.toFixed(2);
        }

        if ( carrito.length !== 0 ) {
            cargar_tbl_prod();
        }

        let showing_disscount_elements = () => {
            // disscounts
            if( prc_desc1 && prc_desc1 != 0 ){
                document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
                `<div class="row rowDesc">
                    <div class="col prcDescApl">Precio online:</div>
                    <div class="col-4 prcDescMonto" id="txt_prc_desc1">S/${prc_desc1}</div>
                    <div class="col-3 dscPerctng">
                        <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 1 )).cantidad}%</span>
                    </div>
                </div>`);

                document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
            };
            if( prc_desc2 ){
                document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
                `<div class="row rowDesc">
                    <div class="col prcDescApl">Primera compra:</div>
                    <div class="col-4 prcDescMonto" id="txt_prc_desc2">S/${prc_desc2}</div>
                    <div class="col-3 dscPerctng">
                        <span class="badge rounded-pill text-bg-info">-${(descuentos.find( d => d.id === 2 )).cantidad}%</span>
                    </div>
                </div>`);
                
                document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
            };
        }

        let calculo_precios_descuentos = () => {
            descuentos.forEach(d => {
                if(d.id === 1) {
                    prc_desc1 = prc_total * (1-(d.cantidad/100));
                    prc_desc1 = parseFloat(prc_desc1.toFixed(2));
                    prc_total = prc_desc1;

                    cnt_dsc_ttl += d.cantidad;
                }
                if(d.id === 2) {
                    prc_desc2 = prc_total * (1-(d.cantidad/100));
                    prc_desc2 = parseFloat(prc_desc2.toFixed(2));
                    prc_total = prc_desc2;

                    cnt_dsc_ttl += d.cantidad;
                }
            });

            set_lclStrg_total_order(prc_total);
            
            /* const tl_dsc = JSON.parse(localStorage.getItem("data_descuentos"));
            const cnt_dsc_ttl = tl_dsc.map( d => d.cantidad ).reduce( (d1, d2) => d1 + d2, 0); */
            set_cookie_total_disscount(cnt_dsc_ttl);
        };

        let check_if_firstBuy = () => {
            //api check1stbuy, check by user
            let url = urlDominio + 'api/descuento/check1stbuy/' + {{\Auth::user()->id}};
            fetch(url, {
                method: 'GET'
            })
                .then(res => res.json())
                .then(response => {
                    if(response == 1){
                        is1stBuy = true;
                    }else{
                        is1stBuy = false;
                    }
                    console.log("is1stBuy: "+is1stBuy);
                })
                .catch(error => console.log(error));
        };

        let set_lclStrg_descuentos = (response) => {
            descuentos = [];

            console.log("is1stBuy final: "+is1stBuy);
            if(is1stBuy){
                console.log("primera compra");
                response.forEach(d => {
                    if( d.id_tipo_descuento == 2 ) {
                        descuentos.push({
                            "id": d.id_descuento,
                            "nombre": d.dsc_nombre,
                            "cantidad": d.dsc_cantidad,
                            "tipo": d.id_tipo_descuento
                        });
                    }
                })
            }else{
                console.log("no es su primera compra");
                // id_descuento por primera compra = 2 segun DB
                response.forEach(d => {
                    if( d.id_tipo_descuento == 2 && d.id_descuento != 2) {
                        descuentos.push({
                            "id": d.id_descuento,
                            "nombre": d.dsc_nombre,
                            "cantidad": d.dsc_cantidad,
                            "tipo": d.id_tipo_descuento
                        });
                    }
                })
            };

            localStorage.setItem("data_descuentos", JSON.stringify(descuentos));

            calculo_precios_descuentos();
            showing_disscount_elements();
            update_total_prices();
        };

        let cargar_descuentos = () => {
            let url = urlDominio + 'api/descuentos';

            //llamando al api descuentos, index
            fetch( url, {
                method: 'GET',
                headers: {
                    "Content-Type": "application/json",
                }
            } )
                .then( response => response.json() )
                .then( response => {
                    console.log(response);
                    if( response.length !== 0 ){
                        set_lclStrg_descuentos(response);
                    }
                } )
                .catch( error => console.log(error) );
            
            check_if_firstBuy();
        };

        if(carrito.length !== 0){
            //aplicando descuentos si hay productos
            cargar_descuentos();
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
        };

        let update_total_prices = () => {
            document.getElementById('txt_prc_regular').innerHTML = "S/" + prc_regular.toFixed(2);
            if( prc_desc1 ){
                document.getElementById('txt_prc_desc1').innerHTML = "S/" + prc_desc1.toFixed(2);
            }
            if( prc_desc2 ){
                document.getElementById('txt_prc_desc2').innerHTML = "S/" + prc_desc2.toFixed(2);
            }
            if( prc_desc3 ){
                document.getElementById('txt_prc_descCupon').innerHTML = "S/" + prc_desc3.toFixed(2);
            }
            document.getElementById('txt_prc_total').innerHTML = "S/" + prc_total.toFixed(2);
        };

        // increase decrease product amount
        let calcular_precio_x_prd = (id, prc, cntd) => {
            // let unt_prc = document.getElementById("unt_prc_"+id).
            document.getElementById("multiplied_prc_"+id).innerHTML = "S/ " + (prc * cntd).toFixed(2);
        };

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
            calculo_precios_descuentos();
            update_total_prices();
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

            if(cntd == 1){
                document.getElementById("btn_decrs_"+id).disabled = true;
            }

            calcular_precio_x_prd(id, prc, cntd);
            decrement(id);
            calculo_precios_descuentos();
            update_total_prices();
        }

        const displayCouponDisccount = (name, newPrice, quantity) => {
            document.getElementById("h3_prc_total").insertAdjacentHTML('beforebegin', 
            `<div class="row rowDesc">
                <div id="textCouponCode" class="col prcDescApl">Cupón "${name}":</div>
                <div id="txt_prc_descCupon" class="col-4 prcDescMonto">S/${newPrice}</div>
                <div class="col-3 dscPerctng">
                    <span id="couponDisscAmount" class="badge rounded-pill text-bg-info">-${quantity}%</span>
                </div>
            </div>`);

            document.getElementById("txt_prc_regular").style.textDecorationLine  = "line-through";
        };

        const updateCouponDisscountElement = (name, newPrice, quantity) => {
            document.getElementById("textCouponCode").innerHTML = 'Cupón "'+name+'":';
            document.getElementById('txt_prc_descCupon').innerHTML = "S/" + newPrice;
            document.getElementById("couponDisscAmount").innerHTML = '-'+quantity+'%';
        };

        let aplicarDescuentoCupon = (data) => {
            if( dscFound = descuentos.find( d => d.tipo === data.id_tipo_descuento ) ) {
                prc_desc3 = prc_total_before_coupon * (1-(data.dsc_cantidad/100));
                prc_desc3 = parseFloat(prc_desc3.toFixed(2));
                prc_total = prc_desc3;

                cnt_dsc_ttl = (cnt_dsc_ttl - dscFound.cantidad) + data.dsc_cantidad;
                
                dscFound.id = data.id_descuento;
                dscFound.nombre = data.dsc_nombre;
                dscFound.cantidad = data.dsc_cantidad;

                updateCouponDisscountElement(data.dsc_codigo, prc_desc3, data.dsc_cantidad);
            }else{
                prc_total_before_coupon = prc_total;
                
                descuentos.push({
                    "id": data.id_descuento,
                    "nombre": data.dsc_nombre,
                    "cantidad": data.dsc_cantidad,
                    "tipo": data.id_tipo_descuento,
                });
                console.log("prc_total antes:"+prc_total);
                prc_desc3 = prc_total * (1-(data.dsc_cantidad/100));
                prc_desc3 = parseFloat(prc_desc3.toFixed(2));
                prc_total = prc_desc3;
                console.log("prc_total despues:"+prc_total);
                cnt_dsc_ttl += data.dsc_cantidad;
                
                displayCouponDisccount(data.dsc_codigo, prc_desc3, data.dsc_cantidad);
            };

            localStorage.setItem("data_descuentos", JSON.stringify(descuentos));

            update_total_prices();
            set_lclStrg_total_order(prc_total);
            set_cookie_total_disscount(cnt_dsc_ttl);
        };

        let consultCoupon = () => {
            const codigoCupon = document.getElementById("codigoCupon");

            //api descuento, get by codigo
            let url = urlDominio + 'api/descuento/buscar/' + codigoCupon.value;
            fetch(url, {
                method: 'GET'
            })
                .then(res => {
                    if(res.status == 400){
                        Swal.fire({
                            title: 'No puede usar este cupón',
                            icon: 'warning',
                        }).then( (result) => {
                            codigoCupon.value = "";
                        })
                    }else if(res.status == 404){
                        Swal.fire({
                            title: 'Código de cupón inválido',
                            icon: 'error',
                        }).then( (result) => {
                            codigoCupon.value = "";
                        })
                    }else{
                        return res.json();
                    }
                })
                .then(success => {
                    Swal.fire(
                        'Cupón aplicado',
                        'Se aplicó el cupón "'+codigoCupon.value+'"',
                        'success'
                    );
                    aplicarDescuentoCupon(success.data);
                })
                .catch(error => console.log(error));
        }
        
        if(formCoupon){
            formCoupon.addEventListener("submit", (event) => {
                event.preventDefault();
                consultCoupon();
            });
        }
        
        if(btnCuponElmnt){
            btnCuponElmnt.addEventListener("click", consultCoupon);
        }

    </script>
@stop
