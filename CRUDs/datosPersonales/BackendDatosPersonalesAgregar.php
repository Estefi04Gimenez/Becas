<?php

require '../conexion.php';
require '../funciones.php';

$id_personal = $_POST['id_personal'];
$id_usuario = $_POST['id_usuario'];
$genero = $_POST['genero'];
$fch_nacimiento = $_POST['fch_nacimiento'];
$tel = $_POST['tel'];
$cuil = $_POST['cuil'];
$fotocopia_dni = $_POST['fotocopia_dni'];
$expediente_anses = $_POST['expediente_anses'];
$certificado_nac = $_POST['certificado_nac'];
$certificado_domicilio = $_POST['certificado_domicilio'];
$domicilio = $_POST['domicilio'];
$estado_academico = $_POST['estado_academico'];
$fch_modificacion = $_POST['fch_modificacion'];


$valida=0;

if (valida_texto($genero,1)==false){
    $valida=1;
}
if (valida_texto($tel,50)==false){
    $valida=1;
}
if (valida_texto($cuil,12)==false){
    $valida=1;
}
if (valida_texto($fotocopia_dni,500)==false){
    $valida=1;
}
if (valida_texto($certificado_nac,500)==false){
    $valida=1;
}
if (valida_texto($certificado_domicilio,500)==false){
    $valida=1;
}
if (valida_texto($domicilio,200)==false){
    $valida=1;
}
if (valida_texto($estado_academico, 11)==false){
    $valida=1;
}



if($valida==0){
    $q = "INSERT INTO tutores (`genero`, `fch_nacimiento`, `tel`, `cuil`, `fotocopia_dni`, `expediente_anses`, `certificado_nac`, `certificado_domicilio`, `domicilio`, `estado_academico`, `fch_modificacion`) VALUES ('$genero','$fch_nacimiento','$tel','$cuil','$fotocopia_dni','$expediente_anses','$certificado_nac','$certificado_domicilio','$domicilio','$estado_academico',CURRENT_DATE())";
    $r = mysqli_query($con,$q);
  
    }
    else{
        $r = '0';
    }


 echo $r;


?>