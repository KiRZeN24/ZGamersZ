<?php

include 'funciones.php';

$conexion = conexionbbdd();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT email, pass FROM usuarios WHERE email like '" . $email . "' and pass like '" . $pass . "'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $conexion->close();
        session_start();
        $id_sesion = session_id();
        setcookie("sesion", $id_sesion, time() + 36000, "/", "192.168.0.57", FALSE, TRUE);
        setcookie("email", $email, time() + 36000, "/", "192.168.0.57", FALSE, TRUE);
        header('Location: index.php');
    } else {
        header('Location: zona_usuarios.php');
    }
} else {
    header('Location: zona_usuarios.php');
}
?>