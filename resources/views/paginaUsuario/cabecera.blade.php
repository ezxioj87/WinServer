
@section('cabecera')

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Programas Varios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ URL::asset('css/paginaUsuario/main.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/paginaUsuario/bootstrap.min.css') }}" />
    <link href="../../css/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/fontawesome-all.css">
    <link rel="stylesheet" href="../../css/materialdesignicons.min.css">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
								<h2><a href="index.html" class="logo"><strong>Ies Luis Velez de Guevara</strong></a></h2>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								</ul>
							</header>

@endsection
@section('menu')
</div>
</div>
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{ action('Controller@index') }}">Inicio</a></li>
										<li><a href="{{ action('Controller@prueba') }}">Programas Varios</a></li>
										<li>
											<span class="opener">Isos</span>
											<ul>
												<li><a href="#">Windows</a></li>
												<li><a href="#">Linux</a></li>
											</ul>
										</li>
									</ul>
                                </nav>
@endsection

@section('pie')
<footer id="footer">
								<p class="copyright">&copy;Ies Luis Velez de Guevara: <a href="http://www.iesluisvelez.org/portal/">Ies Luis Velez de Guevara</a>.</p>
							</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{!! asset('js/paginaUsuario/jquery.min.js') !!}"></script>
			<script src="{!! asset('js/paginaUsuario/browser.min.js') !!}"></script>
			<script src="{!! asset('js/paginaUsuario/breakpoints.min.js') !!}"></script>
			<script src="{!! asset('js/paginaUsuario/util.js') !!}"></script>
			<script src="{!! asset('js/paginaUsuario/main.js') !!}"></script>

	</body>
</html>
@endsection
