<?php

namespace App\Http\Controllers;

use App\Programa;
use App\User;
use Illuminate\Http\Request;
use App\Seccion;

class ProfesorController extends Controller
{
    public function index(Request $request)
    {
        $admin = $request->user()->hasRole('admin');
        $user = $request->user();
        $secciones = $user->seccions;
        return view('paginaProfesor.index')->with('admin', $admin)->with('secciones', $secciones);
    }

    public function verProfesores(Request $request)
    {
        $admin = $request->user()->hasRole('admin');
        if (!$admin) {
            return redirect('paginaProfesor');
        }
        $profesores = User::all();
        $user = $request->user();
        $secciones = $user->seccions;
        view('paginaProfesor.layout')->with('admin', $admin);
        return view('paginaProfesor.verProfesores')->with('admin', $admin)->with('profesores', $profesores)->with('secciones', $secciones);
    }


    public function seccion(Request $request, $nombre)
    {

        $admin = $request->user()->hasRole('admin');
        $user = $request->user();
        $secciones = $user->seccions;
        $seccion = Seccion::where('Nombre', $nombre)->get()->first();
        $programas = $seccion->programas;
        $esSuSeccion=false;
        foreach ($secciones as $seccion1) {
            if($seccion1->Nombre==$nombre){
                $esSuSeccion=true;
            }
        }
        if ($esSuSeccion) {
            return view('paginaProfesor.seccion')->with('seccion', $seccion)->with('programas', $programas)->with('admin', $admin)->with('secciones', $secciones);
        } else {
            return redirect('Administracion');
        }


    }

    public function modificarSeccion(Request $request, $nombre)
    {
        $admin = $request->user()->hasRole('admin');
        if (!$admin) {
            return redirect('Administracion');
        }
        $user = $request->user();
        $secciones = $user->seccions;
        $usuarios = User::all();
        $seccion = Seccion::where('Nombre', $nombre)->get()->first();
        $esSuSeccion=false;
        foreach ($secciones as $seccion1) {
            if($seccion1->Nombre==$nombre){
                $esSuSeccion=true;
            }
        }
        if ($esSuSeccion) {
            return view('paginaProfesor.modificarSeccion')->with('seccion', $seccion)->with('admin', $admin)->with('secciones', $secciones)->with('usuarios', $usuarios);
        }else{
            return redirect('Administracion');
        }
    }

    public function modificarArchivo(Request $request, $nombre)
    {
        $admin = $request->user()->hasRole('admin');
        $programa = Programa::where('Nombre', $nombre)->get()->first();
        $nombreSeccion = $programa->seccion()->first();
        $user = $request->user();
        $esSuSeccion=false;
        $secciones = $user->seccions;
        foreach ($secciones as $seccion1) {
            if($seccion1->Nombre==$nombreSeccion->Nombre){
                $esSuSeccion=true;
            }
        }
        if ($esSuSeccion) {
            return view('paginaProfesor.modificarArchivo')->with('programa', $programa)->with('admin', $admin)->with('secciones', $secciones);
        }else{
            return redirect('Administracion');
        }
    }

    public function crearSeccion(Request $request)
    {
        $admin = $request->user()->hasRole('admin');
        if (!$admin) {
            return redirect('Administracion');
        }
        $usuarios = User::all();
        $user = $request->user();
        $secciones = $user->seccions;
        return view('paginaProfesor.crearSeccion')->with('admin', $admin)->with('usuarios', $usuarios)->with('secciones', $secciones);
    }

    public function crearProfesor(Request $request)
    {
        $admin = $request->user()->hasRole('admin');
        if (!$admin) {
            return redirect('Administracion');
        }


        $user = $request->user();
        $secciones = $user->seccions;
        $todasSecciones = Seccion::all();
        return view('paginaProfesor.crearProfesor')->with('admin', $admin)->with('secciones', $secciones)->with('todasSecciones', $todasSecciones);
    }

    public function modificarProfesor(Request $request, $nombre)
    {
        $admin = $request->user()->hasRole('admin');
        if (!$admin) {
            return redirect('Administracion');
        }
        $user = User::where('name', $nombre)->get()->first();
        $usuario = $request->user();
        $secciones = $usuario->seccions;
        $todasSecciones = Seccion::all();
        return view('paginaProfesor.modificarProfesor')->with('admin', $admin)->with('user', $user)->with('secciones', $secciones)->with('todasSecciones', $todasSecciones);;
    }

    public function crearArchivo(Request $request, $nombre)
    {
        $admin = $request->user()->hasRole('admin');
        $seccion = Seccion::where('Nombre', $nombre)->get()->first();
        $user = $request->user();
        $secciones = $user->seccions;
        $esSuSeccion=false;
        foreach ($secciones as $seccion1) {
            if($seccion1->Nombre==$nombre){
                $esSuSeccion=true;
            }
        }
        if ($esSuSeccion) {
            return view('paginaProfesor.crearArchivo')->with('id', $seccion->id)->with('admin', $admin)->with('secciones', $secciones);
        }else{
            return redirect('Administracion');
        }
    }

    public function login()
    {
        $admin = false;
        return view('paginaProfesor.loginProfesor')->with('admin', $admin);
    }
}
