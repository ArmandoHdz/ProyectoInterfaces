<?php
    session_start();
    //echo "".$_SESSION['usuario'];
    if($_SESSION['usuario']!="administrador"){
        header('Location: index.php');
    }

    
  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Administador CyberGames</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        
                            <img src="imagenes/logo2.jpg" width="150" height="65" class="logo" class="logo-lg" />
                        
                    </div>
                </div>
                <div class="topbar-left">
                    <!--<div class="">!-->
                    <!--<h2>Cybergames</h2>

                        
                    <!--</div>!-->
                </div>


                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="admin_perfil.php">Perfil</a></li>
                                <li><a href="contactos.php">Contactos</a></li>
                                <li><a href="">Mapa</a></li>
                                <li><a href="calendario.php">Calendario</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="imagenes/avatar1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admin_perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="index.php"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="imagenes/avatar1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Armando</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="admin.php"><i class="ti-home"></i> Tablero </a></li>

                                <li><a href="ventas.php"><i class="mdi mdi-shopping-music"></i> Ventas </a>
                                </li>


                                <li><a href="typography.html"><i class="mdi mdi-xbox-controller"></i> Productos </a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="productos_agregar.php">Nuevo Producto</a></li>
                                      <li><a href="productos_modificar.php">Modificar Producto</a></li>
                                      <li><a href="productos_inventario.php">Inventario</a></li>
                                      <li><a href="productos_consulta.php">Consulta</a></li>
                                      <li><a href="categorias.php">Categorias</a></li>
                                  </ul>
                                </li>
                                <li><a href="clientes.php"><i class="mdi mdi-account-check"></i> Clientes </a></li>
                                <li><a href="typography.html"><i class="mdi mdi-account-key"></i> Empleados </a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="empleados_agregar.php">Nuevo Empleado</a></li>
                                        <li><a href="empleados_modificar.php">Modificar Empleado</a></li>
                                        <li><a href="empleados_eliminar.php">Eliminar Empleado</a></li>
                                        <li><a href="empleados.php">Ver Empleados</a></li>
                                    </ul>
                                </li>
                                <li><a href="mantenimiento.php"><i class="mdi mdi-wrench"></i>Mantenimiento </a></li>
                                <li><a href="typography.html"><i class="mdi mdi-wallet-travel"></i> Proveedores </a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="proveedores_agregar.php">Nuevo Proveedor</a></li>
                                        <li><a href="proveeodres_eliminar.php">Eliminar Proveedor</a></li>
                                        <li><a href="proveedores.php">Ver Proveedores</a></li>
                                    </ul>    
                                </li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title">Google Maps</h4>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="m-b-20">
                                    <h5>Markers</h5>

                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>


            </div>
            <!-- end .page-contentbar -->
        </div>




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- Gmaps file -->
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>

        <!-- Google map Init -->
        <script src="assets/pages/jquery.gmaps.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="assets/pages/jquery.jvectormap.init.js"></script>


        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('[data-plugin="knob"]').each(function(idx, obj) {
                $(this).knob();
             });
        </script>


    </body>
</html>