<?php

include('conexion.php');

$fileContacts = $_FILES['fileContacts']; 
$fileContacts = file_get_contents($fileContacts['tmp_name']); 

$fileContacts = explode("\n", $fileContacts);
$fileContacts = array_filter($fileContacts); 
//print_r($fileContacts);
unset($fileContacts[0]);
// Transformando el admin a hash; la contraseña
$opciones = array(
    'cost' => 12
);



foreach ($fileContacts as $value) {
    $palabra='admin';
    $hash_password = password_hash($palabra, PASSWORD_BCRYPT, $opciones);

    $fileContactss [] =str_replace('admin',$hash_password,$value);
}
//print_r($fileContactss);
// preparar contactos (convertirlos en array)

foreach ($fileContactss as $contact) 
{
    $contactList[] = explode(",", $contact );
    
    
}

//unset($contactList[0]);
print_r($contactList);

// insertar contactos

foreach ($contactList as $contactData) 
{
    $conn->query("INSERT INTO tbl_persona 
                        (per_nombres,
                        per_apellidos,
                        per_correo,
                        per_cedula,
                        per_contraseña,
                        per_instituto,
                        per_carrera,
                        per_observacion,
                        per_puesto,
                        id_rol)
                         VALUES

                         ('{$contactData[0]}',
                          '{$contactData[1]}', 
                          '{$contactData[2]}',
                          '{$contactData[3]}',
                          '{$contactData[4]}',
                          '{$contactData[5]}',
                          '{$contactData[6]}',
                          '{$contactData[7]}',
                          '{$contactData[8]}',
                          {$contactData[9]}
                           )

                         "); 
}


?>