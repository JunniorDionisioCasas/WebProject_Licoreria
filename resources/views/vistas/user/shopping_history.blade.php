@extends('layouts/vista_padre')

@section('title', 'Historial de compras')

@section('css')
    <link rel="stylesheet" href="/css/historial.css">
    <link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
@stop

@section('contenido_principal')
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div id="wrapper"></div>
        </div>
    </div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
    <script>
        const breadcrumb = document.getElementById('breadcrumb_1');
        breadcrumb.innerHTML = "Mis compras";

        let grid = new gridjs.Grid({
            columns: [
                {
                    name: "id",
                    hidden: true
                },
                "Fecha",
                {
                    name: "Comprobante",
                    width: '160px'
                },
                "Total",
                {
                    name: "Estado",
                    formatter: (cell) => {
                        switch(parseInt(cell)) {
                            case 0:
                                return gridjs.html(`<span class="badge badgeInfo">Verificando pago</span>`);
                                break;
                            case 1:
                                return gridjs.html(`<span class="badge badgeSuccess">Pago verificado</span>
                                            <span class="badge badgeInfo">Por enviar</span>`);
                                break;
                            case 2:
                                return gridjs.html(`<span class="badge badgeSuccess">Pago verificado</span>
                                            <span class="badge badgePrimary">Enviado</span>`);
                                break;
                            case 3:
                                return gridjs.html(`<span class="badge badgeSuccess">Pago verificado</span>
                                            <span class="badge badgeSuccess">Recibido</span>`);
                                break;
                            default:
                                return gridjs.html(`<span class="badge badgeSecondary">Error de estado, consulte al administrador</span>`);
                        }
                    }
                },
                {
                    name: "Acciones",
                    sort: false,
                    formatter: (cell, row) => {
                        let btnVer = `<button class="btn shadow btnStyle btnVer" title="Ver comprobante" onclick="verPdf('${row.cells[5].data}');">
                                        <i class="fas fa-eye"></i>
                                    </button>`;
                        let btnRecibido = `<button class="btn shadow btnStyle btnRecibido" title="Ya recibí" onclick="recibido(${row.cells[0].data})">
                                                <i class="fas fa-clipboard-check"></i>
                                            </button>`;
                        let btnPagar = `<button class="btn shadow btnStyle" title="Pagar">
                                            <i class="fas fa-money-bill-wave"></i>
                                        </button>`;
                        switch(parseInt(row.cells[4].data)) {
                            case 0:
                                return gridjs.html(btnVer);
                                break;
                            case 1:
                                return gridjs.html(btnVer);
                                break;
                            case 2:
                                return gridjs.html(btnVer + btnRecibido);
                                break;
                            case 3:
                                return gridjs.html(btnVer);
                                break;
                            default:
                                return gridjs.html(btnVer);
                        }
                    }
                }
            ],
            server: {
                method: 'GET',
                url: urlDominio + 'api/pedidos_por_cliente/' + {{\Auth::user()->id}},
                headers: {
                    "Authorization": "Bearer {{Auth::user()->createToken('my-token')->plainTextToken}}"
                },
                then: data => data.map(pedido =>
                    [
                        pedido.id_pedido,
                        pedido.pdd_fecha_entrega,
                        pedido.cmp_serie + '-' + pedido.cmp_numero,
                        'S/ ' + pedido.pdd_total,
                        pedido.pdd_estado,
                        pedido.cmp_pdf_path
                    ]
                ),
                handle: (res) => {
                    // no matching records found
                    if (res.status === 404) return {data: []};
                    if (res.ok) return res.json();
                    
                    throw Error('error de consulta');
                },
            },
            search: {
                server: {
                    url: (prev, keyword) => `${prev}?search=${keyword}`,
                },
            },
            style: {
                table: {
                    'font-size': 'larger',
                    'text-align': 'center'
                }
            },
            pagination: {
                enabled: true,
                limit: 10,
                /* server: {
                    url: (prev, page, limit) => `${prev}?limit=${limit}&offset=${page * limit}`
                } */
            },
            sort: true,
            fixedHeader: true,
            autoWidth: true,
            language: {
                search:{placeholder:"Buscar..."},
                sort:{
                    sortAsc:"Ordenar la columna en orden ascendente",
                    sortDesc:"Ordenar la columna en orden descendente"
                },
                pagination:{
                    previous:"Anterior",
                    next:"Siguiente",
                    navigate:function(e,r){return"Página "+e+" de "+r},
                    page:function(e){return"Página "+e},
                    showing:"Mostrando registros del",
                    of:"de un total de",
                    to:"al",
                    results:"registros"
                },
                loading:"Cargando...",
                noRecordsFound:"No se encontraron registros",
                error:"Se produjo un error al recuperar datos"
            }
        }).render(document.getElementById("wrapper"));

        function recibido(idPedido) {
            Swal.fire({
                title: 'Confirma que recibió su pedido?',
                showCancelButton: true,
                showConfirmButton: true,
                icon: 'warning',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Confirmar',
            }).then( (result) => {
                if (result.value == true) {
                    //api recibido, post
                    let url = urlDominio + 'api/recibido/'+idPedido;
                        fetch(url, {
                            method: 'POST',
                            headers: {
                                "Authorization": "Bearer {{Auth::user()->createToken('my-token')->plainTextToken}}"
                            }
                        })
                            .then(res => res.json())
                            .then(success => {
                                Swal.fire({
                                    title: 'Exito!',
                                    text: 'El pedido se confirmó como recibido',
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                }).then((result) => {
                                    grid.forceRender();
                                });
                            })
                            .catch(error => console.log(error));
                }
            })
        };

        function verPdf(urlPdf) {
            window.open(urlPdf, '_blank').focus();
        };
    </script>
@stop