<?php
require 'conexion.php';

$id = $_POST['idDelete'];
$nom = $_POST['nombreDelete'];
$apellido = $_POST['apellidoDelete'];
$tel = $_POST['telefonoDelete'];
$fecha_nac = $_POST['fecha_nacDelete'];
$Sexo = $_POST['sexoDelete'];





$q = "DELETE FROM alumnos3 WHERE id_alumno = '$id'";

echo mysqli_query($con, $q);


?>