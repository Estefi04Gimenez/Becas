<?php

require 'conexion.php';


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






$q = "INSERT INTO tutores (`nombre_completo`, `fotocpia_dni`, `dni`, `tel`, `email`, `expediente_anses`, `domicilio`, `cuil`, `id_ocupacion`, `certificado_haberes`, `fch_modificacion`) VALUES ('$nombre_completo','$fotocpia_dni','$dni','$tel','$email','$expediente_anses','$domicilio','$cuil','$id_ocupacion','$certificado_haberes',CURRENT_DATE())";

echo mysqli_query($con, $q);





















































/*$alumnos3 = $_POST['alumnos3'];
$opcion = $_POST['opcion'];

$q = "select * from alumnos3 where UPPER(nombre) like '%" . strtoupper($alumnos3) . "%'";
//$q = "select * from alumnos3";



if($opcion == 1)
{
  $q = $q."ORDER BY fecha_de_nacimiento ASC";
}
if($opcion == 2)
{
  $q = $q."ORDER BY fecha_de_nacimiento DESC";
}
if($opcion == 3)
{
  $q = $q."ORDER BY id_alumno ASC";
}
if($opcion == 4)
{
  $q = $q."ORDER BY id_alumno DESC";
}

$r = mysqli_query($con, $q);
//se arma un array asociativo(nombre campo , valor) que despues se
//va a trasformar en un json para devolver

if (mysqli_num_rows($r) > 0){
  
  while ($valores = mysqli_fetch_assoc($r)){
     $array[]= $valores;
     //echo($array[1]);
    }
    //envio respuesta a ajax como json
    echo (json_encode($array)); 
    
    
  }

  

 

mysqli_close($con);


*/
?>
