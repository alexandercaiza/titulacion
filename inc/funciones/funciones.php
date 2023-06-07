<?php
//FUNCIONES PARA EL ADMINISTRAR PARA CAMBIAR LOS ESTADOS DE PERMISOS
function obtenerPermisosHoras() {
    include '../inc/modelo/conexion.php';
try{
     return $conn->query("SELECT * FROM tbl_persona INNER JOIN  tbl_permiso_horas ON tbl_persona.id_persona=tbl_permiso_horas.id_persona_h");
} catch(Exception $e) {
     echo "Error!!" . $e->getMessage() . "<br>";
     return false;
}
    
}
function obtenerPermisoCalamidad() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT * FROM tbl_persona INNER JOIN  tbl_permiso_calamidad ON tbl_persona.id_persona=tbl_permiso_calamidad.id_persona_c");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
     
 
 
 
 
 
 }

 function obtenerPermisoSalud() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT * FROM tbl_persona INNER JOIN  tbl_permiso_salud ON tbl_persona.id_persona=tbl_permiso_salud.id_persona_s ");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
     
 
 
 
 
 
 }
 
 //FUNCIONES PARA OBTENER EL ESTADO DE PERMISOS PARA LOS DOS USUARIOS
 function obtenerEstadoSalud($id) {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query(" SELECT * FROM tbl_permiso_salud WHERE tbl_permiso_salud.id_persona_s=$id ");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
     
 
 
 
 
 
 }
 function obtenerEstadoCalamidad($id) {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query(" SELECT * FROM tbl_permiso_calamidad WHERE tbl_permiso_calamidad.id_persona_c=$id");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
     
 
 
 
 
 
 }
 function obtenerEstadoHora($id) {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query(" SELECT * FROM tbl_permiso_horas WHERE tbl_permiso_horas.id_persona_h=$id");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
     
 
 
 
 
 
 }
 //  FUNCION PARA PERMISO DE VACACIONES 
 function obtenerEstadoActual($id) {
     include 'conexion.php';
 try{
      return $conn->query("SELECT tbl_permiso_vacacion.perv_estado FROM tbl_permiso_vacacion WHERE tbl_permiso_vacacion.id_persona_pv=$id");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }
 //FUNCION PARA CARGAR LAS TABLAS DE LOS REPORTES
 function obtenerDatosNomina() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT tbl_persona.id_persona, tbl_persona.per_apellidos, tbl_persona.per_nombres,tbl_persona.per_cedula, tbl_persona.per_puesto, tbl_persona.per_instituto,tbl_persona.per_observacion,tbl_persona.per_correo, SUM(tbl_asistencia.asis_fecha_dia) AS sumar FROM tbl_persona INNER JOIN tbl_asistencia ON tbl_persona.id_persona=tbl_asistencia.id_persona_a GROUP BY tbl_persona.id_persona");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }
 function obtenerDatosVacacion() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT tbl_persona.per_cedula, tbl_persona.per_apellidos, tbl_permiso_vacacion.perv_fecha_solicitud, tbl_permiso_vacacion.perv_fecha_inicio, tbl_permiso_vacacion.perv_fecha_fin, tbl_permiso_vacacion.perv_permiso FROM tbl_persona INNER JOIN tbl_permiso_vacacion ON tbl_persona.id_persona=tbl_permiso_vacacion.id_persona_pv");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }
 function obtenerDatosSalud() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT tbl_persona.per_cedula, tbl_persona.per_apellidos, tbl_permiso_salud.pers_fecha_solicitud, tbl_permiso_salud.pers_fecha_inicio, tbl_permiso_salud.pers_fecha_fin, tbl_permiso_salud.pers_permiso, tbl_permiso_salud.pers_adjunto FROM tbl_persona INNER JOIN tbl_permiso_salud ON tbl_persona.id_persona=tbl_permiso_salud.id_persona_s");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }
 function obtenerDatosHoras() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT tbl_persona.per_cedula, tbl_persona.per_apellidos, tbl_permiso_horas.perh_fecha_inicio,tbl_permiso_horas.perh_hora_inicio, tbl_permiso_horas.perh_hora_final, tbl_permiso_horas.perh_permiso, tbl_permiso_horas.perh_adjunto FROM tbl_persona INNER JOIN 	tbl_permiso_horas ON tbl_persona.id_persona=tbl_permiso_horas.id_persona_h");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }
 function obtenerDatosCalamidad() {
     include '../inc/modelo/conexion.php';
 try{
      return $conn->query("SELECT tbl_persona.per_cedula, tbl_persona.per_apellidos, tbl_permiso_calamidad.perc_fecha_solicitud, tbl_permiso_calamidad.perc_fecha_inicio,tbl_permiso_calamidad.perc_fecha_fin, tbl_permiso_calamidad.perc_permiso, tbl_permiso_calamidad.perc_adjunto from tbl_persona INNER JOIN tbl_permiso_calamidad ON tbl_persona.id_persona=tbl_permiso_calamidad.id_persona_c");
 } catch(Exception $e) {
      echo "Error!!" . $e->getMessage() . "<br>";
      return false;
 }
   
 
 }


 ?>



