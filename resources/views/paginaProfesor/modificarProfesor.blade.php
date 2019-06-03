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
                        <h2 class="pageheader-title">Modificar Profesor </h2>
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

                                {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'Put']) !!}
                                <div class="form-group">
                                    {!! Form::label('Nombre:') !!}
                                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de usuario']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Contraseña:') !!}
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Rol:') !!}
                                    {!! Form::select('rol', array('admin' => 'Admin', 'user' => 'Usuario'), $user->roles()->first()->name,['class'=>'form-control']); !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Secciones:') !!}
                                    <br>
                                    @foreach($todasSecciones as $seccion)
                                        <div class="form-check form-check-inline">
                                            {!! Form::label($seccion->Nombre.' ') !!}
                                            @foreach($user->seccions as $nombreSeccion)
                                                @if($nombreSeccion->Nombre ==$seccion->Nombre)
                                                    {!! Form::checkbox($seccion->Nombre,$seccion->Nombre,true) !!}
                                                    <?php $seccionEncontrado = true;?>
                                                    @break
                                                @else
                                                    <?php $seccionEncontrado = false;?>
                                                @endif
                                            @endforeach
                                            @if(!$seccionEncontrado)
                                                {!! Form::checkbox($seccion->Nombre,$seccion->Nombre) !!}
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Modificar Profesor',['class'=>'btn btn-primary']) !!}
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