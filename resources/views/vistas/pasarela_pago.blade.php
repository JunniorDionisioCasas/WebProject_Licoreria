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
            "success" => "http://127.0.0.1:8000/",
            "failure" => "http://127.0.0.1:8000/",
            "pending" => "http://127.0.0.1:8000/"
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
                                <p class="mb-1">Acepta todas las tarjetas</p>
                                <!-- <small>And some small print.</small> -->
                            </a>
                            <!-- <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Pronto más opciones de pago...</h5>
                                </div>
                                <p class="mb-1"></p>
                            </a> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop

@section('js')
    // SDK MercadoPago.js V2
    <script src="https://sdk.mercadopago.com/js/v2"></script>    
    
    <script>
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

        // document.getElementById("carrito_dropdown_div").style.display = "none";
        document.getElementById("psrl_total_pagar").innerHTML = "Total: S/ " + prc_total;
    </script>

@stop