<?php
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "technova_solutions";
    $conex = new mysqli($host,$usuario,$password,$bd);
    
    if($conex == null){
        echo "Error de conexion";
    }else{
        echo "conexion exitosa";
    }
?>