<?php
    require_once "conexion.php";

    $nombre_producto = $_POST['nombre producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO producto(nombre producto, descripcion, precio, stock, categoria, estado) Value ('$nombre_producto','$descripcion','$precio','$stock','$categoria','$estado');";
    $conex-> query($sql);

    /*header('location: index.html');  */

?>