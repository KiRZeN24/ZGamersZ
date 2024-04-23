<?php

include 'funciones.php';

 $productos = unserialize($_GET['carro']);
 registrar_pedido($productos);
?>