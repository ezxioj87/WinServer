@section('cabecera')
        <!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WinServer</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('css/paginaUsuario/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ URL::asset('css/paginaUsuario/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('css/paginaUsuario/sb-admin.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('css/paginaUsuario/mainCard.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-white bg-white static-top">

    <a class="navbar-brand mr-1" href="index.html">WinServer</a>


</nav>


<!-- Main -->


@endsection
@section('menu')
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            @foreach($secciones as $seccion)
                <li class="nav-item active">
                    <a class="nav-link" href="{{action('VisitanteController@seccion',$seccion->Nombre)}}">
                        <span>{{$seccion->Nombre}}</span>
                    </a>
                </li>
            @endforeach

        </ul>
</html>


@endsection

@section('pie')
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Ies Luis Velez De Guevara</span>
            </div>
        </div>
    </footer>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('js/paginaUsuario/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/paginaUsuario/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('js/paginaUsuario/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ URL::asset('js/paginaUsuario/Chart.min.js')}}"></script>
    <script src="{{ URL::asset('js/paginaUsuario/jquery.dataTables.js')}}"></script>
    <script src="{{ URL::asset('js/paginaUsuario/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('js/paginaUsuario/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ URL::asset('js/paginaUsuario/datatables-demo.js')}}"></script>
    <script src="{{ URL::asset('js/paginaUsuario/chart-area-demo.js')}}"></script>
@endsection
