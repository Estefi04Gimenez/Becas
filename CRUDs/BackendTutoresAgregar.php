<?php

require 'conexion.php';
require 'funciones.php';

$nombre_completo = $_POST['nombre_completo'];
$dni = $_POST['dni'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$domicilio = $_POST['domicilio'];
$cuil = $_POST['cuil'];
$id_ocupacion = $_POST['id_ocupacion'];
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
if (valida_dni($dni)==true){
    $valida=1;
}
if (valida_email($email)==true){
    $valida=1;
}



if($valida==0){
    $q = "INSERT INTO tutores (`nombre_completo`, `dni`, `tel`, `email`, `domicilio`, `cuil`, `id_ocupacion`, `fch_modificacion`) VALUES ('$nombre_completo','$dni','$tel','$email','$domicilio','$cuil','$id_ocupacion',CURRENT_DATE())";
    $r = mysqli_query($con,$q);
  
    }
    else{
        $r = '0';
    }





if (valida_texto($nombre_completo, 255))


 echo $r;


?>