@include('paginaProfesor.layout')
@yield('cabecera')
@yield('menu')
<div class="dashboard-wrapper">





    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <a href={{action('ProfesorController@modificarSeccion',$seccion->id)}} class="btn btn-primary">Modificar</a>

                                <button id="myBtn" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Eliminar</button>
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
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-attachment">
                                    <a href="assets/images/firefox.jpg" download><img
                                                src="assets/images/firefox.jpg" alt="Card image cap"
                                                class="img-fluid"></a>
                                </div>
                                <!-- /.figure-img -->
                                <figcaption class="figure-caption">
                                    <ul class="list-inline d-flex text-muted mb-0">
                                        <li class="list-inline-item text-truncate mr-auto">FireFox
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="assets/images/firefox.jpg" download> <span><i
                                                            class="fas fa-download "></i></span></a>
                                        </li>

                                    </ul>
                                </figcaption>
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-attachment">
                                    <a href="SubirArchivo.html"><img
                                                src="assets/images/card-img-1.jpg" alt="Card image cap"
                                                class="img-fluid"></a>
                                </div>
                                <!-- /.figure-img -->
                                <figcaption class="figure-caption">
                                    <ul class="list-inline d-flex text-muted mb-0">
                                        <li class="list-inline-item text-truncate mr-auto">Subir Archivo
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