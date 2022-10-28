const urlDominio = 'http://127.0.0.1:8080/';
const lista_carrito = document.getElementById("cart-sidebar");
let carrito = JSON.parse(localStorage.getItem("data_carrito")) || [];
let descuentos = JSON.parse(localStorage.getItem("data_descuentos")) || [];
let detalle_pedido = JSON.parse(localStorage.getItem("detalle_pedido")) || {};
let prc_regular, prc_total, prc_desc1, prc_desc2;

let addProduct = (id, prd_nombre, prd_precio, prd_imagen_path) => {
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
        search.cntd += 1;
        cantidad_prod = search.cntd;
    }
    console.log(carrito);

    localStorage.setItem("data_carrito", JSON.stringify(carrito));

    calculation();
};

let increment = (id) => {
    let search = carrito.find( (x) => x.id === id );
    search.cntd += 1;
    console.log(carrito);
};

let decrement = (id) => {
    let search = carrito.find( (x) => x.id === id );
    if(search.cntd === 0)
        return;
    else
        search.cntd -= 1;
    
    console.log(carrito);
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

    detalle_pedido.pdd_total = prc_total;
    localStorage.setItem("detalle_pedido", JSON.stringify(detalle_pedido));

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