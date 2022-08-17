<?php

require 'conexion.php';

$id = $_POST['idEdit'];
$nom_comp = $_POST['nombreCompletoEdit'];
$dni = $_POST['dniEdit'];
$email = $_POST['emailEdit'];
$contra = $_POST['contrasennaEdit'];
$tipo = $_POST['tipoUsuarioEdit'];





$q = "UPDATE usuarios SET nombre_completo='$nom_comp',email='$email',dni='$dni',contrasenna='$contra',tipo_usuario='$tipo' WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>
