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
$cliente = $clien -102020 ;
$tipo = $tip -3435;
//echo $cliente.'<br>';
//echo $tipo.'<br>';
//variables para el conteneo de permisos 
//$contador_salud =0;
//$contador_vacacion =0;
//$contador_hora =0;
$univeral=1;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagenes/png" href="../favicon.png">
    <title>Talento Humano</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!--INICIO DE LOS LINKS PARA LAS TABLAS-->
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
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
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
            <a href="../inicio-administrador.php?drfthu_45PIO=<?php echo $cliente+102020;?> &cuanto=<?php echo $tipo+3435; ?>"
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
                                    <a href="registrar-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar asistencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="estado-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado de permisos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cambio-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
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
                                    <a href="Salud-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Salud</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Calamidad-administrador.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
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
                                    <a href="administrador-reporte-nomina.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
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
                                    <a href="administrador-docente-agregar.php?drfthu_45PIO=<?php echo $cliente+102020; ?> &cuanto=<?php echo $tipo+3435; ?>"
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
                            <h1 class="m-0">Bienvenido</h1>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">

                                            <div class="cabecera">

                                            </div>

                                            <thead>

                                                <tr>
                                                    <th colspan="11" class="uno">NOMBRE DEL INSTITUTO: INSTITUTO
                                                        SUPERIOR TECNOLOGICO SUCRE</th><br>
                                                </tr>
                                                <tr>
                                                    <th colspan="11" class="dos">REPORTE DE VACACIONES, PERMISOS Y
                                                        LICENCIAS </h2>
                                                </tr>

                                                <tr>
                                                    <th rowspan="2">N.-</th>
                                                    <th rowspan="2">Cedula</th>
                                                    <th rowspan="2">Nombres</th>
                                                    <th colspan="3">Vacaciones y Licencias</th>
                                                    <th colspan="3">Permisos por Horas</th>
                                                    <th rowspan="2">Concepto</th>
                                                    <th rowspan="2">Documentos Adjuntos </th>
                                                </tr>
                                                <tr>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Fecha Inicio</th>
                                                    <th>Fecha Fin</th>
                                                    <th>Fecha Permiso</th>
                                                    <th>Hora de Inicio</th>
                                                    <th>Hora Finalizacion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            //INICIO DEL PRIMER COLOCA PERMISO DE CALAMIDAD
                                          $calamidad = obtenerDatosCalamidad();
                                          $vector_calamidad = array();
                                          
                                          foreach ($calamidad as $datos_calamidad) {
                                              $vector_calamidad [] = $datos_calamidad;
                                             
                                          }
                                          $contador_salud =sizeof($vector_calamidad)+1;
                                          /*
                                          echo '<hr>';
                                         echo $contador_salud =sizeof($vector_calamidad);
                                          echo '<hr>';
                                          
                                          echo '<pre>';
                                          var_dump($vector_calamidad);
                                          echo '</pre>';
                                          */
                                          $mes = Date('m');
                                          //$contador_c =1;
                                          
                                          

                                          if($calamidad->num_rows) { 
                                   
                                            foreach($calamidad as $contacto_calamidad) {
                                                $mes_c= Date('m',strtotime($contacto_calamidad['perc_fecha_solicitud']));
                                                
                                               
                                            if( $mes_c==$mes){  ?>

                                            <tr>


                                                <td><?php echo $univeral; ?></td>
                                                <td><?php echo $contacto_calamidad['per_cedula']; ?></td>
                                                <td><?php echo $contacto_calamidad['per_apellidos']; ?></td>
                                                <td><?php echo $contacto_calamidad['perc_fecha_solicitud']; ?></td>
                                                <td><?php echo $contacto_calamidad['perc_fecha_inicio']; ?></td>
                                                <td><?php echo $contacto_calamidad['perc_fecha_fin']; ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo $contacto_calamidad["perc_permiso"]; ?></td>
                                                <td><?php $condicion_c= !empty($contacto_calamidad['perc_adjunto']) ?  'Si': 'No' ; echo $condicion_c; ?></td>

                                               

                                            </tr>
                                            <?php $univeral++; }
                                             }
                                       } ?>
                                       <?php
                                            //INICIO DEL PRIMER COLOCA PERMISO DE SALUD
                                          $salud = obtenerDatosSalud();
                                          $vector_salud = array();
                                          
                                          foreach ($salud as $datos_salud) {
                                              $vector_salud [] = $datos_salud;
                                             
                                          }
                                          $contador_vacacion =sizeof($vector_salud)+1;
                                          /*
                                          echo '<hr>';
                                         echo $contador_vacacion =sizeof($vector_salud);
                                          echo '<hr>';
                                          
                                          echo '<pre>';
                                          var_dump($vector_salud);
                                          echo '</pre>';
                                          */
                                          $mes = Date('m');
                                         // $contador_s =$contador_salud;
                                          
                                          
                                          

                                          if($salud->num_rows) { 
                                   
                                            foreach($salud as $contacto_salud) {
                                                $mes_s= Date('m',strtotime($contacto_salud['pers_fecha_solicitud']));
                                                
                                               
                                            if( $mes_s==$mes){  ?>

                                            <tr>


                                                <td><?php echo $univeral; ?></td>
                                                <td><?php echo $contacto_salud['per_cedula']; ?></td>
                                                <td><?php echo $contacto_salud['per_apellidos']; ?></td>
                                                <td><?php echo $contacto_salud['pers_fecha_solicitud']; ?></td>
                                                <td><?php echo $contacto_salud['pers_fecha_inicio']; ?></td>
                                                <td><?php echo $contacto_salud['pers_fecha_fin']; ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo $contacto_salud["pers_permiso"]; ?></td>
                                                <td><?php $condicion_s= !empty($contacto_salud['pers_adjunto']) ?  'Si': 'No' ; echo $condicion_s; ?></td>

                                               

                                            </tr>
                                            <?php $univeral++; }
                                             }
                                       } ?>
                                       <?php
                                            //INICIO DEL PRIMER COLOCA PERMISO DE VACACION
                                          $vacacion = obtenerDatosVacacion();
                                          $vector_vacacion = array();
                                          
                                          foreach ($vacacion as $datos_vacacion) {
                                              $vector_vacacion [] = $datos_vacacion;
                                             
                                          }
                                          $contador_hora =sizeof($vector_vacacion)+1;
                                          /*
                                          echo '<hr>';
                                         echo $contador_hora =sizeof($vector_vacacion);
                                          echo '<hr>';
                                          
                                          echo '<pre>';
                                          var_dump($vector_vacacion);
                                          echo '</pre>';
                                          */
                                          $mes = Date('m');
                                         // $contador_v =$contador_vacacion;
                                          
                                          

                                          if($vacacion->num_rows) { 
                                   
                                            foreach($vacacion as $contacto_vacacion) {
                                                $mes_v= Date('m',strtotime($contacto_vacacion['perv_fecha_solicitud']));
                                                
                                               
                                            if( $mes_v==$mes){  ?>

                                            <tr>


                                                <td><?php echo $univeral; ?></td>
                                                <td><?php echo $contacto_vacacion['per_cedula']; ?></td>
                                                <td><?php echo $contacto_vacacion['per_apellidos']; ?></td>
                                                <td><?php echo $contacto_vacacion['perv_fecha_solicitud']; ?></td>
                                                <td><?php echo $contacto_vacacion['perv_fecha_inicio']; ?></td>
                                                <td><?php echo $contacto_vacacion['perv_fecha_fin']; ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo $contacto_vacacion["perv_permiso"]; ?></td>
                                                <td><?php echo 'No aplica'; ?></td>

                                               

                                            </tr>
                                            <?php $univeral++; }
                                             }
                                       } ?>
                                       <?php
                                       //INICIO DEL PRIMER COLOCA PERMISO DE HORAS
                                          $hora_h = obtenerDatosHoras();
                                          $vector_hora = array();
                                          
                                          foreach ($hora_h as $datos_hora) {
                                              $vector_hora [] = $datos_hora;
                                             
                                          }
                                          $contador_hora =sizeof($vector_hora)+1;
                                          /*
                                          echo '<hr>';
                                         echo $contador_hora =sizeof($vector_hora);
                                          echo '<hr>';
                                          
                                          echo '<pre>';
                                          var_dump($vector_hora);
                                          echo '</pre>';
                                          */
                                          $mes = Date('m');
                                         // $contador_v =$contador_vacacion;
                                          
                                          

                                          if($hora_h->num_rows) { 
                                   
                                            foreach($hora_h as $contacto_hora) {
                                                $mes_h= Date('m',strtotime($contacto_hora['perh_fecha_inicio']));
                                                
                                               
                                            if( $mes_h==$mes){  ?>

                                            <tr>


                                                <td><?php echo $univeral; ?></td>
                                                <td><?php echo $contacto_hora['per_cedula']; ?></td>
                                                <td><?php echo $contacto_hora['per_apellidos']; ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo 'No aplica' ?></td>
                                                <td><?php echo $contacto_hora['perh_fecha_inicio']; ?></td>
                                                <td><?php echo $contacto_hora['perh_hora_inicio']; ?></td>
                                                <td><?php echo $contacto_hora['perh_hora_final']; ?></td>
                                                <td><?php echo $contacto_hora["perh_permiso"]; ?></td>
                                                <td><?php $condicion_h= !empty($contacto_salud['perh_adjunto']) ?  'Si': 'No' ; echo $condicion_h;?></td>

                                               

                                            </tr>
                                            <?php $univeral++; }
                                             }
                                       } ?>
                                       <!--
                                       <tr>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                       </tr>
                                       -->



                                               
                                               
                                            </tbody>


                                 



                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 
                        <div class="col-lg-6">

                          
                        </div>
                        -->
                        <!-- /.row -->
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
                <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0-rc
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../jquery/jquery.min.js"></script>
        <!-- Bootstra -->
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="../dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="../chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard3.js"></script>
        <!--INICIO DE LOS SCRIPTS PARA LA TABLA-->
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
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
        <!-- AdminLTE App 
        <script src="dist/js/adminlte.min.js"></script>
         AdminLTE for demo purposes 
        <script src="dist/js/demo.js"></script>
        -->


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
        </script>
</body>

</html>