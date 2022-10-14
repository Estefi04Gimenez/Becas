
    <?php
    require'conexion.php'; 
    $nombre=$_POST['reg_nombre_completo'];
    $dni=$_POST['reg_dni'];
    $email= $_POST['reg_email']; 
    $cont= MD5( $_POST['reg_contrasena']);
    $tipo="U";
    
    $q="INSERT INTO usuarios (nombre_completo, email, dni, contrasena, tipo_usuario)VALUES('$nombre','$email','$dni','$cont','$tipo')";
    
    $r = mysqli_query ($con,$q); 

    ?>
