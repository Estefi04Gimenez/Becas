<?php
require '../conexion.php';
$letra = $_POST['letra'];
$opcion = $_POST['opcion'];

$q = "SELECT * FROM tutores WHERE UPPER(nombre_completo) LIKE '%" . strtoupper($letra) . "%'";
//$q = "select * from alumnos3";


/*
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
*/
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



?>
