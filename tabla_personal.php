<?php
    require_once "conexion.php";

    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $domicilio = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fechanacimiento'];
    $genero = $_POST['genero'];
    $estado_civil = $_POST['estadocivil'];

    $sql = "INSERT INTO personal(nombre,apellidos,direccion,telefono,fechanacimiento,genero,estadocivil) VALUE ('$nombres','$apellidos','$domicilio','$telefono','$fecha_nacimiento','$genero','$estado_civil');";
    $conex-> query($sql);

    /*header('location: index.html');  */
?>