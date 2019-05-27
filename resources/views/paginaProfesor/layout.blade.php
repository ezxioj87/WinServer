@section('cabecera')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/bootstrap.min.css') }}">
    <link href="{{ URL::asset('css/paginaProfesor/style.css') }}" rel="stylesheet'">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/style1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/chartist.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/c3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/paginaProfesor/flag-icon.min.css') }}">
    <title>WinServerAdmin</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">WinServer Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Juan de Dios </h5>
                                </div>
                                <a class="dropdown-item" href="login.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
@endsection
@section('menu')

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Secciones <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <?php
                                            $secciones = App\Seccion::all();
                                            foreach ($secciones as $seccion) {
                                                echo '<li class="nav-item ">';
                                                echo '<a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>'.$seccion->name.' <span class="badge badge-success">6</span></a>';
                                                echo '</li>';
                                             }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ action('SeccionController@crearSeccion') }}" ><i class="fa fa-fw fa-rocket"></i>Crear Seccion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fa fa-fw fa-rocket"></i>Eliminar Seccion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fa fa-fw fa-rocket"></i>Modificar Seccion</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
@endsection

@section('pie')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept.
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ URL::asset('js/paginaProfesor/jquery-3.3.1.min.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{ URL::asset('js/paginaProfesor/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ URL::asset('js/paginaProfesor/jquery.slimscroll.js') }}"></script>
<!-- main js -->
<script src="{{ URL::asset('js/paginaProfesor/main-js.js') }}"></script>
<!-- chart chartist js -->
<script src="{{ URL::asset('js/paginaProfesor/chartist.min.js') }}"></script>
<!-- sparkline js -->
<script src="{{ URL::asset('js/paginaProfesor/jquery.sparkline.js') }}"></script>
<!-- morris js -->
<script src="{{ URL::asset('js/paginaProfesor/raphael.min.js') }}"></script>
<script src="{{ URL::asset('js/paginaProfesor/morris.js') }}"></script>
<!-- chart c3 js -->
<script src="{{ URL::asset('js/paginaProfesor/c3.min.js') }}"></script>
<script src="{{ URL::asset('js/paginaProfesor/d3-5.4.0.min.js') }}"></script>
<script src="{{ URL::asset('js/paginaProfesor/C3chartjs.js') }}"></script>
<script src="{{ URL::asset('js/paginaProfesor/dashboard-ecommerce.js') }}"></script>
</body>

</html>
@endsection
