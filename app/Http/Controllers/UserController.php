<?php

namespace App\Http\Controllers;


use App\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\User;
Use DB;

class UserController extends Controller
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
        $role_user= Role::where('name','user')->first();
        $role_admin= Role::where('name','admin')->first();
        $user = new User();
        $user->name = $request->input("nombre");
        $user->password =  bcrypt($request->input("pass"));

        $user->save();
        if($request->input("rol")=="admin"){
            $user->roles()->attach($role_admin);
        }else{
            $user->roles()->attach($role_user);
        }
        return redirect("paginaProfesor/verProfesores");
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
        $role_user= Role::where('name','user')->first();
        $role_admin= Role::where('name','admin')->first();
        $user = User::find($id);
        $user->name = $request->input("name");
        if(!$request->input("password")=='')
        {
            $user->password =  bcrypt($request->input("password"));
        }

        $user->save();
        if($user->hasRole('admin')){
            $user->roles()->detach($role_admin);
        }else{
            $user->roles()->detach($role_user);
        }

        if($request->input("rol")=="admin"){
            $user->roles()->attach($role_admin);
        }else{
            $user->roles()->attach($role_user);
        }
        return redirect("paginaProfesor/verProfesores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);


        return redirect("paginaProfesor/verProfesores");
    }
}

