<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleingreso extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo(producto::class, 'producto_id');
    }

    public function proveedor(){
        return $this->belongsTo(proveedor::class, 'proveedor_id');
    }
}
