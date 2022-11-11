<?php

require '../conexion.php';
require '../funciones.php';

$id = $_POST['idAV'];
$nombre_completo = $_POST['nombre_completoAV'];
$dni = $_POST['dniAV'];
$tel = $_POST['telAV'];
$email = $_POST['emailAV'];
$domicilio = $_POST['domicilioAV'];
$cuil = $_POST['cuilAV'];
$id_ocupacion = $_POST['id_ocupacionAV'];
$valida=0;

if (valida_texto($nombre_completo,255)==false){
    $valida=1;
}
if (valida_texto($dni,11)==false){
    $valida=1;
}
if (valida_texto($tel,255)==false){
    $valida=1;
}
if (valida_texto($email,255)==false){
    $valida=1;
}
if (valida_texto($domicilio,150)==false){
    $valida=1;
}
if (valida_texto($cuil,11)==false){
    $valida=1;
}
if (valida_texto($id_ocupacion,11)==false){
    $valida=1;
}


if($valida==0){
    $q = "UPDATE tutores SET nombre_completo='$nombre_completo',dni='$dni',tel='$tel',email='$email',domicilio='$domicilio',cuil='$cuil',id_ocupacion='$id_ocupacion' WHERE id_tutor = '$id'";
    $r = mysqli_query($con,$q);
  
    }
    else{
        $r = '0';
    }





if (valida_texto($nombre_completo, 255))






 echo $r;


?>