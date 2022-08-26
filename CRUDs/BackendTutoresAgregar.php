<?php

require 'conexion.php';
require 'funciones.php';

$nombre_completo = $_POST['nombre_completo'];
$fotocpia_dni = $_POST['fotocpia_dni'];
$dni = $_POST['dni'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$expediente_anses = $_POST['expediente_anses'];
$domicilio = $_POST['domicilio'];
$cuil = $_POST['cuil'];
$id_ocupacion = $_POST['id_ocupacion'];
$certificado_haberes = $_POST['certificado_haberes'];
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
    $q = "INSERT INTO tutores (`nombre_completo`, `fotocpia_dni`, `dni`, `tel`, `email`, `expediente_anses`, `domicilio`, `cuil`, `id_ocupacion`, `certificado_haberes`, `fch_modificacion`) VALUES ('$nombre_completo','$fotocpia_dni','$dni','$tel','$email','$expediente_anses','$domicilio','$cuil','$id_ocupacion','$certificado_haberes',CURRENT_DATE())";
    $r = mysqli_query($con,$q);
  
    }
    else{
        $r = '0';
    }





if (valida_texto($nombre_completo, 255))






 echo $r;


?>