<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProductoController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return Inertia::render('productos/Productos', ['categorias' => $categorias]);
    }
    public function create()
    {
        $categorias = Categoria::all();
        return Inertia::render('productos/Nuevo', ['categorias' => $categorias]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'image' => 'required',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|integer',
        ]);

        $img = $request->file('image', null);
        $name_img = sha1(date('YmdHis') . Str::random(30)) . '.' . $img->extension();
        Storage::disk('public')->putFileAs("productos", $img, $name_img);

        // return redirect("/productos");

    }
}
