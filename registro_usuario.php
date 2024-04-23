<?php

include 'funciones.php';

$conexion = conexionbbdd();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO usuarios (nombre,email,pass) VALUES ('$nombre','$email','$pass')";
    $resultado = $conexion->query($sql);

    desconexionbbdd($conexion);

    header('Location: registro_usuario_completo.php');
}
