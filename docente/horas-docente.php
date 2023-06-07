<?php
include '../inc/modelo/sesiones.php';
$clien = filter_var($_GET['fephylfr_45O'], FILTER_VALIDATE_INT);
$tip =filter_var($_GET['cuanto'], FILTER_VALIDATE_INT);

if(!$clien && !$tip) {
    $tipo = $tip -3435;
    if ($tipo !==2) {
        die(' No es válido');
    }
   
}
date_default_timezone_set ( "America/Lima");

$cliente = $clien -102020;
$tipo = $tip -3435;
$fecha = Date('d-m-Y');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagenes/png" href="../favicon.png">
    <title>Estado de permisos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
     <!--  espacio para los link del time picker -->

    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->

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
                    <a href="../inicio-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">Inicio</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->


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
             <a href="../inicio-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="brand-link">
                <img src="../imagenes/logo-sucre.png" alt="logo sucre" class="brand-image img-circle elevation-3" style="opacity: .8">

                <span class="brand-text font-weight-light">Talento humano</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    
                             <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Actividades
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../inicio-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Volver al inicio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                   <a href="registro-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Registrar asisitencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="estado-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estados de permisos</p>
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
                                    <a href="../inicio-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Volver al inicio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                     <a href="salud-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                     <a href="calamidad-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calamidad</p>
                                    </a>
                                </li>
                               <li class="nav-item">
                                    <a href="docente/vacacion-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacación</p>
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
                                     <a href="ayuda-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
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
                            <h1 class="m-0">Permiso por horas</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php?cerrar_sesion=true">Salir</a></li>
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
                                    <h3 class="card-title"> <small></small></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fecha de permiso</label>
                                            <input type="Date" name="email" id="fecha-solicitud" class="form-control" id="exampleInputEmail1"
                                                placeholder="dd/mm/aa">
                                                <input type="hidden" id="cliente" value="<?php echo $cliente ?>"  >
                                        </div>
                                        <div class="form-group">

                                            <div class="bootstrap-timepicker">
                                                <div class="form-group">
                                                    <label>Hora de inicio:</label>

                                                    <div class="input-group date" id="timepicker"
                                                        data-target-input="nearest">
                                                        <input type="text" id="hora-inicio" class="form-control datetimepicker-input"
                                                            data-target="#timepicker" />
                                                        <div class="input-group-append" data-target="#timepicker"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="bootstrap-timepicker">
                                                <div class="form-group">
                                                    <label>Hora final:</label>

                                                    <div class="input-group date" id="timepicker2"
                                                        data-target-input="nearest">

                                                        <input type="text" id="hora-final" class="form-control datetimepicker-input"
                                                            data-target="#timepicker2" />

                                                        <div class="input-group-append" data-target="#timepicker2"
                                                            data-toggle="datetimepicker">

                                                            <div class="input-group-text"><i class="far fa-clock"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Link para documento adjunto</label>
                                            <input type="text" name="link" class="form-control" id="link"
                                                placeholder="Aquí el link">
                                        </div>
                                        <div class="form-group">
                                            <label>Concepto</label>
                                            <textarea id="concepto" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group mb-0 ">

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer ">
                                        <button type="submit " class="btn btn-primary ">Solicitar</button>
                                    </div>

                                </form>
                            </div>
                        </div>


                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6 ">

                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark ">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer ">
            <!--  <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io ">AdminLTE.io</a>.</strong> All rights reserved.
                <div class="float-right d-none d-sm-inline-block ">
                    <b>Version</b> 3.1.0-rc
                </div> -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js "></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
    <!-- AdminLTE -->
   

    <!-- OPTIONAL SCRIPTS -->
    <script src="../plugins/chart.js/Chart.min.js "></script>
    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard3.js "></script>
     <!-- SCRIPTS PARA EL FUNCIONAMIENTO DE TIME PCIKER  -->
 
     <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Page specific script -->
   
    <script src="../js/docente-hora.js"></script>
    <script src="../js/sweetalert2.all.min.js" crossorigin="anonymous"></script>
    <script src="../js/time-picker.js"></script>
</body>

</html>