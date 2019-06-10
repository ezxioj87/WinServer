<?php

namespace App\Http\Controllers;

use App\Programa;
use App\Seccion;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Image;
Use DB;

class ProgramaController extends Controller
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
    public function borrar(Request $request)
    {

    }
    public function store(Request $request)
    {
        $id=$request->input('id');
        $programa = new Programa();
        $programa->Nombre = $request->input("nombre");
        $programa->Descripcion = $request->input("descripcion");

        if($request->file('imagen')) {
            $ruta = public_path() . DIRECTORY_SEPARATOR . 'imagenes' . DIRECTORY_SEPARATOR . 'archivos' . DIRECTORY_SEPARATOR;

            // recogida del form
            $imagenOriginal = $request->file('imagen');

            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);

            // generar un nombre aleatorio para la imagen
            $temp_name = $imagenOriginal->getClientOriginalName();

            $imagen->resize(300, 300);

            // guardar imagen
            // save( [ruta], [calidad])
            $imagen->save($ruta . $temp_name, 100);
            $programa->nombreImagen = $temp_name;
        }else {
            $programa->nombreImagen = 'luisVelez.jpeg';
        }

        if($request->file('archivo')) {
            $ruta = public_path() . DIRECTORY_SEPARATOR . 'archivos' . DIRECTORY_SEPARATOR;
            $file = $request->file('archivo');
            $programa->nombreArchivo = $file->getClientOriginalName();

            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();


            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move($ruta,$nombre);
        }
        $programa->seccion_id=$id;
        $programa->save();
        $seccion=Seccion::find($programa->seccion_id);
        return redirect("Administracion/Seccion/".$seccion->Nombre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $programa = Programa::find($id);
        $programa->Nombre = $request->input('Nombre') ;
        $programa->Descripcion = $request->input('Descripcion');

        if($request->file('nombreImagen')) {
            $ruta = public_path() . DIRECTORY_SEPARATOR . 'imagenes' . DIRECTORY_SEPARATOR . 'archivos' . DIRECTORY_SEPARATOR;

            // recogida del form
            $imagenOriginal = $request->file('nombreImagen');

            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);

            // generar un nombre aleatorio para la imagen
            $temp_name = $imagenOriginal->getClientOriginalName();

            $imagen->resize(300, 300);

            // guardar imagen
            // save( [ruta], [calidad])
            $imagen->save($ruta . $temp_name, 100);
            $programa->nombreImagen = $temp_name;
        }
        $programa->save();
        $seccion = Seccion::find($programa->seccion_id);
        return redirect("Administracion/Seccion/".$seccion->Nombre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa =Programa::find($id);
        $seccion= Seccion::find($programa->seccion_id);
        Programa::destroy($id);


        return redirect("Administracion/Seccion/".$seccion->Nombre);
    }
}
