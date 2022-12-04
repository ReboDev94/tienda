<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Venta_producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "venta_producto";
    protected $fillable = [
        'precio',
        'cantidad',
        'producto_id'
    ];



    public function producto()
    {
        return $this->hasOne(Producto::class, 'id', 'producto_id');
    }
}
