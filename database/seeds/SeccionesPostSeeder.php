<?php

use Illuminate\Database\Seeder;

class SeccionesPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Secciones')->insert([
            'tituloSeccion' => 'ProgramasGenerales',
            'descripcionSeccion' => 'Esto es una descripcion de ejemplo']);
        DB::table('Secciones')->insert([
            'tituloSeccion' => 'Isos',
            'descripcionSeccion' => 'Aquí están las isos']);
    }
}
