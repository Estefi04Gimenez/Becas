<?php
require 'conexion.php';

$funcion = $_POST['funcion'];


if($funcion < 2)
{
  $letra = $_POST['letra'];
  $opcion = $_POST['opcion'];
  $filtro = $_POST['filtro'];

  $q = "SELECT * FROM usuarios WHERE UPPER(nombre_completo) LIKE '%" . strtoupper($letra) . "%'";

  if($filtro == 1)
  {
    $q = $q."AND tipo_usuario = 'A'";
  }
  if($filtro == 2)
  {
    $q = $q."AND tipo_usuario = 'U'";
  }


  if($opcion == 1)
  {
  $q = $q."ORDER BY dni ASC";
  }
  if($opcion == 2)
  {
  $q = $q."ORDER BY dni DESC";
  }
  if($opcion == 3)
  {
    $q = $q."ORDER BY id_usuario ASC";
  }
  if($opcion == 4)
  {
    $q = $q."ORDER BY id_usuario DESC";
  }


  $r = mysqli_query($con, $q);

  if (mysqli_num_rows($r) > 0){
    
    while ($valores = mysqli_fetch_assoc($r))
      {
        $array[]= $valores;
        
      }
      
      echo (json_encode($array)); 
      
      
    }

    

  

  mysqli_close($con);

}

if($funcion == 2)
{

  $dni = $_POST['dni'];
  $email = $_POST['email'];

  $q = "SELECT DISTINCT email FROM usuarios WHERE email = '$email' ";

  $r = mysqli_query($con, $q);

  if (mysqli_num_rows($r) > 0)
  {
    
    while ($email = mysqli_fetch_assoc($r))
    {
      $arrayEmail[] = $email;
    }
     
    $q = "SELECT DISTINCT dni FROM usuarios WHERE dni = '$dni' ";

    $r = mysqli_query($con, $q);
  
    if (mysqli_num_rows($r) > 0)
    {
      
      while ($dni = mysqli_fetch_assoc($r))
      {
        $arrayDni[]= $dni;
      }
      #combina ambos arrays en uno solo para que puedan ser recibidos por la consulta AJAX  
      $response = array_merge($arrayDni, $arrayEmail);
      echo (json_encode($response));
    }
    else
    {
      #en caso de que la consulta de sql no encuentre ningun registro que coincida con el dni enviado
      #se crea un array con el objeto {dni: 0} y se guarda en la variable '$arrayDni'
      #despues se combina el array con el registo del email y del dni en una sola y se envia a 'CRUDUsuarios.html'
      $arrayDni = array((object)array('dni' => 0));  
      $response = array_merge($arrayDni, $arrayEmail);
      echo (json_encode($response)); 
      #echo "dni no repetido";
    }

  }
  else  
  {  
    if (mysqli_num_rows($r) == 0) 
    {
      $q = "SELECT DISTINCT dni FROM usuarios WHERE dni = '$dni' ";

      $r = mysqli_query($con, $q);

      if (mysqli_num_rows($r) > 0)
      {
        
        while ($dni = mysqli_fetch_assoc($r))
        {
          $arrayDni[]= $dni;
        }
        $arrayEmail = array((object)array('email' => 0));  
        $response = array_merge($arrayDni, $arrayEmail);
        echo (json_encode($response)); 
        #echo "email no repetido";
      }
    }
    if(mysqli_num_rows($r) == 0)
    {
      $arrayEmail = array((object)array('email' => 0));
      $arrayDni = array((object)array('dni' => 0));  
      $response = array_merge($arrayDni, $arrayEmail);
      echo (json_encode($response)); 
    }    
  }
}
?>
