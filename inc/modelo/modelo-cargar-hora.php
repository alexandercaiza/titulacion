<?php
$hora = (int) $_POST['hora'];
$tipo =2;


    
function obtenerTareasProyecto() {
    include 'conexion.php';
    try {
        return $conn->query("SELECT hvac_hora_vacacion  FROM tbl_hora_vacacion");
    } catch(Exception $e) {
        echo "Error! : " . $e->getMessage();
        return false;
    }
}
$validacion =obtenerTareasProyecto();
if ($validacion->num_rows > 0) {
    $respuesta = array(
        'respuesta' => 'no',
        
    );
    
} else {
    try {
        include "conexion.php";
        $stmt = $conn->prepare("INSERT INTO tbl_hora_vacacion(hvac_hora_vacacion,id_restriccion) VALUES (?,?)");
        $stmt->bind_param("ii",$hora,$tipo);
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
}
    
echo json_encode($respuesta);


?>


