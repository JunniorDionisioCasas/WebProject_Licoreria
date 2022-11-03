@extends('layouts/vista_padre')

@section('title', 'Pasarela de pago')

@section('css')
    <link rel="stylesheet" href="/css/pago.css">
@stop

@section('contenido_principal')

    <?php
        // SDK de Mercado Pago
        require base_path().'/vendor/autoload.php';
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken('TEST-6077501917481013-102014-e38984d2c5984d03445699b72c99bc50-1221729949');

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        $preference->back_urls = array(
            "success" => "http://127.0.0.1:8000/home",
            "failure" => "http://127.0.0.1:8000/home",
            "pending" => "http://127.0.0.1:8000/home"
        );
        $preference->auto_return = "approved";

        $ck_data_crrt = json_decode( $_COOKIE['data_carrito'] );
        $ck_total_dsc = $_COOKIE['total_descuento'];

        // Crea un ítem en la preferencia
        $productos = [];

        foreach ($ck_data_crrt as $p) {
            $item = new MercadoPago\Item();
            $item->title = $p->nmbr;
            $item->quantity = $p->cntd;
            $item->unit_price = round( ($p->precio)*(1-($ck_total_dsc/100)) , 1);
            array_push($productos, $item);
        }

        $preference->items = $productos;
        $preference->save();
    ?>

    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">


                <div class="card mb-3 contenedorGen">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/images/backgrounds/vertical_liquors.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title">Formas de pago</h5>
                                <p class="card-text">Elija el método de pago de su preferencia</p>
                                <span id="psrl_total_pagar"></span>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>

                        <div class="list-group col-md-5">
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">MercadoPago</h5>
                                    <div class="cho-container"></div>
                                </div>
                                <p class="mb-1">Acepta todas las tarjetas, efectivo en agentes y banca por internet</p>
                                <!-- <small>And some small print.</small> -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Culqi</h5>
                                    <button id="btn_pagar_culqi">Pagar</button>
                                </div>
                                <p class="mb-1">Acepta Tarjetas, Billeteras móviles(Yape, Plin, etc), PagoEfectivo y Cuotealo</p>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();

        $current_time = Carbon\Carbon::now('-05:00');
    @endphp
@stop

@section('js')
    // SDK MercadoPago.js V2
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    // Culqi Checkout V4
    <script src="https://checkout.culqi.com/js/v4"></script>
    <script>
        // Mercado Pago------------------------------------------------
        const mp = new MercadoPago('TEST-8c007fa6-6e21-4330-aaca-9d9ad4a23c9e', {
            locale: 'es-PE'
        });

        mp.checkout({
            preference: {
                id: "{{$preference->id}}"
            },
            render: {
                container: '.cho-container',
                label: 'Pagar',
            }
        });

        // Culqi------------------------------------------------
        Culqi.publicKey = 'pk_test_mMuDt93W693kopfG';//'pk_test_4e2acd3f3f0f8ab2';
        let order_id;
        let prc_pagar = (Math.round(prc_total * 10))*10;
        console.log("prc_pagar: "+prc_pagar);
        let generate_order_number = "{{Auth::user()->id}}" + "-" +Math.floor(Math.random() * 10) + "-" + Math.floor(Math.random() * 100);
        let create_order_data = {
            "amount": prc_pagar,
            "currency_code": "PEN",
            "description": "Venta de licores, y objetos asociados",
            "order_number": generate_order_number,
            "expiration_date": "{{Carbon\Carbon::now('-05:00')->addDay()->timestamp}}",
            "client_details": {
                "first_name": "{{Auth::user()->name}}",
                "last_name": "{{Auth::user()->usr_apellidos}}",
                "email": "{{Auth::user()->email}}",
                "phone_number": "{{Auth::user()->usr_phone}}"
            }
        }

        function setting_culqi(){
            Culqi.settings({
                title: 'San Sebastian',
                currency: 'PEN',
                amount: prc_pagar,
                order: order_id // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo
            });
            Culqi.options({
                lang: "auto",
                // installments: true, // Habilitar o deshabilitar el campo de cuotas
                paymentMethods: {
                    tarjeta: true,
                    yape: true, 
                    bancaMovil: true,
                    agente: true,
                    billetera: true,
                    cuotealo: true,
                },
                style: {
                    logo: 'http://127.0.0.1:8000/images/logo/logo-512x512.png',
                    bannerColor: '#000000', // hexadecimal
                    buttonBackground: '#000000', // hexadecimal
                    menuColor: '#5EC8FF', // hexadecimal
                    linksColor: '#000000', // hexadecimal
                    buttonText: 'Pagar', // texto que tomará el botón
                    buttonTextColor: '#FFFFFF', // hexadecimal
                    priceColor: '#5EC8FF' // hexadecimal
                }
            });
        }
        console.log("order number generated: "+generate_order_number);
        console.log(JSON.stringify(create_order_data));
        
        //api crear orden, para habilitar pago con efectivo (Yape, etc), post
        fetch('https://api.culqi.com/v2/orders', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer sk_test_m769JguJzbnw0WTA", //llave privada culqi, test: sk_test_355c52048ca73d96
            },
            body: JSON.stringify(create_order_data),
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                order_id = data.id;
                setting_culqi();
            })
            .catch(error => console.log(error));
            
        const btn_pagar_culqi = document.getElementById('btn_pagar_culqi');

        btn_pagar_culqi.addEventListener('click', function (e) {
            // Abre el formulario con la configuración en Culqi.settings y CulqiOptions
            Culqi.open();
            e.preventDefault();
        })

        function culqi() {
            if (Culqi.token) {  // ¡Objeto Token creado exitosamente!
                const token = Culqi.token;
                console.log('Se ha creado un Token: ', token);
                //En esta linea de codigo debemos enviar el "Culqi.token.id"
                //hacia tu servidor con Ajax

                const url = 'https://api.culqi.com/v2/charges';
                const dataCargo = {
                                    "amount": prc_pagar,
                                    "currency_code": "PEN",
                                    "email": Culqi.token.email,
                                    "source_id": Culqi.token.id
                                };
                console.log('body:'+JSON.stringify(dataCargo));

                fetch(url, {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer sk_test_m769JguJzbnw0WTA", //llave privada culqi
                    },
                    body: JSON.stringify(dataCargo),
                })
                    .then(success => {
                        success.json();
                    })
                    .then(response => {
                        console.log(response);
                        // pago exitoso
                        
                        registro_venta({{isset($user) ? $user->id : '``'}}, "{{$current_time}}");

                        limp_carrito();
                        
                        Culqi.close();

                        Swal.fire(
                            'Compra exitosa',
                            '',
                            'success'
                        ).then( (result) => {
                                window.location.href = "/home";
                        });
                    })
                    .catch(error => console.log(error));
            } else if (Culqi.order) {  // ¡Objeto Order creado exitosamente!
                const order = Culqi.order;
                console.log('Se ha creado el objeto Order: ', order);
            
            } else {
                // Mostramos JSON de objeto error en consola
                console.log('Error : ',Culqi.error);
            }
        };
        
        document.getElementById("carrito_dropdown_div").style.pointerEvents = "none";
        document.getElementById("psrl_total_pagar").innerHTML = "Total: S/ " + prc_total;
    </script>

@stop