@include('paginaUsuario.cabecera')
@yield('cabecera')
@yield('menu')
<div id="content-wrapper">

    <div class="container-fluid">

        <h1>Bienvenido al WinServer de Ies Luis Velez de Guevara</h1>
        <hr>
        <h2>Aquí podras descargar los programas necesarios para tus asignaturas</h2>
    </div>

    <div class="col-sm-12 text-center">
        <img
                class="img-responsive"
                src="{{ URL::asset('imagenes/secciones/luisVelez.jpeg') }}"
                alt="Card image cap">
    </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->

@yield('pie')