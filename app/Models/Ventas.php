<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ventas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "ventas";
    protected $fillable = [
        'fecha_venta',
        'total',
    ];

    public function venta_producto()
    {
        return $this->hasMany(Venta_producto::class, 'venta_id', 'id');
    }
}
