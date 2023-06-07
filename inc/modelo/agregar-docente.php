<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$contraseña = $_POST['contraseña'];
$instituto = $_POST['instituto'];
$carrera = $_POST['carrera'];
$puesto = $_POST['puesto'];
$rol=0;


if ($puesto==="docente") {
    $rol=2;
}
else {
    $rol=1;
}
$observacion = $_POST['observacion'];
$opciones = array(
    'cost' => 12
);
$hash_password = password_hash($contraseña, PASSWORD_BCRYPT, $opciones);


//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

/*
$datos = array(
    'nombre' => $nombre,
    'apellido' => $apellido,
    'telefono' => $telefono,
    'direccion' => $direccion

);
echo json_encode($datos);
*/
//var_dump($datos);

/*$nombre ='pedro' ;
$apellido = 'galarza' ;
$correo = 'ytrtryt@gmail.com' ;
$telefono ='2783875' ;
$direccion = 'esquina y la que cruza' ;
$sugerencia = 'vender tablets ' ;
*/



try {
    include "conexion.php";
    $stmt = $conn->prepare("INSERT INTO tbl_persona(per_nombres,per_apellidos,per_correo,per_cedula,per_contraseña,per_instituto,per_carrera,per_observacion,per_puesto,id_rol) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssi",$nombre,$apellido,$correo,$cedula,$hash_password,$instituto,$carrera,$observacion,$puesto,$rol);
    $stmt->execute();
    if($stmt->affected_rows > 0) {
         $respuesta = array(
              'respuesta' => 'correcto',
              
             
         );
    }
    else {
        $respuesta = array(
            'respuesta' => 'incorrecto',
           
           
       );
        
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e) {
    $respuesta = array(
        'error' => $e->getMessage()
    );
}
    
echo json_encode($respuesta);


?>


