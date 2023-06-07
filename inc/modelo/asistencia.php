<?php
$fecha =$_POST['fecha'];
$cliente = $_POST['cliente'];
$fechaBd= Date('Y-m-d', strtotime($fecha));
$controlador=0;
$estado='asiste';
$dia =1;

function obtenerFechaFinal( $clienteP) {
    include 'conexion.php';
    try{
         return $conn->query("SELECT asis_fecha_asistencia FROM tbl_asistencia  WHERE id_persona_a = $clienteP ");
    } catch(Exception $e) {
         echo "Error!!" . $e->getMessage() . "<br>";
         return false;
    }
}
function obtenerFechaRestricion( $id) {
    include 'conexion.php';
    try{
         return $conn->query("SELECT resfe_fecha FROM tbl_restriccion_fecha  WHERE id_restriccion   = $id ");
    } catch(Exception $e) {
         echo "Error!!" . $e->getMessage() . "<br>";
         return false;
    }
}
function obtenerHoraVacacion( $id_restriccion) {
    include 'conexion.php';
    try{
         return $conn->query("SELECT hvac_hora_vacacion FROM tbl_hora_vacacion  WHERE id_restriccion = $id_restriccion ");
    } catch(Exception $e) {
         echo "Error!!" . $e->getMessage() . "<br>";
         return false;
    }
}
$id_res = 2;
$hora_final =obtenerHoraVacacion($id_res);
if ($hora_final->num_rows >0) {
     //valida si existe hora de vacacion en la base datos 
    foreach($hora_final  as $finalHora){
        $hora_extrida =$finalHora['hvac_hora_vacacion'];
              
    }
    if ($hora_extrida >0) {
       // valida las fechas que no se puede registrar la asistencia 
       $restriccion =obtenerFechaRestricion(1);
       $fecha_restriccion ='d-m-yy';
       foreach ($restriccion as $restricciones ) {
          $arreglo_fechas[]= $restricciones['resfe_fecha'];
          if ($restricciones['resfe_fecha']== $fechaBd) {
               $fecha_restriccion =$restricciones['resfe_fecha'];
          }
          
       }
       if ($fecha_restriccion =='d-m-yy') {
            //valida si existe fechas en la base de datos 
            $final =obtenerFechaFinal( $cliente);
            if ($final ->num_rows > 0) {
               foreach($final as $finalDos){
                    $fechaFF =$finalDos['asis_fecha_asistencia'];
       
       
          
                       }
               if ($fechaFF == $fechaBd) {
                    $respuesta = array(
                         'respuesta' => 'existe fecha',
                         'fecha '=>$fecha_restriccion 
                         
                         
                        
                       );
               } else {
                    //puede insertar si existe mas fecha pero no del dia
                    try {
                         include "conexion.php";
                         $stmt = $conn->prepare("INSERT INTO tbl_asistencia(asis_fecha_asistencia,id_persona_a,asis_fecha_hora,asis_fecha_estado,asis_fecha_dia) VALUES (?,?,?,?,?)");
                         $stmt->bind_param("siisd",$fechaBd,$cliente,$hora_extrida,$estado,$dia);
                         $stmt->execute();
                     
                         if($stmt->affected_rows > 0) {
                             $respuesta = array(
                                   'respuesta' => 'fecha registrada',
                                                   
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
                       
                 
            } else {
                 //inserta en la base porque no hay registros
                 try {
                    include "conexion.php";
                    $stmt = $conn->prepare("INSERT INTO tbl_asistencia(asis_fecha_asistencia,id_persona_a,asis_fecha_hora,asis_fecha_estado,asis_fecha_dia) VALUES (?,?,?,?,?)");
                    $stmt->bind_param("siisd",$fechaBd,$cliente,$hora_extrida,$estado,$dia);
                    $stmt->execute();
                
                    if($stmt->affected_rows > 0) {
                        $respuesta = array(
                              'respuesta' => 'fecha registrada',
                                              
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
            

          
       } else {
          $respuesta = array(
               'respuesta' => 'no es posible',
               'fecha '=>$fecha_restriccion 
               
               
              
             );
       }
       

       
      
     

      
              
      /////////////FIN DE LA VALIDACION DE LA HORA DE VACACIONES INGRESADA POR EL DOCENTE DE TALENTO HUMANO  
    } else {
        $respuesta = array(
            'respuesta' => 'NO PUEDE INGRESAr',
            'hora' => $hora_extrida
            
           
       );
    }
    


} else {
    $respuesta = array(
        'respuesta' => 'docente no agrego hora',
        
       
   );
}
  

echo json_encode($respuesta);