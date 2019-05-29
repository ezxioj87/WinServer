<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Seccion;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $secciones = Seccion::all();
        view()->share('secciones', $secciones);
    }
}
