<?php

namespace App\Http\Controllers;

use App\Seccion;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        $secciones = Seccion::all();
        return view('paginaUsuario.index')->with('secciones', $secciones);
    }

    public function seccion($seccionNombre)
    {
        $secciones = Seccion::all();
        $seccion = Seccion::where('Nombre',$seccionNombre)->get()->first();
       $programas='';
        return view('paginaUsuario.seccion')->with('programas',$programas)->with('seccion',$seccion)->with('secciones',$secciones);
    }
}
