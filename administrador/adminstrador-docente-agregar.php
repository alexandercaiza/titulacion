<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talento Humano</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../inicio-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">Inicio</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->



            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../inicio-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="brand-link">
                <img src="../imagenes/logo-sucre.png" alt="logo sucre" class="brand-image img-circle elevation-3" style="opacity: .8">

                <span class="brand-text font-weight-light">Talento humano</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Actividades
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="registro-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar asistencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="estado-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado de permisos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cambio-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cambio de contraseña</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Permisos
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="salud-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="calamidad-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calamidad</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="horas-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Por horas</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon  far fa-id-card"></i>


                                <p>
                                    Solicitudes
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-solicitud-salud.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-solicitud-calamidad.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calamidad</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-solicitud-horas.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Horas</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                 
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-excel"></i>



                                <p>
                                    Reportes en Excel
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-reporte-excel-vacaciones.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacaciones y licencias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-reporte-excel-nomina.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nómina</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-pdf"></i>



                                <p>
                                    Reporte en PDF
                                    <i class="fas fa-angle-left right"></i>


                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-reporte-pdf-vacaciones.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacaciones y licencias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-reporte-pdf-nomina.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nómina</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users "></i>

                                <p>
                                    Docentes
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-carga-masiva.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carga masiva</p>
                                    </a>
                                </li>
                               
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-docente-agregar.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar docente</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-question-circle "></i>

                                <p>
                                    Ayuda
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="ayuda-administrador.php?drfthu_45PIO=<?php echo $cliente; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ayuda</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Agregar docente</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Salir</a></li>
                                <li class="breadcrumb-item active">ISTS</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> </h3>
                                </div>

                                <form id="quickForm">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombres Completos</label>
                                            <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apellidos Completos</label>
                                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cédula</label>
                                            <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Cédula">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo electrónico</label>
                                            <input type="email" name="correo" class="form-control" id="correo" placeholder="Mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Conrtraseña</label>
                                            <input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Instituto</label>
                                            <input type="text" name="instituto" class="form-control" id="instituto" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Carrera</label>
                                            <input type="text" name="carrera" class="form-control" id="carrera" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Puesto</label>
                                            <input type="text" name="puesto" class="form-control" id="puesto" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Obsevación</label>
                                            <input type="text" name="observacion" class="form-control" id="observacion" placeholder="">
                                        </div>
                                        <div class="form-group mb-0">

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </div>
                                </form>
                            </div>

                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar 
            <aside class="control-sidebar control-sidebar-dark">
                Control sidebar content goes here 
            </aside>-->
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0-rc
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="../dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="../chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard3.js"></script>
        <!--script para el enlace del ajax del login-->
        <script src="../js/agregar-docente.js"></script>
        <script src="../js/sweetalert2.all.min.js" crossorigin="anonymous"></script>
</body>

</html>