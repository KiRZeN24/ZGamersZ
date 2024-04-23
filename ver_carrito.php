<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cesta de la compra</title>
    <meta charset="utf-8" />
    <meta name="Description" content="Description" />
</head>

<body>
    <?php
    include 'menu_lateral.php';
    //include 'funciones.php';

    $conexion = conexionbbdd();
    $productos = productos();

    if (isset($_COOKIE['sesion'])) {
        if (isset($_COOKIE['carrito'])) {
            $carrito = array();
            $carrito = unserialize($_COOKIE['carrito']);


            //Pasamos los id a formato strign (tipo texto)
            $cadena = "";

            for ($i = 0; $i < count($carrito); $i++) {
                if (count($carrito) < 2) {
                    $cadena = $carrito[0][0];
                } else {
                    $cadena = $cadena . "," . $carrito[$i][0];
                }
            }
            if (strlen($cadena) > 2) {
                $cadena = substr($cadena, 1, strlen($cadena));
            }

            //Hacemos la consulta a la Base de Datos
            $sql = "SELECT id_juego, nombre, precio, plataforma, imagen FROM juegos WHERE id_juego IN($cadena)";
            $resultado = $conexion->query($sql);

            //Pasar los registros a un array
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
            }

            $carro = serialize($productos);

            $id = $_COOKIE['carrito'];
            sabercantidadcarrito($id);
            totalcarrito($productos);

    ?>

            <!-- Mostrar productos del carrito -->

            <div class="w3-container">
                <h2>Carro de la compra</h2>
                <p>Aquí se listan los articulos que tiene en su carro:</p>

                <table class="w3-table-all">
                    <thead>
                        <tr class="w3-light-grey w3-hover-black">
                            <th></th>
                            <th>Nombre</th>
                            <th>Plataforma</th>
                            <th>Cantidad</th>
                            <th></th>
                            <th>Precio</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <?php

                    for ($i = 0; $i < count($productos); $i++) {

                    ?>
                        <tr class="w3-hover-blue">
                            <td><img height="25px" src="<?php echo $productos[$i][4] ?>"></td>
                            <td><?php echo $productos[$i][1] ?></td>
                            <td><?php echo $productos[$i][3] ?></td>
                            <td><?php echo sabercantidadcarrito($productos[$i][0]); ?></td>
                            <td>
                                <a href="agregar_carrito.php?id=<?php echo $productos[$i][0] ?>&op=resta&recargar=true"><i class="fa-solid fa-minus fa-beat" style="color: #ff0000;"></i></a>
                                <a href="agregar_carrito.php?id=<?php echo $productos[$i][0] ?>&op=suma&recargar=true"><i class="fa-solid fa-plus fa-beat" style="color: #008000;"></i></a>
                            </td>
                            <td><?php echo $productos[$i][2] ?>€</td>
                            <td><?php echo $productos[$i][2] * sabercantidadcarrito($productos[$i][0]); ?>€</td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href='registrar_pedido_bbdd.php?carro=<?php echo $carro ?>' class="w3-button w3-black w3-hover-green">Pagar</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4><?php echo totalcarrito($productos) ?>€</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Replace "test" with your own sandbox Business account app client ID -->
            <script src="https://www.paypal.com/sdk/js?client-id=AS05Pqp0p42W3z7hYwz2DSb0uXa4aMven_5cHnXh9qZRIUxmiyneWcKND9ps2eawnYJ97m5gRVv30XfX&currency=EUR"></script>
            <!-- Set up a container element for the button -->
            <div align="center" id="paypal-button-container"></div>
            <script>
                paypal.Buttons({
                    // Sets up the transaction when a payment button is clicked
                    createOrder: (data, actions) => {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '<?php echo totalcarrito($productos) * 1.21 ?>' // Can also reference a variable or function
                                }
                            }]
                        });
                    },
                    // Finalize the transaction after payer approval
                    onApprove: (data, actions) => {
                        return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                            const transaction = orderData.purchase_units[0].payments.captures[0];
                            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                            // When ready to go live, remove the alert and show a success message within this page. For example:
                            // const element = document.getElementById('paypal-button-container');
                            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                            // Or go to another URL:  actions.redirect('thank_you.html');
                            //actions.redirect('crear_pedido.php');
                        });
                    }
                }).render('#paypal-button-container');
            </script>
    <?php
        } else {
            echo '<div class="w3-container"> 
            <div class="w3-panel w3-blue w3-card-4">
              <h2>Su carrito esta vacio.</h2>
            </div>
          </div>';
        }
    } else {
        echo '<div class="w3-panel w3-red">
    
        <h2>Debe <a href="zona_usuarios.php">iniciar sesión</a> para continuar.</h2>
      </div>';
    }
    desconexionbbdd($conexion);
    ?>
</body>

</html>