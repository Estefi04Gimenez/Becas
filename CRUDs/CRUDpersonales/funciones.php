<?php

require "Cls.php";

$funcion = $_POST['funcion'];

if ($funcion == 'Crear_usuario')
{
        
  $NomComp = $_POST["nombreCompleto"];
  $Dni = $_POST['dni'];
  $Email = $_POST['email'];
  $Contra = $_POST['contraseña'];
  $TipoUsr = $_POST['tipoUsuario'];

  $ArrayCrear = [$NomComp, $Dni, $Email, $Contra, $TipoUsr];

  $usuario = new usuario();
  
  echo $usuario->Crear($ArrayCrear);
}
if ($funcion == 'Leer_tabla_usuarios')
{
  
  $usuario = new usuario();

  echo $usuario -> LeerTabla(); 

  /* 
  CargarTabla

    $Letra = $_POST['letra'];
    $Opcion = $_POST['opcion'];
    $Filtro = $_POST['filtro'];
    $Dni = $_POST['dni'];
  
    $q = "SELECT * FROM usuarios WHERE ";
  
    if($letra != '')
    {
      $q = $q . " UPPER(nombre_completo) LIKE '%" . strtoupper($letra) . "%' ";
    }
  
    if($dni > 9999999)
    {
      $q = $q."AND dni = '$dni' " ;
    }
    
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
  
    if (mysqli_num_rows($r) > 0)
    {
      
      while ($valores = mysqli_fetch_assoc($r))
        {
          $array[]= $valores;
          
        }
        
        echo (json_encode($array)); 
        
        
    }
  
    mysqli_close($con);
  
 */
}

if ($funcion == 'Editar_usuario')
{

    $Id = $_POST['idUD'];
    $NomComp = $_POST['nombreCompletoUD'];
    $Dni = $_POST['dniUD'];
    $Email = $_POST['emailUD'];
    $Contra = $_POST['contrasennaUD'];
    $TipoUsr = $_POST['tipoUsuarioUD'];
    
    $ArrayCrear = [$Id,$NomComp, $Dni, $Email, $Contra, $TipoUsr];

    $usuario = new usuario();
    
    echo $usuario->Editar($ArrayCrear);

}
if ($funcion == 'Eliminar_usuario')
{

    $Id = $_POST['idUD'];
    $NomComp = $_POST['nombreCompletoUD'];
    $Dni = $_POST['dniUD'];
    $Email = $_POST['emailUD'];
    $Contra = $_POST['contrasennaUD'];
    $TipoUsr = $_POST['tipoUsuarioUD'];
    
    $ArrayEliminar = [$Id,$NomComp, $Dni, $Email, $Contra, $TipoUsr];

    $usuario = new usuario();
    
    echo $usuario->Eliminar($ArrayCrear);

}




?>