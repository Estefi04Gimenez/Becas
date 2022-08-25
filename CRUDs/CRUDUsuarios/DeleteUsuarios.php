<?php
require 'conexion.php';

$id = $_POST['idUD'];
$nomComp = $_POST['nombreCompletoUD'];
$dni = $_POST['dniUD'];
$email = $_POST['emailUD'];
$contra = $_POST['contrasennaUD'];
$tipo = $_POST['tipoUsuarioUD'];





$q = "DELETE FROM usuarios WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>