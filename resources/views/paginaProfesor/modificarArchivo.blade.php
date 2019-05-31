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
                        <h2 class="pageheader-title">Crear Archivo </h2>
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
                                {!! Form::model($programa ,['route'=>['programas.update',$programa->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {!! Form::label('Nombre:') !!}
                                    {!! Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la seccion']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Descripcion:') !!}
                                    {!! Form::textarea('Descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa la descripcion de la seccion']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Imagen:') !!}
                                    {!! Form::file('nombreImagen') !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Modificar Archivo',['class'=>'btn btn-primary']) !!}

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