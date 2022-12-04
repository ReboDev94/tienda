<?php

namespace App\Observers;

use App\Models\Producto;
use App\Models\Venta_producto;
use Illuminate\Support\Facades\Log;

class VentaProductoObserver
{
    public function created(Venta_producto $venta_producto)
    {

        $producto = Producto::find($venta_producto->producto_id);
        $producto->stock = $producto->stock  - $venta_producto->cantidad;
        $producto->save();
    }
}
