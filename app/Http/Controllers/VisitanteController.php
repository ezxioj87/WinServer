<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        return view('paginaUsuario.index');
    }

    public function prueba()
    {

        return view('paginaUsuario.prueba');
    }
}
