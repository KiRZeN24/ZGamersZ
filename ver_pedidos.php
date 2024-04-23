<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pedidos realizados</title>
    <meta charset="utf-8" />
    <meta name="Description" content="Description" />
</head>

<body>
    <?php
    include 'menu_lateral.php';

    $conexion = conexionbbdd();

    //Hacemos la consulta a la Base de Datos
    $sql = "SELECT id_pedido, nombre, precio, cantidad, total, plataforma, imagen FROM pedidos WHERE email LIKE '{$_COOKIE['email']}'";
    $resultado = $conexion->query($sql);

    //Pasar los registros a un array
    if ($resultado->num_rows > 0) {
        $pedidos = array();
        $posicion = 0;
        while ($fila = $resultado->fetch_assoc()) {
            $pedidos[$posicion][0] = $fila["id_pedido"];
            $pedidos[$posicion][1] = $fila["nombre"];
            $pedidos[$posicion][2] = $fila["precio"];
            $pedidos[$posicion][3] = $fila["plataforma"];
            $pedidos[$posicion][4] = $fila["imagen"];
            $pedidos[$posicion][5] = $fila["cantidad"];
            $pedidos[$posicion][6] = $fila["total"];
            $posicion++;
        }
    }


    if (isset($pedidos)) {
    ?>

        <!-- Mostrar lista de pedidos -->

        <div class="w3-container">
            <h2>Carro de la compra</h2>
            <p>Aquí se listan los articulos que tiene en su carro:</p>

            <table class="w3-table-all">
                <thead>
                    <tr class="w3-light-grey w3-hover-indigo">
                        <th></th>
                        <th>Nombre</th>
                        <th>Plataforma</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>

                <?php

                for ($i = 0; $i < count($pedidos); $i++) {

                ?>
                    <tr class="w3-hover-green">
                        <td><img height="25px" src="<?php echo $pedidos[$i][4] ?>"></td>
                        <td><?php echo $pedidos[$i][1] ?></td>
                        <td><?php echo $pedidos[$i][3] ?></td>
                        <td><?php echo $pedidos[$i][5] ?></td>
                        <td><?php echo $pedidos[$i][2] ?>€</td>
                        <td><?php echo $pedidos[$i][6] ?>€</td>
                        <td><a href="factura.php?factura=<?php echo $pedidos[$i][0] ?>" class="fa-solid fa-file-invoice fa-shake" style="color: #000000;"></a></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    <?php
    } else {
        echo '<div class="w3-container"> 
            <div class="w3-panel w3-blue w3-card-4">
              <h2>Todavia no ha realizado ningun pedido.</h2>
            </div>
          </div>';
    }
    desconexionbbdd($conexion);
    echo '<a href=encriptar.php>Encriptar pedido</a>';
    ?>
</body>

</html>