@include('paginaUsuario.cabecera')
@yield('cabecera')
@yield('menu')
<div id="content-wrapper">

    <div class="container-fluid">

        <h1>Bienvenido al WinServer de Ies Luis Velez de Guevara</h1>
        <hr>
        <h2>Aquí podras descargar los programas necesarios para tus asignaturas</h2>
    </div>

    <div class="card mb-3">
        <img
                class="img-fluid"
                src="{{ URL::asset('imagenes/secciones/fachadaIES.jpg') }}"
                alt="Card image cap">
    </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->

@yield('pie')