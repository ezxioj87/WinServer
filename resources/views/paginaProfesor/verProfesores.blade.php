@include('paginaProfesor.layout')
@yield('cabecera')
@yield('menu')
<div class="dashboard-wrapper">


    <!-- Modal -->


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
                                <h2 class="pageheader-title"><a
                                            href={{action('ProfesorController@crearProfesor')}} class="btn
                                            btn-primary">Crear Profesor</a></h2>
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
                                    <td>{{$profesor->roles()->first()->name}}</td>
                                    <td>
                                        <a href={{action('ProfesorController@modificarProfesor',$profesor->id)}} class="btn
                                           btn-primary">Modificar Profesor</a></td>
                                    {!! Form::model($profesor,['route'=>['users.destroy',$profesor->id],'method'=>'Delete']) !!}
                                    <td>{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}</td>
                                    {!! Form::close() !!}
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