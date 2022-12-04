<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Ventas::with('venta_producto')->get();
        $ventas =  $ventas->map(function ($venta) {
            $venta->venta_producto->map(function ($venta_producto) {
                $venta_producto->producto;
                return $venta_producto;
            });
            return $venta;
        });
        return Inertia::render('ventas/Ventas', ['ventas' => $ventas]);
    }
}
