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
                        <h2 class="pageheader-title">Modificar Seccion </h2>
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
                                {!! Form::model($seccion,['route'=>['seccions.update',$seccion->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {!! Form::label('Nombre:') !!}
                                    {!! Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la seccion']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Descripcion:') !!}
                                    {!! Form::textarea('Descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa la descripcion de la seccion']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Profesores:') !!}
                                    <br>
                                    @foreach($usuarios as $usuario)
                                        <div class="form-check form-check-inline">
                                            {!! Form::label($usuario->name.' ') !!}
                                            @foreach($seccion->users as $nombreUsuario)
                                                @if($nombreUsuario->name ==$usuario->name)
                                                    {!! Form::checkbox($usuario->name,$usuario->name,true) !!}
                                                    <?php $usuarioEncontrado = true;?>
                                                    @break
                                                @else
                                                    <?php $usuarioEncontrado = false;?>
                                                @endif
                                            @endforeach
                                            @if(!$usuarioEncontrado)
                                                {!! Form::checkbox($usuario->name,$usuario->name) !!}
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Imagen:') !!}
                                    {!! Form::file('imagen') !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Modificar Sección',['class'=>'btn btn-primary']) !!}
                                    <button onclick="{{redirect('paginaProfesor')}}" class="btn btn-primary">Salir
                                    </button>
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