const urlDominio = 'http://127.0.0.1:8080/';
const lista_carrito = document.getElementById("cart-sidebar");
let carrito = JSON.parse(localStorage.getItem("data_carrito")) || [];
let descuentos = JSON.parse(localStorage.getItem("data_descuentos")) || [];
let detalle_pedido = JSON.parse(localStorage.getItem("detalle_pedido")) || {};
let prc_regular, prc_total, prc_desc1, prc_desc2;

let alerta_producto_agregado = (idProd, nombreProd, cantidad) => {
    const toastContainer = document.getElementById('toastContainer');
    toastContainer.insertAdjacentHTML('beforeend', `
        <div id="liveToast_${idProd}" class="toast align-items-center text-bg-success border-0 bg-opacity-75" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Se agregó: ${nombreProd}, x${cantidad} al carrito
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    `);
    let toastLiveExample = document.getElementById('liveToast_'+idProd);
    let toast = new bootstrap.Toast(toastLiveExample);
    toast.show();
}

let addProduct = (id, prd_nombre, prd_precio, prd_imagen_path, cntd) => {
    let search = carrito.find( (x) => x.id === id );
    let cantidad_prod;
    if(search === undefined){
        carrito.push({
            id: id,
            cntd: 1,
            nmbr: prd_nombre,
            precio: prd_precio,
            img: prd_imagen_path
        })
        cantidad_prod = 1;
    }else{
        search.cntd += parseInt(cntd);
        cantidad_prod = search.cntd;
    }

    localStorage.setItem("data_carrito", JSON.stringify(carrito));

    calculation();

    alerta_producto_agregado(id, prd_nombre, cntd);
};

let increment = (id) => {
    let search = carrito.find( (x) => x.id === id );
    search.cntd += 1;
    console.log(carrito);
    localStorage.setItem("data_carrito", JSON.stringify(carrito));
    calculation();
};

let decrement = (id) => {
    let search = carrito.find( (x) => x.id === id );
    if(search.cntd === 0)
        return;
    else
        search.cntd -= 1;
    
    console.log(carrito);
    localStorage.setItem("data_carrito", JSON.stringify(carrito));
    calculation();
};

let remove = (id) => {
    console.log(id);
    carrito = carrito.filter( (x) => x.id !== id);
    
    localStorage.setItem("data_carrito", JSON.stringify(carrito));

    calculation();
};

let limp_carrito = () => {
    localStorage.removeItem("detalle_pedido");
    localStorage.removeItem("data_carrito");
    document.cookie = "data_carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    localStorage.removeItem("data_descuentos");
    document.cookie = "total_descuento=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
}

let set_total_order = (pedidoTotal) => {
    detalle_pedido.pdd_total = pedidoTotal;
    localStorage.setItem("detalle_pedido", JSON.stringify(detalle_pedido));
}

let calculation = () => {
    let elmt_cart_cntd = document.getElementById("carrito_cntd_prod"),
        elmt_cart_precio = document.getElementById("carrito_precio_total");
    prc_total = 0;
    cartCant = carrito.map( (x) => x.cntd).reduce( (x, y) => x + y, 0);

    if ( localStorage.getItem("data_carrito") !== null ) {
        document.cookie = "data_carrito=" + localStorage.getItem("data_carrito");
    }
    if ( localStorage.getItem("data_descuentos") ) {
        const tl_dsc = JSON.parse(localStorage.getItem("data_descuentos"));
        const dsc = tl_dsc.map( d => d.cantidad ).reduce( (d1, d2) => d1 + d2, 0);
        document.cookie = "total_descuento=" + dsc;
    }
    
    lista_carrito.innerHTML = carrito.map( (p) => {
        return `
            <li class="item odd">
                <a class="product-image" title="${p.nmbr}" href="detalle-producto?${p.id}">
                    <img alt="" src="${p.img}">
                </a>
                <div class="product-details">
                    <a class="btn-remove" onclick="remove(${p.id})" title="Quitar producto" href="#">Quitar producto</a>
                    <p class="product-name">
                        <a href="detalle-producto?${p.id}">${p.nmbr}</a>
                    </p>
                    <strong>${p.cntd}</strong>
                    x
                    <span class="price">S/ ${p.precio}</span>
                </div>
            </li>
        `;
    }).join("");

    //obteniendo total
    carrito.forEach(p => {
        prc_total += p.cntd * p.precio;
    });

    prc_regular = prc_total;
    prc_regular = prc_regular.toFixed(2);

    //aplicando descuentos
    cargar_descuentos();

    descuentos.forEach(d => {
        if(d.id === 1) {
            prc_desc1 = prc_total * (1-(d.cantidad/100));
            prc_desc1 = prc_desc1.toFixed(2)
            prc_total = prc_desc1;
        }
        if(d.id === 2) {
            prc_desc2 = prc_total * (1-(d.cantidad/100));
            prc_desc2 = prc_desc2.toFixed(2)
            prc_total = prc_desc2;
        }
    });

    set_total_order(prc_total);

    elmt_cart_cntd.innerHTML = cartCant;
    elmt_cart_precio.innerHTML = "S/ " + prc_total;
};

let set_descuentos = (response) => {
    descuentos = [];

    response.forEach(d => {
        if( d.id_tipo_descuento === 2 ) {
            descuentos.push({
                "id": d.id_descuento,
                "nombre": d.dsc_nombre,
                "cantidad": d.dsc_cantidad
            });
        }
    });

    localStorage.setItem("data_descuentos", JSON.stringify(descuentos));
}

let cargar_descuentos = () => {
    let url = urlDominio + 'api/descuentos';

    //llamado al api descuentos, index
    fetch( url, {
        method: 'GET',
        headers: {
            "Content-Type": "application/json",
        }
    } )
    .then( response => response.json() )
    .then( response => {
        if( response.length !== 0 )
            set_descuentos(response);
    } )
    .catch( error => console.log(error) );
}

calculation();

let registro_venta = (idUser, currentTime) => {
    let pedido = JSON.parse(localStorage.getItem("data_carrito"));
    console.log("pedido");
    console.log(pedido);
    console.log("productos");
    console.log(carrito);
    console.log("descuentos");
    console.log(descuentos);

    const pedido_data = {
        id_tipo_pedido: 1,  //1 = Online
        tipo_comp: "Boleto",
        id_user: idUser,
        direccion: detalle_pedido.pdd_direccion,
        total: detalle_pedido.pdd_total,
        pdd_fecha_entrega: currentTime,
        pdd_descripcion: detalle_pedido.pdd_descripcion,
        productos: carrito,
        descuentos: descuentos
    };
    
    //api pedido, store
    let url = urlDominio+'api/pedido';

    fetch( url, {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(pedido_data)
    } )
    .then( response => response.json() )
    .then( success => {
        console.log(success);
    } )
    .catch( error => {
        localStorage.setItem( "data_reg_db_retry", localStorage.getItem("data_carrito") );
        console.log(error);
    } );
};