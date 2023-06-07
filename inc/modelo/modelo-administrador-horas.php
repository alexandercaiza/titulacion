<?php 
/// Variables de las solicitudes de horas 
$hora_id = $_POST['id'];
$estado = $_POST['estado'];
// datos que se pasan 
/*
$cliente =$_POST['cliente'];
$total_hora = (float)$_POST['hora'];  
$fechaBd = Date('Y-m-d');
$hora_extrida=23;


$estado='falto';
$dia=$total_hora/12;
$dia_final = number_format($dia, 1);
*/
///////////////////////////////////
if ($estado=='aceptada') {
     try{
          include 'conexion.php';
          $stmt = $conn->prepare("UPDATE tbl_permiso_horas SET perh_estado= ? WHERE id_permiso_horas = ?");
          $stmt->bind_param("si", $estado, $hora_id );
          $stmt->execute();
          if($stmt->affected_rows == 1){
               $respuesta = array(
                    'respuesta' => 'solicitud aceptada'
               );
          } else {
               $respuesta = array(
                    'respuesta' => 'error '
               );
          }
          $stmt->close();
          $conn->close();
      } catch(Exception $e){
          $respuesta = array(
               'error' => $e->getMessage()
          );
      }
}
if ($estado=='rechazada') {
     $cliente =$_POST['cliente'];
     $total_hora = (float)$_POST['hora'];   
     try{
          include 'conexion.php';
          $stmt = $conn->prepare("UPDATE tbl_permiso_horas SET perh_estado= ? WHERE id_permiso_horas = ?");
          $stmt->bind_param("si", $estado, $hora_id );
          $stmt->execute();
          if($stmt->affected_rows == 1){
               $respuesta = array(
                    'respuesta' => 'solicitud rechazada'
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
      /////Inserta en la tabla no asistencia por horas
      $fechaBd = Date('Y-m-d');
      $hora_extrida=23;
      
      
      $estado='falto';
      $dia=$total_hora/12;
      $dia_final =number_format($dia,1);
      try {
          include "conexion.php";
          $stmt = $conn->prepare("INSERT INTO tbl_asistencia(asis_fecha_asistencia,id_persona_a,asis_fecha_hora,asis_fecha_estado,asis_fecha_dia) VALUES (?,?,?,?,?)");
          $stmt->bind_param("siisd",$fechaBd,$cliente,$hora_extrida,$estado,$dia_final);
          $stmt->execute();
      
          if($stmt->affected_rows > 0) {
               $respuesta = array(
                    'respuestaDos' => 'ingreo no asistencia',
                    'respuesta' => 'solicitud rechazada'
                                    
               );
              
          }
          else {
          
              $respuesta = array(
                  'respuesta' => 'incorrecto rechazo',
                 
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


   

echo json_encode ($respuesta);


?>