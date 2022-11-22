<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "productos";

    protected $fillable = [
        'nombre',
        'precio',
        'image'
    ];

    public function categoria()
    {
        return $this->hasOne(Categoria::class);
    }
}
