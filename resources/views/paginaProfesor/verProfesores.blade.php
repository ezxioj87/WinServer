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
                                <h2 class="pageheader-title">Profesores </h2>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-2">
                                <a href={{action('ProfesorController@crearProfesor')}} class="btn
                                   btn-primary">Crear Profesor</a>

                                <!--<button id="myBtn" class="btn btn-info" data-toggle="modal"
                                        data-target="#ModalBorrarSeccion">Crear Profesor
                                </button>
                                -->
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

                        <table class="table">
                            <thead>
                            <tr>

                                <th scope="col">Usuario</th>
                                <th scope="col">Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($profesores as $profesor)
                                <tr>
                                <td>{{$profesor->name}}</td>

                                <td><a href={{action('ProfesorController@crearProfesor')}} class="btn
                                       btn-primary">Modificar Profesor</a></td>
                                <td><button id="myBtn" class="btn btn-danger" data-toggle="modal"
                                    data-target="#ModalBorrarSeccion">Eliminar Profesor
                                    </button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>



@yield('pie')