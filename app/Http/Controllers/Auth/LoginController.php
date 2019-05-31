<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/paginaProfesor/loginProfesor');
    }
    public function login(Request $request){
        if(Auth::user()) {
            $admin= $request->user()->hasRole('admin');
            $nombre=$request->user()->name;
            return redirect('paginaProfesor/')->with('admin',$admin)->with('nombre',$nombre);
        }


        $credentials=$this->validate(request(),[
            'name' => 'required|string',
            'password'=>'string|required'
        ]);

        if(Auth::attempt($credentials)){
            $admin= $request->user()->hasRole('admin');

            return redirect('paginaProfesor/')->with('admin',$admin);
        }
        return back()->withErrors(['name'=>'Este nombre es incorrecot']);
    }

    public function __construct(){
        $this->middleware('guest',['only'=>'paginaProfesor.loginProfesor']);
    }


    public function name(){
        return 'name';
    }


}
