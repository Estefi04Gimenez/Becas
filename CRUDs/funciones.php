<?php
function valida_texto($tx,$l){
    $resultado=true;
    if (empty($tx)){
        $resultado=false;
    }
    else{
        if (strlen($tx)>$l){
        $resultado=false;
        }
    }
    return $resultado;
    }


?>