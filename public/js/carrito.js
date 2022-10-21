
const lista_carrito = document.getElementById("cart-sidebar");
let carrito = JSON.parse(localStorage.getItem("data_carrito")) || [];
let prc_total;

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

let calculation = () => {
    let elmt_cart_cntd = document.getElementById("carrito_cntd_prod"),
        elmt_cart_precio = document.getElementById("carrito_precio_total");
    prc_total = 0;
    cartCant = carrito.map( (x) => x.cntd).reduce( (x, y) => x + y, 0);

    if ( localStorage.getItem("data_carrito") !== null ) {
        document.cookie = "data_carrito=" + localStorage.getItem("data_carrito");
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

    carrito.forEach(p => {
        prc_total += p.cntd * p.precio;
    });

    elmt_cart_cntd.innerHTML = cartCant;
    elmt_cart_precio.innerHTML = "S/ " + prc_total.toFixed(2);
};

calculation();