<?php
    require_once "conexion.php";

    $id_roles= $_POST['id roles'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO persmiso(id roles,descripcion) Value ('$id_roles','$descripcion');";
    $conex-> query($sql);

    /*header('location: index.html');  */

?>