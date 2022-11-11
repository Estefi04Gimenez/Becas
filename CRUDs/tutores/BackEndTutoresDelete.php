<?php
require '../conexion.php';

$id = $_POST['idAV'];

$q = "DELETE FROM tutores WHERE id_tutor = '$id'";

echo mysqli_query($con, $q);

?>