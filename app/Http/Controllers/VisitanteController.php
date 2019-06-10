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
        $existeSeccion=false;
        foreach ($secciones as $seccion1) {
            if($seccion1->Nombre==$seccionNombre){
                $existeSeccion=true;
            }
        }
        if ($existeSeccion) {
            $programas= $seccion->programas;
            return view('paginaUsuario.seccion')->with('programas',$programas)->with('seccion',$seccion)->with('secciones',$secciones);
        } else {
            return redirect('/');
        }
    }
}
