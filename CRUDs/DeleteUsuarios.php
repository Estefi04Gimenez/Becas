<?php
require 'conexion.php';

$id = $_POST['idAV'];
$nomComp = $_POST['nombreCompletoAV'];
$dni = $_POST['dniAV'];
$email = $_POST['emailAV'];
$contra = $_POST['contrasennaAV'];
$tipo = $_POST['tipoUsuarioAV'];





$q = "DELETE FROM usuarios WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>