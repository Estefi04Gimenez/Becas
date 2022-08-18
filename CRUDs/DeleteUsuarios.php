<?php
require 'conexion.php';

$id = $_POST['idDelete'];
$nomComp = $_POST['nombreCompletoDelete'];
$dni = $_POST['dniDelete'];
$email = $_POST['emailDelete'];
$contra = $_POST['contrasennaDelete'];
$tipo = $_POST['tipoUsuarioDelete'];





$q = "DELETE FROM usuarios WHERE id_usuario = '$id'";

echo mysqli_query($con, $q);


?>