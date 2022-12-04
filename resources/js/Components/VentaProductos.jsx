import React from "react";

const VentaProductos = ({ venta }) => {
    const { id, fecha_venta, total, venta_producto } = venta;

    return (
        <div className="card">
            <div className="card-header bg-dark text-white">{fecha_venta}</div>
            <div className="card-body">
                {venta_producto.map((p) => {
                    const {
                        producto: { nombre, image_uri },
                    } = p;
                    return (
                        <div key={p.id} className="card mb-3">
                            <div className="d-flex gap-2">
                                <div>
                                    <img
                                        src={image_uri}
                                        className="img-fluid rounded-start"
                                        alt="producto"
                                        width={150}
                                    />
                                </div>
                                <div>
                                    <div className="card-body">
                                        <h5 className="card-title">{nombre}</h5>
                                        <p className="card-text">
                                            Cantidad&nbsp;:&nbsp;{p.cantidad}
                                        </p>
                                        <p className="card-text">
                                            Total&nbsp;:&nbsp;${p.precio}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    );
                })}
            </div>
        </div>
    );
};

export default VentaProductos;
