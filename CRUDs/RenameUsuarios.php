<?php

require 'conexion.php';

$id = $_POST['idUD'];
$nom_comp = $_POST['nombreCompletoUD'];
$dni = $_POST['dniUD'];
$email = $_POST['emailUD'];
$contra = $_POST['contrasennaUD'];
$tipo = $_POST['tipoUsuarioUD'];




$q = "UPDATE usuarios SET nombre_completo='$nom_comp',email='$email',dni='$dni',contrasenna='$contra',tipo_usuario='$tipo' WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>
