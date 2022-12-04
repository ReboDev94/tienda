import React from "react";

const CardProduct = (producto) => {
    const { id, nombre, image_uri, precio, stock } = producto;

    const addCar = () => {
        const data = JSON.parse(localStorage.getItem("carrito")) || [];
        const productExist = data.findIndex((p) => p.id === id);

        if (productExist === -1 && stock >= 1) {
            data.push({ ...producto, cantidad: 1 });
            localStorage.setItem("carrito", JSON.stringify(data));
            location.href = route("car-shopping");
            return;
        }

        const cantidad = +data[productExist].cantidad + 1;
        if (productExist !== -1 && stock >= cantidad) {
            data[productExist] = { ...producto, cantidad };
        }

        localStorage.setItem("carrito", JSON.stringify(data));
        location.href = route("car-shopping");
    };
    return (
        <>
            <img
                width="100%"
                height={300}
                src={image_uri}
                alt={`producto-${id}`}
            />
            <h3>{nombre}</h3>
            <h6>Precio:&nbsp;${precio}</h6>
            <h6>Stock:&nbsp;{stock}</h6>
            <button
                disabled={stock === 0}
                className="btn btn-dark"
                onClick={addCar}
            >
                Añadir al carrito
            </button>
        </>
    );
};

export default CardProduct;
