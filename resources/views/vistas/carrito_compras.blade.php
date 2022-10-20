@extends('layouts/vista_padre')

@section('title', 'Productos')

@section('css')
    <link rel="stylesheet" href="/css/carrito.css">
@stop

@section('contenido_principal')
<div id="sns_content" class="wrap layout-m">
    <div class="container">
        <div class="row">
            <div class="shoppingcart">
                <div class="sptitle title_carr col-md-12">
                    <h3 id="title_carr">CARRITO DE COMPRAS</h3>
                    <h4 class="style btnProcPagar">PROCEDER A PAGAR</h4>
                </div>
                <div class="content col-md-12">
                    <ul class="title clearfix">
                        <li class="text1"><a href="#">NOMBRE DEL PRODUCTO</a></li>
                        <li class="text2"><a href="#">PRECIO UNT.</a></li>
                        <li class="text2"><a href="#">CNTD.</a></li>
                        <li class="text2"><a href="#">SUB TOTAL</a></li>
                    </ul>

                    <div id="lista_prod_carrito">

                    </div>

                    <ul class="nav-mid clearfix">
                        <li class="image"><a href="#"><img src="images/placehoder.jpg" alt=""></a></li>
                        <li class="item-title"><a href="#">Modular Modern</a></li>
                        <li class="icon1"><i class="btn-edit fa fa-edit"></i></li>
                        <li class="price1">$659.00</li>
                        <li class="number"><a href="#">1</a></li>
                        <li class="price2">$659.00</li>
                        <li class="icon2"><i class="btn-remove fa fa-xmark"></i></li>
                    </ul>
                    <ul class="nav-bot clearfix">
                        <li class="continue"><a href="/productos">Seguir comprando</a></li>
                        <li class="clear"><a href="#">Limpiar carrito</a></li>
                        <!-- <li class="update"><a href="#">update shopping cart</a></li> -->
                    </ul>
                    <div class="row">
                        <form class="col-md-4">
                            <div class="form-bd">
                                <h3>ESTIMACIÓN DE ENVÍO E IMPUESTO</h3>
                                <p class="text1">Enter your destination to get a shipping estimate.</p>
                                <p class="country">
                                    <span class="color1">*</span>Country
                                </p>
                                <select id="country" class="validate-select" title="Country" name="country_id">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                </select>

                                <p>State/Province</p>

                                <select id="region_id" class="required-entry validate-select" title="State/Province" name="region_id">
                                    <option value="">Please select region, state or province</option>
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">American Samoa</option>
                                    <option value="4">Arizona</option>
                                    <option value="5">Arkansas</option>
                                    <option value="6">Armed Forces Africa</option>
                                    <option value="7">Armed Forces Americas</option>
                                    <option value="8">Armed Forces Canada</option>
                                    <option value="9">Armed Forces Europe</option>
                                    <option value="10">Armed Forces Middle East</option>
                                </select>
                                <p class="zip">Zip/Postal Code</p>
                                <input class="style23" type="text" value="" size="30" />
                                <span class="style-bd">Get a quote</span>
                            </div>
                        </form>
                        <form class="col-md-4">
                            <div class="form-bd">
                                <h3>DISCOUNT CODES</h3>
                                <p class="formbd2">Enter your coupon code if you have one.</p>
                                <input class="styleip" type="text" value="" size="30" />
                                <span class="style-bd">Apply coupon</span>
                            </div>
                        </form>
                        <form class="form-right col-md-4">
                            <div class="form-bd">
                                <p class="subtotal">
                                    <span class="text1">SUBTOTAL:</span>
                                    <span class="text2">$1,794.00</span>
                                </p>
                                <h3>
                                    <span class="text3">GRAND TOTAL:</span>
                                    <span class="text4">$1,794.00</span>
                                </h3>
                                <span class="style-bd">Proceed to checkout</span>
                                <p class="checkout">Checkout with Multiple Addresses</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        const bd = document.getElementById('bd');
        bd.classList.add('sns-shopping-cart');
        const breadcrumb = document.getElementById('breadcrumb_1');
        breadcrumb.innerHTML = "Carrito de compras";

        console.log('cargado script dentor de blade');
        console.log(carrito);
        let lst_crrt = document.getElementById('lista_prod_carrito');
        console.log(lst_crrt);
        lst_crrt.insertAdjacentHTML('beforeend', carrito.map( (p) => {
            return `
                <ul class="nav-mid clearfix">
                    <li class="image"><a href="/detalle-producto?${p.id}"><img class="img_sml_crrt" src="${p.img}" alt="${p.nmbr}"></a></li>
                    <li class="item-title nombre1linea"><a href="/detalle-producto?${p.id}">${p.nmbr}</a></li>
                    <li class="icon1"><i class="btn-edit fa fa-square-plus"></i></li>
                    <li class="price1">S/ ${p.precio.toFixed(2)}</li>
                    <li class="number"><a href="">${p.cntd}</a></li>
                    <li class="price2">S/ ${(p.precio*p.cntd).toFixed(2)}</li>
                    <li class="icon2"><i class="btn-remove fa fa-xmark"></i></li>
                </ul>
            `;
        }).join(""));

    </script>
@stop
