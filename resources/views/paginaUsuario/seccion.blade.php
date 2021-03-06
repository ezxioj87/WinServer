@include('paginaUsuario.cabecera')
@yield('cabecera')
@yield('menu')
<div class="container-fluid">


    <!-- Page Content -->
    <h1>{{$seccion->Nombre}}</h1>
    <hr>
    <p>{{$seccion->Descripcion}}</p>

    <div class="row">
        @forelse($programas as $programa)
            <div class="col-sm-2">
                <!-- .card -->
                <div class="card card-figure">
                    <!-- .card-figure -->
                    <figure class="figure">
                        <!-- .figure-img -->
                        <div class="figure-img">
                            <a href="{{ URL::asset('/archivos/'.$programa->nombreArchivo) }}" download><img
                                        class="img-fluid"
                                        src="{{ URL::asset('imagenes/archivos/'.$programa->nombreImagen) }}"
                                        alt="Card image cap"></a>
                        </div>
                        <!-- /.figure-img -->
                        <!-- .figure-caption -->
                        <figcaption class="figure-caption">
                            <a class="text-decoration-none" href="{{ URL::asset('/archivos/'.$programa->nombreArchivo) }}" download><p class="text-muted mb-0"> {{$programa->Nombre}} </p>
                           <p class="text-muted mb-0"> {{$programa->Descripcion}} </p></a>
                        </figcaption>
                        <!-- /.figure-caption -->
                    </figure>
                    <!-- /.card-figure -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-sm-1"></div>
        @empty
        @endforelse

    </div>

</div>


@yield('pie')
