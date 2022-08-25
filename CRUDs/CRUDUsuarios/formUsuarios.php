<?php

require 'conexion.php';


$nomComp = $_POST['nombreCompleto'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$contra = $_POST['contraseña'];
$tipo = 'U';



$q = "INSERT INTO `usuarios`(`nombre_completo`, `email`, `dni`, `contrasenna`, `tipo_usuario`) VALUES ('$nomComp','$email','$dni','$contra','$tipo')";


echo mysqli_query($con, $q)









?>