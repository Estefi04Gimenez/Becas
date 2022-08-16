<?php

require 'conexion.php';

$id = $_POST['idEdit'];
$nom = $_POST['nombreEdit'];
$apellido = $_POST['apellidoEdit'];
$tel = $_POST['telefonoEdit'];
$fecha_nac = $_POST['fecha_nacEdit'];
$Sexo = $_POST['sexoEdit'];





$q = "UPDATE alumnos3 SET nombre='$nom',apellido='$apellido',tel='$tel',fecha_de_nacimiento='$fecha_nac',sexo='$Sexo' WHERE id_alumno = '$id'";

echo mysqli_query($con, $q);


?>
