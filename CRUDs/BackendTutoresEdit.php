<?php

require 'conexion.php';
require 'funciones.php';

$id = $_POST['idAV'];
$nombre_completo = $_POST['nombre_completoAV'];
$fotocpia_dni = $_POST['fotocpia_dniAV'];
$dni = $_POST['dniAV'];
$tel = $_POST['telAV'];
$email = $_POST['emailAV'];
$expediente_anses = $_POST['expediente_ansesAV'];
$domicilio = $_POST['domicilioAV'];
$cuil = $_POST['cuilAV'];
$id_ocupacion = $_POST['id_ocupacionAV'];
$certificado_haberes = $_POST['certificado_haberesAV'];
$valida=0;

if (valida_texto($nombre_completo,255)==false){
    $valida=1;
}
if (valida_texto($fotocpia_dni,500)==false){
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
if (valida_texto($expediente_anses,500)==false){
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
if (valida_texto($certificado_haberes,500)==false){
    $valida=1;
}


if($valida==0){
    $q = "UPDATE tutores SET nombre_completo='$nombre_completo',fotocpia_dni='$fotocpia_dni',dni='$dni',tel='$tel',email='$email',expediente_anses='$expediente_anses',domicilio='$domicilio',cuil='$cuil',id_ocupacion='$id_ocupacion',certificado_haberes='$certificado_haberes' WHERE id_tutor = '$id'";
    $r = mysqli_query($con,$q);
  
    }
    else{
        $r = '0';
    }





if (valida_texto($nombre_completo, 255))






 echo $r;


?>