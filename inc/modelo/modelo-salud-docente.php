<?php
$fecha_solicitud = Date('Y-m-d', strtotime($_POST['fecha-solicitud']) );
$fecha_inicio = Date('Y-m-d', strtotime($_POST['fecha-inicio'])) ;
$fecha_final =  Date('Y-m-d', strtotime($_POST['fecha-final'])) ;
$cliente =$_POST['cliente'];
$link = $_POST['link'];
$estado ='proceso';
$permiso ='salud';
//date_default_timezone_set ( "America/Lima");
//$fecha =Date("d-m-Y");
//$fecha_actual = Date()
// validar que la fecha sea mayor que la solicitud
date_default_timezone_set('America/Lima');
$fecha_solicitud_compa= date_create($_POST['fecha-solicitud']) ;
$fecha_inicio_compa=   date_Create($_POST['fecha-inicio']) ;

$fecha_inicio_p =date_diff($fecha_solicitud_compa  , $fecha_inicio_compa ,false);
$fecha_array = array();
foreach ($fecha_inicio_p as $vector ) {
    $fecha_array[] =$vector;
}
$comparacion_invert_inicial = $fecha_array[10];
//validar que la fecha final sea mayor que la solicitud
date_default_timezone_set('America/Lima');
$fecha_solicitud_compa= date_create($_POST['fecha-solicitud']) ;
$fecha_final_compa=   date_Create($_POST['fecha-final']) ;

$fecha_final_p =date_diff($fecha_solicitud_compa , $fecha_final_compa,false );
$fecha_array_dos = array();
foreach ($fecha_final_p as $vector ) {
    $fecha_array_dos[] =$vector;
}
$comparacion_invert_final = $fecha_array_dos[10];

//comparar que la fecha final sea mayor que la fecha inicial
date_default_timezone_set('America/Lima');
$fecha_prueba_uno = date_create($_POST['fecha-inicio']);
$fecha_prueb_dos = date_create($_POST['fecha-final']);

$comparacion_ultima = date_diff($fecha_prueba_uno  ,$fecha_prueb_dos,false);
$nuevo_vector=array();
foreach ($comparacion_ultima as $datos) {

    $nuevo_vector[] =$datos; 
} 
$comparar_invert_ultimo=$nuevo_vector[10];

if (!$comparacion_invert_inicial == 1 && !$comparacion_invert_final==1 && !$comparar_invert_ultimo ==1 ) {

    $dia_total = date_diff(date_create($_POST['fecha-inicio']), date_create($_POST['fecha-final']));
    $total = array();
    foreach ($dia_total as $tot) {
        $total[] =  $tot;
    }
    $respuesta = array(
    'dias'=>$total[2]
    );
    $final_total =$total[2];
    try {
        include "conexion.php";
        $stmt = $conn->prepare("INSERT INTO tbl_permiso_salud(pers_fecha_solicitud,pers_fecha_inicio,pers_fecha_fin,per_total_dia,pers_adjunto,pers_estado,id_persona_s,pers_permiso) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssissis",$fecha_solicitud, $fecha_inicio, $fecha_final, $final_total, $link, $estado, $cliente,$permiso);
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

   
    
} else {
    $respuesta = array(
        'respuesta'=>'fechas no validas'
        
                
        );
}
/*

$respuesta = array(
'fecha inicio'=>$fecha_inicio,
'fecha solicitud'=>$fecha_solicitud, 
'fecha-final'=>$fecha_final,
'cliente'=>$cliente,
'fecha-comparacion '=>$fecha_inicio_p,
'fecha-en array'=>$fecha_array,
'fecha-comparacion dos '=>$fecha_final_p,
'fecha-en array dos'=>$fecha_array_dos,
'numero inicio'=>$comparacion_final_inicio,
'numero final'=>$comparacion_final_final  

);
*/
echo json_encode($respuesta);