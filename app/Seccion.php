<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $fillable = ['Nombre','Descripcion'];
    public $timestamps = false;
}
