@include('paginaProfesor.layout')
@yield('cabecera')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Secciones </h2>
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
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/programa01.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Programas Generales</h3>
                                <p class="card-text">Aquí se pondrán los programas más generales.</p>
                                <a href="ProgramasGenerales.html" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/antivirus.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Antivirus</h3>
                                <p class="card-text">Aquí estarán los antivirus más conocidos.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/ImagenGenerica.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Isos</h3>
                                <p class="card-text">Aquí estarán las isos de windows y de Linux</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>



@yield('pie')
