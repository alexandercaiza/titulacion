<?php
$fecha_solicitud = Date ('Y-m-d', strtotime($_POST['fecha-solicitud'])) ;
$hora_inicio = $_POST['hora-inicio'];
$hora_final = $_POST['hora-final'];
$concepto = $_POST['concepto'];
$cliente = $_POST['cliente'];
$link = $_POST['link'];
$hora_inicio_numero = $_POST['hora-inicio-num'];
$hora_final_numero = $_POST['hora-final-num'];
$hora_inicio_letra = $_POST['hora-inicio-letra'];
$hora_final_letra = $_POST['hora-final-letra'];
$permiso='hora';
date_default_timezone_set('America/Lima');
$estado ='proceso';
$fecha_actual = Date ('d-m-Y');
$hora_inicio_total = $_POST['hora-inicio-completa'];
$hora_final_total = $_POST['hora-final-completa'];

$hora_uno = strtotime($hora_inicio_total);
$hora_dos = strtotime($hora_final_total);
$total = ($hora_dos - $hora_uno) /60 /60; 
$total_final = number_format((float)$total, 1);
$hora_base = (float)$total_final;
$hora_b=$hora_base;

/*
$respuesta = array(
    'hora inicio'=>$hora_inicio_total,
    'hora final'=>$hora_final_total,
    'hora en segundo uno'=>$hora_uno,
    'hora en segundo dos'=>$hora_dos,
    'hora final'=>$total,
    'hora final final'=>$total_final,
    'hora a la base'=>$tipo
    
    );

$respuesta = array(
'fecha solicitud '=>$fecha_solicitud,
'hora inicio'=>$hora_inicio,
'hora final'=>$hora_final,
'concepto'=>$concepto,
'hora inicio numero'=>$hora_inicio_numero,
'hora final numero'=>$hora_final_numero,
'hora inicio letra'=>$hora_inicio_letra,
'hora final letra'=>$hora_final_letra

);
*/


$comparar_fecha = date_diff(date_create($fecha_actual), date_create($fecha_solicitud),false);
$comparar_array = array();
foreach ($comparar_fecha as $dato) {
    $comparar_array[] = $dato;
}
$comparar_num =  $comparar_array[10];
if (!$comparar_num ==1) {
   if ($hora_inicio_letra == $hora_final_letra) {
    if ($hora_final_numero > $hora_inicio_numero) {
        try {
            include "conexion.php";
            $stmt = $conn->prepare("INSERT INTO tbl_permiso_horas(perh_fecha_inicio,perh_hora_inicio,perh_hora_final,perh_hora_total,perh_adjunto,perh_observacion,perh_estado,id_persona_h,perh_permiso) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssdsssis",$fecha_solicitud,$hora_inicio,$hora_final,$hora_b,$link,$concepto,$estado,$cliente,$permiso);
            $stmt->execute();
            if($stmt->affected_rows > 0) {
                 $respuesta = array(
                      'respuesta' => 'correcto',
                      'hora de la base'=>$hora_b,
                      
                     
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



    } else {
        $respuesta = array(
            'respuesta'=>'hora no valida'
            
            
            
                );
    }
    
   } 
   else {
    try {
        include "conexion.php";
        $stmt = $conn->prepare("INSERT INTO tbl_permiso_horas(perh_fecha_inicio,perh_hora_inicio,perh_hora_final,perh_hora_total,perh_adjunto,perh_observacion,perh_estado,id_persona_h,perh_permiso) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssdsssis",$fecha_solicitud,$hora_inicio,$hora_final,$hora_b,$link,$concepto,$estado,$cliente,$permiso);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
             $respuesta = array(
                  'respuesta' => 'correcto',
                  'hora de la base'=>$hora_b,
                  
                 
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
'respuesta'=>'fecha no valida'



    );
}





echo json_encode($respuesta);





?>