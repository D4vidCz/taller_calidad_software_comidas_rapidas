<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(producto::class, 'tipo_producto_id');
    }
}
