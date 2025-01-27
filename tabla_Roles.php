<?php
    require_once "conexion.php";

    $id_usuarios = $_POST['id usuario'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO roles(id usuario,descripcion) Value ('$id_usuario','$descripcion');";
    $conex-> query($sql);

    /*header('location: index.html');  */

?>