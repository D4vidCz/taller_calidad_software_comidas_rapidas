<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre','stock', 'precio', 'tipo_producto_id'];

    public function tipoproducto()
    {
        return $this->belongsTo(Tipoproducto::class, 'tipo_producto_id');
    }
}
