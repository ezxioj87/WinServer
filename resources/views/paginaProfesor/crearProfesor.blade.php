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
                        <h2 class="pageheader-title">Crear Profesor </h2>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                {!! Form::open(['route'=>'users.store','method'=>'Post']) !!}
                                <div class="form-group">
                                    {!! Form::label('Nombre:') !!}
                                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de usuario']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Contraseña:') !!}
                                    {!! Form::password('pass',['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Rol:') !!}
                                    {!! Form::select('rol', array('admin' => 'Admin', 'user' => 'Usuario'), 'user',['class'=>'form-control']); !!}
                                </div>
                                @foreach($todasSecciones as $seccion)
                                    <div class="form-check form-check-inline">
                                        {!! Form::label($seccion->Nombre.' ') !!}
                                        {!! Form::checkbox($seccion->Nombre,$seccion->Nombre) !!}
                                    </div>
                                @endforeach
                                <div class="form-group">
                                    {!! Form::submit('Crear Profesor',['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('pie')