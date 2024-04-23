<?php

include 'menu_lateral.php';

//Comprobamos que es el usuario en cuestion para modificar sus datos
$email2 = $_COOKIE['email'];
$conexion = conexionbbdd();

if (isset($_POST['nombre'])) {
    if ($_POST['nombre'] != "") {
        $nombre = $_POST['nombre'];
        //Hacemos la consulta a la Base de Datos y actualizamos los datos
        $sql = "UPDATE usuarios SET nombre = '$nombre' WHERE email LIKE '$email2'";
        $resultado = $conexion->query($sql);
    }
}

if (isset($_POST['pass'])) {
    if ($_POST['pass'] != "") {
        $pass = $_POST['pass'];
        //Hacemos la consulta a la Base de Datos y actualizamos los datos
        $sql = "UPDATE usuarios SET pass = '$pass' WHERE email LIKE '$email2'";
        $resultado = $conexion->query($sql);
    }
}

if (isset($_POST['email'])) {
    if ($_POST['email'] != "") {
        $email = $_POST['email'];
        //Hacemos la consulta a la Base de Datos y actualizamos los datos
        $sql = "UPDATE usuarios SET email = '$email' WHERE email LIKE '$email2'";
        $resultado = $conexion->query($sql);
    }
}


desconexionbbdd($conexion);
echo '<div class="w3-panel w3-green">
<h3>¡Modificación completada!</h3>
<p>Se han modificado sus datos correctamente, <a href="cerrar_sesion.php">cierre sesion</a> y vuelva a iniciarla con sus datos nuevos para que se hagan totalmente efectivos.</p>
</div>';
