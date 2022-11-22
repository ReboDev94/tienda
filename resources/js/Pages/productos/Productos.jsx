import React from "react";
import PrincipalLayout from "@/Layouts/PrincipalLayout";

const Productos = ({ categorias }) => {
    return (
        <PrincipalLayout>
            <div className="container my-5">
                <h1>Productos</h1>
                <div>
                    <a
                        type="button"
                        className="btn btn-success"
                        href={route("newProduct")}
                    >
                        Agregar
                    </a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </PrincipalLayout>
    );
};

export default Productos;
