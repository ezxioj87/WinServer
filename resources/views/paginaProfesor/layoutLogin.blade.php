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
            <a class="navbar-brand" href="{{action('ProfesorController@index')}}">WinServer Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
@endsection