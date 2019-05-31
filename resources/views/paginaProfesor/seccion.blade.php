@include('paginaProfesor.layout')
@yield('cabecera')
@yield('menu')
<div class="dashboard-wrapper">


    <!-- Modal -->
    <div class="modal fade" id="ModalBorrarSeccion" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿Desea eliminar la sección?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    {!! Form::model($seccion,['route'=>['seccions.destroy',$seccion->id],'method'=>'Delete']) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                    <button onclick="" type="button" class="btn" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="pageheader-title">{{$seccion->Nombre}} </h2>
                            </div>
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-3">
                                <a href={{action('ProfesorController@modificarSeccion',$seccion->id)}} class="btn
                                   btn-primary">Modificar</a>

                                <button id="myBtn" class="btn btn-danger" data-toggle="modal"
                                        data-target="#ModalBorrarSeccion">Eliminar
                                </button>
                            </div>


                        </div>
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
                    @foreach($programas as $programa)
                        <div class="modal fade" id="ModalBorrar{{$programa->Nombre}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">¿Desea eliminar el archivo {{$programa->nombreArchivo}}?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::model($programa,['route'=>['programas.destroy',$programa->id],'method'=>'Delete']) !!}
                                        {!! Form::submit('Eliminar',['class'=>'btn']) !!}
                                        {!! Form::close() !!}
                                        <button onclick="" type="button" class="btn" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- .card -->
                            <div class="card card-figure">
                                <!-- .card-figure -->
                                <figure class="figure">
                                    <!-- .figure-img -->
                                    <div class="figure-attachment">
                                        <a href="{{ URL::asset('/archivos/'.$programa->nombreArchivo) }}" download><img
                                                    src="{{ URL::asset('imagenes/archivos/'.$programa->nombreImagen) }}"
                                                    alt="Card image cap"
                                                    class="img-fluid"></a>
                                    </div>
                                    <!-- /.figure-img -->
                                    <figcaption class="figure-caption">
                                        <ul class="list-inline d-flex text-muted mb-0">
                                            <li class="list-inline-item text-truncate mr-auto"><h2><a
                                                            href="{{ URL::asset('/archivos/'.$programa->nombre) }}"
                                                            download>{{$programa->Nombre}}</a></h2>
                                            </li>

                                        </ul>
                                        <ul class="list-inline d-flex text-muted mb-0">
                                            <li class="list-inline-item">
                                                <a href={{action('ProfesorController@modificarArchivo',$programa->id)}} class="btn
                                                   btn-primary">Modificar</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button id="myBtn" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#ModalBorrar{{$programa->Nombre}}">Eliminar
                                                </button>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <!-- /.card-figure -->
                            </div>
                            <!-- /.card -->
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-attachment">
                                    <a href="{{ action('ProfesorController@crearArchivo',$seccion->id) }}"><img
                                                src="{{ URL::asset('imagenes/archivos/Add.png') }}"
                                                alt="Card image cap"
                                                class="img-fluid"></a>
                                </div>
                                <!-- /.figure-img -->
                                <figcaption class="figure-caption">
                                    <ul class="list-inline d-flex text-muted mb-0">
                                        <li class="list-inline-item text-truncate mr-auto"><a
                                                    href="{{ action('ProfesorController@crearArchivo',$seccion->id) }}">Subir
                                                Archivo</a>
                                        </li>

                                    </ul>
                                </figcaption>
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@yield('pie')