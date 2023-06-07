<?php
session_start();

if(isset($_GET['cerrar_sesion'])) {
    $_SESSION = array();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagenes/png" href="favicon.png">
    <title>Talento humano Sucre</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Talento</b>Humano</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Inicio de sesión</p>

                <form id="login" >
                    <div class="input-group mb-3">
                        <input type="number" id="cedula" name="cedula" min="0" class="form-control" placeholder="Cédula">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class=" fas fa-user-alt"></span>

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3" style="visibility: hidden;">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1" style="visibility: hidden;">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0" style="visibility: hidden;">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
     <!--script para el enlace del ajax del login-->
     <script src="js/login.js"></script>
     <script src="js/sweetalert2.all.min.js" crossorigin="anonymous"></script>
    
       
</body>

</html>