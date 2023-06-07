<?php

$contra = $_POST['contraseña'];
$cliente = $_POST['cliente'];
$opciones = array(
    'cost' => 12
);
$hash_password = password_hash($contra, PASSWORD_BCRYPT, $opciones);
try{
    include 'conexion.php';
    $stmt = $conn->prepare("UPDATE tbl_persona SET per_contraseña= ? WHERE id_persona  = ?");
    $stmt->bind_param("si", $hash_password , $cliente);
    $stmt->execute();
    if($stmt->affected_rows == 1){
         $respuesta = array(
              'respuesta' => 'actualizado password'
         );
    } else {
         $respuesta = array(
              'respuesta' => 'error'
         );
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e){
    $respuesta = array(
         'error' => $e->getMessage()
    );
}

echo json_encode($respuesta);




?>