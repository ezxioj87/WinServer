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
        $admin= $request->user()->hasRole('admin');
        $secciones = $request->user()->seccions();
        view()->share('secciones', $secciones);
        return view('paginaProfesor.index')->with('admin',$admin);
    }
    public function verProfesores(Request $request)
    {
        $admin= $request->user()->hasRole('admin');
        if(!$admin){
            return redirect('paginaProfesor');
        }
        $profesores = User::all();
        view('paginaProfesor.layout')->with('admin',$admin);
        return view('paginaProfesor.verProfesores')->with('admin',$admin)->with('profesores',$profesores);
    }



    public function Seccion(Request $request,$id)
    {
        $admin= $request->user()->hasRole('admin');
        $seccion = Seccion::find($id);
        $programas= Seccion::find($id)->programas;
        return view('paginaProfesor.Seccion')->with('seccion',$seccion)->with('programas',$programas)->with('admin',$admin);
    }
    public function modificarSeccion(Request $request,$id)
    {
        $admin= $request->user()->hasRole('admin');
        if(!$admin){
            return redirect('paginaProfesor');
        }
        $seccion = Seccion::find($id);
        return view('paginaProfesor.modificarSeccion')->with('seccion',$seccion)->with('admin',$admin);
    }
    public function modificarArchivo(Request $request,$id)
    {
        $admin= $request->user()->hasRole('admin');
        $programa = Programa::find($id);
        return view('paginaProfesor.modificarArchivo')->with('programa',$programa)->with('admin',$admin);
    }

    public function crearSeccion(Request $request)
    {
        $admin= $request->user()->hasRole('admin');
        if(!$admin){
            return redirect('paginaProfesor');
        }
        return view('paginaProfesor.crearSeccion')->with('admin',$admin);
    }
    public function crearProfesor(Request $request)
    {
        $admin= $request->user()->hasRole('admin');
        if(!$admin){
            return redirect('paginaProfesor');
        }
        return view('paginaProfesor.crearProfesor')->with('admin',$admin);
    }
    public function modificarProfesor(Request $request,$id)
    {
        $admin= $request->user()->hasRole('admin');
        if(!$admin){
            return redirect('paginaProfesor');
        }
        $user = User::find($id);
        return view('paginaProfesor.modificarProfesor')->with('admin',$admin)->with('user',$user);
    }

    public function crearArchivo(Request $request,$id)
    {
        $admin= $request->user()->hasRole('admin');
        return view('paginaProfesor.crearArchivo')->with('id',$id)->with('admin',$admin);
    }

    public function login(){
        $admin=false;
        return view('paginaProfesor.loginProfesor')->with('admin',$admin);
    }
}
