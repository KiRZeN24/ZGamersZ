<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $operacion = $_GET['op'];
    $carrito = array();
    if (isset($_COOKIE['carrito'])) {
        //Recuperar la COOKIE del carrito anterior
        $carrito = unserialize($_COOKIE['carrito']);
        //Contamos cuantos articulos hay en el carrito
        $total = 0;
        foreach ($carrito as $articulo) {
            $total += count($articulo);
        }
        $total = $total / 2;
        //Comprobamos si el id ya existe, si existe incrementamos la cantidad, si no, lo añadimos y cantidad = 1
        $encontrado = false;
        for ($i = 0; $i < $total; $i++) {
            if ($carrito[$i][0] == $id) {
                switch ($operacion) {
                    case 'suma':
                        $carrito[$i][1] += 1;
                        break;
                    case 'resta':
                        if ($carrito[$i][1] > 1) {
                            $carrito[$i][1] -= 1;
                            break;
                        } else {
                            array_splice($carrito, $i, 1);
                            break;
                        }
                    case 'borrar':
                        array_splice($carrito, $i, 1);
                        break;
                }
                $encontrado = true;
                break;
            } else {
                $encontrado = false;
            }
        }
        if ($encontrado == false) {
            //Añadimos el nuevo id
            $carrito[$total][0] = $id;
            $carrito[$total][1] = 1;
        }

        //Guardamos el nuevo conjunto de id
        setcookie("carrito", serialize($carrito), time() + (3600 * 24 * 365), "/", "192.168.0.57", FALSE, TRUE);

        //Eliminar cookie si $carrito esta vacio
        if (count($carrito) == 0) {
            setcookie("carrito", serialize($carrito), time() - 100, "/", "192.168.0.57", FALSE, TRUE);
        }
    } else {
        $carrito[0][0] = $id; //ID del producto que añadimos al carrito
        $carrito[0][1] = 1; //Cantidad

        //Si es el primer id, se guarda sin mas (SI ES LA PRIMERA COMPRA o NO HABIA CARRITO ANTERIOR)
        setcookie("carrito", serialize($carrito), time() + (3600 * 24 * 365), "/", "192.168.0.57", FALSE, TRUE);
    }

    if (isset($_GET['recargar'])) {
        header("Location: ver_carrito.php");
    } else {
        //Nos devuelve a la página desde la que llegamos
        header('Location:' . getenv('HTTP_REFERER'));
    }
}
?>