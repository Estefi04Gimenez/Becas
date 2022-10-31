<?php

require 'conexion.php';

class usuario
{

    private $IdUsuario;
    private $NombCom;
    private $Email;
    private $Dni;
    private $Contra;
    private $TipoUsr;
    
    public function __construct(){
        $this->IdUsuario = '';
        $this->NombCom = '';
        $this->Email = '';
        $this->Dni = '';
        $this->Contra = '';
        $this->TipoUsr = 'A';    
    }
/*      
    public function setId($Val){
    $this->$IdUsuarios = $val;
    }
    public function getId(){
        return $this->IdUsuario;
    }

    public function setNomComp($Val){
    $this->NomComp = $val;
    }
    public function getNomComp(){
        return $this->NomComp;
    }

    public function setEmail($Val){
    $this->Email = $val;
    }
    public function getEmail(){
        return $this->Email;
    }

    public function setDni($Val){
    $this->Dni = $val;
    }
    public function getDni(){
        return $this->Dni;
    }

    public function setContra($Val){
    $this->Contra = $val;
    }
    public function getContr(){
        return $this->Contra;
    }

    public function setTipoUsr($Val){
    $this->TipoUsr = $val;
    }
    public function getTipoUsr(){
        return $this->TipoUsr;
    }
 */
    public function Crear($Val)
    {

        require 'conexion.php';

        $this->NomComp = $Val[0];
        $this->Dni = $Val[1];
        $this->Email = $Val[2];
        $this->Contra = $Val[3];
        $this->TipoUsr = $Val[4];

        $q = "INSERT INTO `usuarios` (`nombre_completo`, `email`, `dni`, `contrasenna`, `tipo_usuario`) VALUES ('$this->NomComp', '$this->Email', '$this->Dni', '$this->Contra', '$this->TipoUsr')";
    
        return mysqli_query($con, $q);
    
    }

    public function LeerTabla()
    {

        require 'conexion.php';

        $q = "SELECT * FROM usuarios";
    
        $r = mysqli_query($con, $q);

        if (mysqli_num_rows($r) > 0)
        {
          
          while ($valores = mysqli_fetch_assoc($r))
            {
              $array[]= $valores;
              
            }
            
            return (json_encode($array)); 
            
            
        }
      
        mysqli_close($con);
        
    
    }

    public function LeerParametros($var)
    {
        require 'conexion.php';

        $q = "SELECT * FROM usuarios WHERE ";

        if($var[0] != '')
        {
            $q = $q . " UPPER(nombre_completo) LIKE '%" . strtoupper($letra) . "%' ";
        }


        if($var[1] == 1)
        {
            $q = $q."AND tipo_usuario = 'A'";
        }
        if($var[1] == 2)
        {
            $q = $q."AND tipo_usuario = 'U'";
        }


        if($var[2] == 1)
        {
        $q = $q."ORDER BY dni ASC";
        }
        if($var[2] == 2)
        {
        $q = $q."ORDER BY dni DESC";
        }
        if($var[2] == 3)
        {
            $q = $q."ORDER BY id_usuario ASC";
        }
        if($var[2] == 4)
        {
            $q = $q."ORDER BY id_usuario DESC";
        }
        
    }

    public function Editar($Val)
    {

        require 'conexion.php';
        
        $this->IdUsuario = $Val[0];
        $this->NomComp = $Val[1];
        $this->Dni = $Val[2];
        $this->Email = $Val[3];
        $this->Contra = $Val[4];
        $this->TipoUsr = $Val[5];

        $q = "UPDATE usuarios SET nombre_completo='$this->NomComp',email='$this->Email',dni='$this->Dni',contrasenna='$this->Contra',tipo_usuario='$this->TipoUsr' WHERE id_usuario = '$this->IdUsuario'";
        
        return mysqli_query($con, $q);

    }

    public function Eliminar($Val)
    {

        require 'conexion.php';
        
        $this->IdUsuario = $Val[0];
        $this->NomComp = $Val[1];
        $this->Dni = $Val[2];
        $this->Email = $Val[3];
        $this->Contra = $Val[4];
        $this->TipoUsr = $Val[5];

        $q = "DELETE FROM usuarios WHERE id_usuario = '$this->IdUsuario'";

        return mysqli_query($con, $q);
        
    }

}



?>