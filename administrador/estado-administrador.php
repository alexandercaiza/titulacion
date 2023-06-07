<?php
include '../inc/modelo/sesiones.php';
include '../inc/funciones/funciones.php';
$clien = filter_var($_GET['drfthu_45PIO'], FILTER_VALIDATE_INT);
$tip = filter_var($_GET['cuanto'], FILTER_VALIDATE_INT);

if(!$clien & !$tip) {
    $tipo = $tip -3435;
    if ($tipo !==1) {
        die(' No es válido');
    }
   
    
}

date_default_timezone_set ( "America/Lima");
$cliente = $clien -102020;
$tipo = $tip -3435;
//echo $cliente.'<br>';
//echo $tipo.'<br>';
$fecha =Date("d-m-Y");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagenes/png" href="../favicon.png">
    <title>Estado de permisos</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!--LINKS PARA EL CSS DE LAS TABLAS-->
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                    <a href="../inicio-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                        class="nav-link">Inicio</a>
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
            <a href="../inicio-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                class="brand-link">
                <img src="../imagenes/logo-sucre.png" alt="logo sucre" class="brand-image img-circle elevation-3"
                    style="opacity: .8">

                <span class="brand-text font-weight-light">Talento humano</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

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
                                    <a href="registro-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar asisitencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cambio-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
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
                                    <a href="salud-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="calamidad-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calamidad</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="horas-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Por horas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-vacacion.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacaciones</p>
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
                                    <a href="administrador-solicitud-salud.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-solicitud-calamidad.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calamidad</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-solicitud-horas.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Horas</p>
                                    </a>
                                </li>
                                <!--<li class="nav-item">
                                    <a href="administrador-solicitud-vacacion.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacaciones</p>
                                    </a>
                                </li>-->

                            </ul>
                        </li>


                    
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-pdf"></i>



                                <p>
                                    Reportes 
                                    <i class="fas fa-angle-left right"></i>


                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administrador-reporte-vacaciones.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vacaciones y licencias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="administrador-reporte-vacaciones.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
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
                                    <a href="administrador-agregar-docente.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar docente</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users "></i>

                                <p>
                                    Restricciones y datos
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="restriccion-fecha.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fechas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cargar-hora.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cargar hora de vacación</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="actualizar-hora.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Actualizar hora de vacación</p>
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
                                    <a href="ayuda-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
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
                            <h1 class="m-0">Estado de permisos</h1>
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

            <!-- Main content AQUIE SE COLOCA EL CONTENIDO DE LOS ESTADOS -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Estado de permiso por salud</h3>
                                </div>
                                <!-- /.card-header tabla salud -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Fecha solicitud</th>
                                                <th>Fecha inicio</th>
                                                <th>Fecha final</th>
                                                <th>Días</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          $salud = obtenerEstadoSalud($cliente);
                                          $vecto_salud = array();
                                          foreach ($salud as $datos_salud) {
                                              $vector_salud [] = $datos_salud;
                                          }
                                          /*
                                          echo '<pre>';
                                          var_dump($vector_salud);
                                          echo '</pre>';
                                          */
                                          
                                          if($salud->num_rows) { 
                                   
                                            foreach($salud as $contacto_s) { 
                                            if($contacto_s['pers_estado']=='rechazada' || $contacto_s['pers_estado']=='aceptada' || $contacto_s['pers_estado']=='proceso'){?>

                                            <tr>


                                                <td><?php echo $contacto_s['pers_fecha_solicitud']; ?></td>
                                                <td><?php echo $contacto_s['pers_fecha_inicio']; ?></td>
                                                <td><?php echo $contacto_s['pers_fecha_fin']; ?></td>
                                                <td><?php echo $contacto_s['per_total_dia']; ?></td>
                                                <td><?php echo $contacto_s['pers_estado']; ?></td>




                                            </tr>
                                            <?php }
                                             }
                                       } ?>





                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Fecha solicitud</th>
                                                <th>Fecha inicio</th>
                                                <th>Fecha final</th>
                                                <th>Días</th>
                                                <th>Estado</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->


                            <!-- /.card-body -->


                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Estado de permiso por calamidad</h3>
                        </div>
                        <!-- /.card-header tabla calamidad -->
                        <div class="card-body">
                            <table id="example4" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha solicitud</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha final</th>
                                        <th>Días</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                          $calamidad = obtenerEstadoCalamidad($cliente);
                                          $vector_calamidad = array();
                                          foreach ($calamidad as $datos_calamidad) {
                                              $vector_calamidad [] = $datos_calamidad;
                                          }
                                          /*
                                          echo '<pre>';
                                          var_dump($vector_calamidad);
                                          echo '</pre>';
                                          */
                                          
                                          
                                          if($calamidad->num_rows) { 
                                   
                                            foreach($calamidad as $contacto_c) { 
                                            if($contacto_c['perc_estado']=='rechazada' || $contacto_c['perc_estado']=='aceptada' || $contacto_c['perc_estado']=='proceso'  ){?>

                                    <tr>


                                        <td><?php echo $contacto_c['perc_fecha_solicitud']; ?></td>
                                        <td><?php echo $contacto_c['perc_fecha_inicio']; ?></td>
                                        <td><?php echo $contacto_c['perc_fecha_fin']; ?></td>
                                        <td><?php echo $contacto_c['perc_dia_total']; ?></td>
                                        <td><?php echo $contacto_c['perc_estado']; ?></td>




                                    </tr>
                                    <?php }
                                             }
                                       }  ?>








                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Fecha solicitud</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha final</th>
                                        <th>Días</th>
                                        <th>Estado</th>
                                    </tr>
                                </tfoot>

                        </div>
                    </div>
                    <!-- /.card-body -->



                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estado de permiso por horas</h3>
                </div>
                <!-- /.card-header tabla calamidad -->
                <div class="card-body">
                    <table id="example6" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Fecha solicitud</th>
                                <th>Hora inicio</th>
                                <th>Hora final</th>
                                <th>Total hora</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                          $hora = obtenerEstadoHora($cliente);
                                          $vector_hora = array();
                                          foreach ($hora as $datos_hora) {
                                              $vector_hora [] = $datos_hora;
                                          }
                                          /*
                                          
                                          echo '<pre>';
                                          var_dump($vector_hora);
                                          echo '</pre>';
                                          */
                                          
                                          
                                          
                                          if($hora->num_rows) { 
                                   
                                            foreach($hora as $contacto_h) { 
                                            if($contacto_h['perh_estado']=='rechazada' || $contacto_h['perh_estado']=='aceptada' || $contacto_h['perh_estado']=='proceso'  ){?>

                            <tr>


                                <td><?php echo $contacto_h['perh_fecha_inicio']; ?></td>
                                <td><?php echo $contacto_h['perh_hora_inicio']; ?></td>
                                <td><?php echo $contacto_h['perh_hora_final']; ?></td>
                                <td><?php echo $contacto_h['perh_hora_total']; ?></td>
                                <td><?php echo $contacto_h['perh_estado']; ?></td>




                            </tr>
                            <?php }
                                             }
                                       }  ?>








                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fecha solicitud</th>
                                <th>Fecha inicio</th>
                                <th>Fecha final</th>
                                <th>Días</th>
                                <th>Estado</th>
                            </tr>
                        </tfoot>

                </div>
            </div>
            <!-- /.card-body -->


            </table>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- /.card -->
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


    <!--INICIO DE LOS SCRIPTS PARA LA TABLA-->
    <!-- jQuery -../->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->

    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example6').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>