<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seccion;

class ProfesorController extends Controller
{
    public function index()
    {
        return view('paginaProfesor.index');
    }
    public function Seccion($id)
    {
        $seccion = Seccion::find($id);
        return view('paginaProfesor.Seccion',compact('seccion',$seccion));
    }
    public function modificarSeccion($id)
    {
        $seccion = Seccion::find($id);
        return view('paginaProfesor.modificarSeccion',compact('seccion',$seccion));
    }

    public function crearSeccion()
    {
        return view('paginaProfesor.crearSeccion');
    }
}
