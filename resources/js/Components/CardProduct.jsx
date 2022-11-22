import React from "react";

const CardProduct = ({ id, nombre, image_uri, precio }) => {
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
            <button className="btn btn-dark">Añadir al carrito</button>
        </>
    );
};

export default CardProduct;
