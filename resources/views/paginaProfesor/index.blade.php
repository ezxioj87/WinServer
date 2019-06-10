@include('paginaProfesor.layout')
@yield('cabecera')
@yield('menu')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Secciones </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                    @if(!$secciones==null)
                        @foreach ($secciones as $seccion)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <a href={{action('ProfesorController@seccion',$seccion->Nombre)}}><img
                                                class="card-img-top img-fluid"
                                                src="{{ URL::asset('imagenes/secciones/'.$seccion->nombreImagen) }}"
                                                alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h3 class="card-title">{{$seccion->Nombre}}</h3>
                                        <p class="card-text">{{ $seccion->Descripcion }} </p>
                                        <a href={{action('ProfesorController@seccion',$seccion->Nombre)}} class="btn
                                           btn-primary">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>


@yield('pie')
