<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['Nombre','Descripcion','nombreImagen','nombreArchivo'];
    public $timestamps = false;

    public function seccion()
    {
        return $this->belongsTo(App\Seccion::class);
    }
}
