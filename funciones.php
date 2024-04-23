<?php

function conexionbbdd()
{

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bbdd = "zgamersz";

    $conexion = new mysqli($servidor, $usuario, $contrasena, $bbdd, 3306);
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }

    return $conexion;
}

function desconexionbbdd($conexion)
{
    $conexion->close();
}

function productos()
{
    $conexion = conexionbbdd();

    $sql = "SELECT id_juego, nombre, precio, plataforma, imagen FROM juegos";
    $resultado = $conexion->query($sql);

    //Pasar los juegos a un array
    if ($resultado->num_rows > 0) {
        $productos = array();
        $posicion = 0;
        while ($fila = $resultado->fetch_assoc()) {
            $productos[$posicion][0] = $fila["id_juego"];
            $productos[$posicion][1] = $fila["nombre"];
            $productos[$posicion][2] = $fila["precio"];
            $productos[$posicion][3] = $fila["plataforma"];
            $productos[$posicion][4] = $fila["imagen"];
            $posicion++;
        }
    } else {
        echo "No hay datos";
    }
    //Desconectamos la conexion a la BBDD
    desconexionbbdd($conexion);

    //Enviar array productos
    return $productos;
}

function sabercantidadcarrito($id)
{
    $carrito = array();
    $carrito = unserialize($_COOKIE['carrito']);
    for ($i = 0; $i < count($carrito); $i++) {
        if ($carrito[$i][0] == $id) {
            return $carrito[$i][1];
        }
    }
}

function totalcarrito($productos)
{
    $carrito = array();
    $total = 0;
    //recuperamos el carrito de la cookie
    $carrito = unserialize($_COOKIE['carrito']);
    for ($i = 0; $i < count($carrito); $i++) {
        $total = $total + $carrito[$i][1] * $productos[$i][2];
    }
    return $total;
}

function menu_usuario()
{
    if (isset($_COOKIE['sesion'])) {
        include 'menu_usuario.php';
    }
}

function registrar_pedido($productos)
{

    $email = $_COOKIE['email'];
    $carrito = $_COOKIE['carrito'];

    for ($i = 0; $i < count($productos); $i++) {
        $nombre_juego = $productos[$i][1];
        $precio = $productos[$i][2];
        $plataforma = $productos[$i][3];
        $imagen = $productos[$i][4];
        $cantidad = sabercantidadcarrito($productos[$i][0]);
        $total = $productos[$i][2] * sabercantidadcarrito($productos[$i][0]);


        $conexion = conexionbbdd();

        //Insertamos el pedido a la BBDD
        $sql = "INSERT INTO pedidos (nombre, precio, cantidad, total, plataforma, imagen, email) VALUES ('$nombre_juego', '$precio',$cantidad, '$total', '$plataforma', '$imagen', '$email')";
        $resultado = $conexion->query($sql);
    }

    desconexionbbdd($conexion);
    setcookie("carrito", $carrito, time() - 100, "/", "192.168.0.57", FALSE, TRUE);
    echo '<div class="w3-panel w3-green">
    <h3>¡Compra completada!</h3>
    <p>Su pedido se ha completado correctamente, puede ver su <a href="ver_pedidos.php">pedido aquí.</a></p>
    <p>Su pedido se ha completado correctamente, ir a <a href="index.php">Inicio.</a></p>
</div>';
}
?>