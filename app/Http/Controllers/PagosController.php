<?php

namespace App\Http\Controllers;

use App\Models\Venta_producto;
use App\Models\Ventas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagosController extends Controller
{
    public function pagar(Request $request)
    {

        $productos_r = collect($request->productos ?? []);
        $total = $productos_r->reduce(function ($acc, $producto) {
            return $acc + $producto['precio'] * $producto['cantidad'];
        });

        $productos = $productos_r->map(function ($p) {
            return new Venta_producto([
                'precio' => $p['precio'],
                'cantidad' => $p['cantidad'],
                'producto_id' => $p['id']
            ]);
        });

        $fecha = Carbon::now();

        $venta = new Ventas();
        $venta->fecha_venta = $fecha;
        $venta->total = $total;
        $venta->save();
        $venta->venta_producto()->saveMany($productos);
    }
}
