import VentaProductos from "@/Components/VentaProductos";
import PrincipalLayout from "@/Layouts/PrincipalLayout";
import React from "react";

const Ventas = ({ ventas }) => {
    return (
        <PrincipalLayout>
            <div className="container my-5">
                <h1>Mis compras</h1>
                {ventas.map((venta) => (
                    <VentaProductos
                        className="mb-5"
                        key={venta.id}
                        venta={venta}
                    />
                ))}
            </div>
        </PrincipalLayout>
    );
};

export default Ventas;
