<?php
$hora = (int) $_POST['hora'];
$tipo =2;
if ($hora>0) {
    function obtenerTareasProyecto() {
        include 'conexion.php';
        try {
            return $conn->query("SELECT id_hora_vacacion,hvac_hora_vacacion  FROM tbl_hora_vacacion");
        } catch(Exception $e) {
            echo "Error! : " . $e->getMessage();
            return false;
        }
    }
    $validacion =obtenerTareasProyecto();
    if ($validacion->num_rows > 0) {
       foreach($validacion as $validar){
        $id =$validar['id_hora_vacacion'];
        $hora_antigua =$validar['hvac_hora_vacacion'];
    
    
       }
       try{
        include 'conexion.php';
        $stmt = $conn->prepare("UPDATE tbl_hora_vacacion SET hvac_hora_vacacion = ? WHERE id_hora_vacacion = ?");
        $stmt->bind_param("ii", $hora,  $id, );
        $stmt->execute();
        if($stmt->affected_rows == 1){
             $respuesta = array(
                  'respuesta' => 'actualizado'
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
      
       
      /*
       $respuesta = array(
        'respuesta' => 'no',
        'id' => $id ,
        'horaBD' => $hora_antigua
        
      );
       */
      
    } else {
        $respuesta = array(
            'respuesta' => 'no hay registro',
            
        );
       
    }
} else {
    $respuesta=array(
        'respuesta' =>'letra'



    );
}


    

    
echo json_encode($respuesta);


?>

