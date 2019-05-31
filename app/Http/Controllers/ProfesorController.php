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
        view('paginaProfesor.layout')->with('admin',$admin);
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
        return view('paginaProfesor.modificarSeccion',compact('seccion',$seccion));
    }
    public function modificarArchivo($id)
    {

        $programa = Programa::find($id);
        return view('paginaProfesor.modificarArchivo')->with('programa',$programa);
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

    public function crearArchivo($id)
    {
        return view('paginaProfesor.crearArchivo')->with('id',$id);
    }

    public function login(){
        $admin=false;
        return view('paginaProfesor.loginProfesor')->with('admin',$admin);
    }
}
