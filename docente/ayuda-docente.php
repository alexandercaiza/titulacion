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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagenes/png" href="../favicon.png">
    <title>Talento Humano</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
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
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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
                                   <a href="registro-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar asisitencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="estado-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estados de permisos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                     <a href="cambio-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cambiar contraseña</p>
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
                                     <a href="horas-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?> " class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Por horas</p>
                                    </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="vacacion-docente.php?fephylfr_45O=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>" class="nav-link">
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
                                    <a href="ayuda-docente.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ayuda</p>
                                    </a>
                                </li>
                                <!--  <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>uPlot</p>
                                    </a>
                                </li> -->
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
                            <h1 class="m-0">Ayuda</h1>
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
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Registrar asistencia 
                                    </h3>
                                </div>
                                <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar actividades.</p>
                                  <p>2.- Se despliega un submenú en donde se debe seleccionar “registrar asistencia”.</p>
                                  <p>3.-Se despliega un formulario en el que se debe ingresar la fecha de su asistencia.</p>
                                  <p>4.-Una vez llenado el formulario, dar clic en registrar, para que su asistencia sea registrada.</p>
                                </div>
                                
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Estado de los permisos
                                    </h3>
                                </div>
                                <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar actividades.</p>
                                  <p> 2.- Se despliega un submenú, seleccionar “estado de permisos”.</p>
                                  <p> 3.- Se desplegará una tabla en la que puede observar el estado de sus permiso.</p>
                                </div>
                               
                            </div>

                             <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Cambio de contraseña
                                    </h3>
                                </div>
                                 <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar actividades.</p>
                                  <p> 2.- Se despliega un submenú en donde se debe seleccionar “cambiar contraseña”.</p>
                                  <p> 3.- Se despliega un formulario para cambiar contraseña.</p>
                                  <p> 4.- Se debe ingresar una nueva contraseña.</p>
                                   <p> 5.- Ingresar nuevamente la contraseña proporcionada para su verificación.</p>
                                  <p> 6.- Una vez llenado todo el formulario, dar clic en el botón cambiar.</p>
                                </div>
                                <!-- /.card -->
                            </div>

                             
                             <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Permisos por horas
                                    </h3>
                                </div>
                                <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar permisos.</p>
                                  <p> 2.- Se despliega un submenú, Seleccionar “horas”.</p>
                                  <p> 3.- En el primer espacio en blanco ingresar la fecha del permiso.</p>
                                  <p> 4.- En el segundo espacio en blanco ingresar la hora de inicio del permiso que solicita.</p>
                                  <p> 5.- en el tercer espacio en blanco ingresar la hora en la que acaba el permiso solicitado.</p>
                                  <p> 6.- En el cuarto espacio en blanco ingresar el link en donde se subió el archivo adjunto que justifica su permiso.</p>
                                  <p> 7.- En la última opción "concepto" debe llenar el motivo del porque está solicitando el permiso.</p>
                                  <p> 8.- Una vez lleno todo el formulario, dar clic en solicitar.</p>
                                </div>
                               
                            </div>


                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Permisos por calamidad
                                    </h3>
                                </div>
                                  <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar permisos.</p>
                                  <p> 2.- Se despliega un submenú en donde debe seleccionar “calamidad”.</p>
                                  <p> 3.- En el primer espacio en blanco ingresar la fecha en la que hace la solicitud.</p>
                                  <p> 4.- En el segundo espacio en blanco ingresar la fecha en la que solicita el permiso.</p>
                                  <p> 5.- en el tercer espacio en blanco ingresar la fecha en la que va a finalizar el permiso.</p>
                                  <p> 6.- En el último espacio en blanco ingresar el link en donde se subió el archivo adjunto que justifica su permiso.</p>
                                  <p> 7.- Una vez lleno todo el formulario, dar clin en solicitar.</p>
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Permisos por salud 
                                    </h3>
                                </div>
                                  <div>
                                    
                                  <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar permisos.</p>
                                  <p> 2.- Se despliega un submenú en el que se debe seleccionar “salud”<./p>
                                  <p> 3.- En el primer espacio en blanco ingresar la fecha en la que hace la solicitud.</p>
                                  <p> 4.- En el segundo espacio en blanco ingresar la fecha en la que solicita el permiso.</p>
                                  <p> 5.- En el tercer espacio en blanco ingresar la fecha en la que va a finalizar el permiso.</p>
                                  <p> 6.- En el último espacio en blanco, ingresar el link en donde se subió el archivo adjunto que justifica su permiso.</p>
                                  <p> 7.- Una vez lleno todo el formulario, dar clin en solicitar.</p>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i> Permiso por vacaciones
                                    </h3>
                                </div>
                                <div>
                                    
                                   <p> 1.-Dirigirse al menú en el lado izquierdo, seleccionar permisos.</p>
                                  <p> 2.- Se despliega un submenú en el que se debe seleccionar “vacación”.</p>
                                  <p> 3.- Elegir en el recuadro de calendario la fecha de sus vacaciones.</p>
                                  <p> 4.- Dar clic en solicitar para enviar la información.</p><br>
                                  <p> Nota: no se puede ingresar fechas pasadas a la fecha actual.</p>
                                </div>
                               
                            </div>


                        </div>

                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!--  <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0-rc
                </div> -->
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="../dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="../plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard3.js"></script>
</body>

</html>