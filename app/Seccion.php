<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Programa;

class Seccion extends Model
{
    //
    protected $fillable = ['Nombre','Descripcion','nombreImagen'];
    public $timestamps = false;

    public function programas()
    {
        return $this->hasMany(Programa::class);
    }
}
