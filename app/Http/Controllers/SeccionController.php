<?php

namespace App\Http\Controllers;

use App\Seccion;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use Image;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $seccion = new Seccion();
        $seccion->Nombre = $request->input("nombre");
        $seccion->Descripcion = $request->input("descripcion");

        if($request->file('imagen')) {
            $ruta = public_path() . '/imagenes/secciones/';

            // recogida del form
            $imagenOriginal = $request->file('imagen');

            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);

            // generar un nombre aleatorio para la imagen
            $temp_name = $imagenOriginal->getClientOriginalName();;

            $imagen->resize(300, 300);

            // guardar imagen
            // save( [ruta], [calidad])
            $imagen->save($ruta . $temp_name, 100);
            $seccion->nombreImagen = $temp_name;
        }else {
            $seccion->nombreImagen = 'luisVelez.jpeg';
        }
        $seccion->save();
        return redirect("paginaProfesor");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seccion = Seccion::find($id);
        $seccion->fill($request->all()) ;
        $seccion->save();
        return redirect(action("ProfesorController@Seccion",$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seccion::destroy($id);

        return redirect("paginaProfesor");
    }




}
