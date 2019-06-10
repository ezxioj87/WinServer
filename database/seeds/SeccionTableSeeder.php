<?php

use App\Seccion;
use App\User;
use Illuminate\Database\Seeder;

class SeccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_user= User::where('name','User')->first();
        $user_admin= User::where('name','Admin')->first();

        $seccion = new Seccion();
        $seccion->Nombre = 'SeccionAdmin';
        $seccion->Descripcion = 'Esta es una seccion del usuario Admin';
        $seccion->nombreImagen= 'luisVelez.jpeg';
        $seccion->save();
        $seccion->users()->attach($user_admin);

        $seccion = new Seccion();
        $seccion->Nombre = 'SeccionUser';
        $seccion->Descripcion = 'Esta es una seccion del usuario User';
        $seccion->nombreImagen= 'luisVelez.jpeg';
        $seccion->save();
        $seccion->users()->attach($user_user);
    }
}
