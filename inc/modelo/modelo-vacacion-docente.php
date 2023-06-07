<?php
include '../funciones/funciones.php';
$cliente = $_POST['cliente'];
$fecha_solicitud = $_POST['fecha-solicitud'];
$fecha_actual =Date('d-m-Y');
// INICIO DE COMPARA FECHA
$comparar = date_diff( date_create($fecha_actual), date_create($fecha_solicitud),false );
$vector_comparar = array();
foreach ($comparar as $dato) {

    $vector_comparar[]= $dato;
}
$validacion = $vector_comparar[10];
$respuesta=array(
    'valor '=>$validacion
);
// FIN  DE COMPARA FECHA
//OBTENER DATOS DE LA TABLA PERSMISO DE VACACION 
// INICIO DE COMPARA FECHA
if($validacion==1){
    $respuesta=array(
    'respuesta '=>'Fecha no valida'
    );
}
else{

$estado_permiso=obtenerEstadoActual($cliente);
if ($estado_permiso->num_rows>0) {
    $respuesta = array(
        'respuesta' => 'tiene solicitud'
    );
    
} else {
    //COMPARAR DE HORAS EXTRADIAS DE LA TABLA ASISTENCIA
    $bandera=0;
    $comparar_array = array();
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
foreach($hora_final  as $finalHora){
    $hora_extrida =$finalHora['hvac_hora_vacacion'];
          
}
$hora_extrida=$hora_extrida/10;
try {
    // Seleccionar el administrador de la base de datos
    include 'conexion.php';
    $stmt = $conn->prepare("SELECT SUM(tbl_asistencia.asis_fecha_dia) AS contar FROM tbl_asistencia WHERE tbl_asistencia.id_persona_a=? GROUP By tbl_asistencia.id_persona_a");
    $stmt->bind_param('i', $cliente);
    $stmt->execute();
    // Loguear el usuario
    $stmt->bind_result($contar_dia );
    $stmt->fetch();
    if($contar_dia){
        $contar_final = (float)$contar_dia;
        $vacacion =$contar_dia*$hora_extrida ;
        $vacacion_final = (int)$vacacion;
       if ($vacacion_final >10) {
        $bandera=1;
       } else {
        $bandera=2;
       }
       


    } else {
        $respuesta = array(
            'error' => 'hubo un error'
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
//COMPARANDO SI TIENE VACACION O NO 
if ($bandera ==1) {
    // calculando las fechas de inicio y fin 
    $fecha_solicitud_f = Date('Y-m-d',strtotime($fecha_solicitud) );
    $fecha_solicitud_u = strtotime($fecha_solicitud_f);
    $total_dias =$vacacion_final;
    $frase = '+'.$total_dias.'day';
    $frase_final =(string)$frase;
    $fecha_final_c = strtotime($frase_final,$fecha_solicitud_u);
    $fecha_final_b =Date('Y-m-d',$fecha_final_c);
    $estado_vacacion='aceptada';
    $tipo_permiso ='vacacion';
   

    // fin del calculo de las fechas de inicio y fin
    //Insertar en la base de datos
    try {
        include "conexion.php";
        $stmt = $conn->prepare("INSERT INTO tbl_permiso_vacacion(perv_fecha_solicitud,perv_fecha_inicio,perv_fecha_fin,perv_estado,perv_permiso,id_persona_pv) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$fecha_solicitud_f,$fecha_solicitud_f,$fecha_final_b,$estado_vacacion,$tipo_permiso,$cliente);
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

    
} else if($bandera ==2) {
    $respuesta = array(
        'respueta' => 'no vacacion'
    );
}



}


}


echo json_encode($respuesta);


?>