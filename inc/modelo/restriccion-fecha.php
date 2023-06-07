<?php
$fecha =$_POST['fecha'];
$fecha_valida=Date('Y-m-d',strtotime($fecha));
$tipo =1;

function obtenerFecha($fechaP) {
     include 'conexion.php';
     try{
          return $conn->query("SELECT resfe_fecha FROM tbl_restriccion_fecha  WHERE resfe_fecha = $fechaP");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}
$validacion = obtenerFecha($fecha_valida);
if ($validacion) {
     $respuesta = array(
          'respuesta' => 'no',
          'fecha' => $validacion,
          
     );
} else {
     try {
          include 'conexion.php';
         $stmt = $conn->prepare("INSERT INTO tbl_restriccion_fecha (resfe_fecha,id_restriccion) VALUES (?,?)");
         $stmt->bind_param("si", $fecha_valida,$tipo);
         $stmt->execute();
         if($stmt->affected_rows == 1) {
              $respuesta = array(
                   'respuesta' => 'correcto',
                   'fecha' => $fecha,
                   'fecha_valida' => $fecha_valida
                   
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