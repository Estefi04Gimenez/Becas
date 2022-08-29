
    <?php
    require'conexion.php'; 
    $dni=$_POST['dni'];
    $email= $_POST['email']; 
    $cont= MD5( $_POST['contrasena']);
    
    $q="SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$cont' AND dni = '$dni' ";
    
    $r = mysqli_query ($con,$q); 


    if (mysqli_num_rows($r)>0) {
        session_start();
        $_SESSION ['nombre-usuarios']=$u;
        header("location: inicio.html");
        
    }
    else
    {
        header("location: ##.html");
        
    }

    ?>
