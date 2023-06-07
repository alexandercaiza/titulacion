  
    <?php
    $cedula = $_POST['cedula'];
    $contraseña = $_POST['contraseña'];
    
    
    
    try {
        // Seleccionar el administrador de la base de datos
        include 'conexion.php';
        $stmt = $conn->prepare("SELECT per_cedula,per_contraseña,id_rol,id_persona FROM tbl_persona WHERE per_cedula = ?");
        $stmt->bind_param('s', $cedula);
        $stmt->execute();
        // Loguear el usuario
        $stmt->bind_result($nombre_cedula,$pass_contraseña ,$id_rol,$id_persona );
        $stmt->fetch();
        if($nombre_cedula){
            // El usuario existe, verificar el password
            if(password_verify($contraseña,$pass_contraseña )){
                // Iniciar la sesion
                session_start();
                $_SESSION['nombre'] = $cedula;
                $_SESSION['id'] = $id_persona;
                $_SESSION['login'] = true;
                // Login correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $nombre_cedula,
                    'id' => $id_persona,
                    'tipo' => $id_rol
                );
            } else {
                // Login incorrecto, enviar error
                $respuesta = array(
                        'resultado' => 'Password Incorrecto'
                );
            }

        } else {
            $respuesta = array(
                'error' => 'Usuario no existe'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        // En caso de un error, tomar la exepcion
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);


?>