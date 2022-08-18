<?php

require 'conexion.php';

$id = $_POST['idAV'];
$nom_comp = $_POST['nombreCompletoAV'];
$dni = $_POST['dniAV'];
$email = $_POST['emailAV'];
$contra = $_POST['contrasennaAV'];
$tipo = $_POST['tipoUsuarioAV'];





$q = "UPDATE usuarios SET nombre_completo='$nom_comp',email='$email',dni='$dni',contrasenna='$contra',tipo_usuario='$tipo' WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>
