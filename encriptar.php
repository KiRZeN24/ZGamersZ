<?php
include 'ver_pedidos.php';
//Ruta del archivo de almacenamiento
$archivo = "archivos/pedidos.txt";


//Encriptar archivo con su clave de encriptación
$clave = 'MiClaveSecreta';
$contenidoEncriptado = openssl_encrypt(serialize($pedidos), 'AES-256-CBC', $clave, 0, '1234567890123456');
file_put_contents($archivo, $contenidoEncriptado, FILE_BINARY);
echo '<br>Su pedido ha sido <strong>encriptado</strong>.';

//Leer el archivo encriptado
$clave = 'MiClaveSecreta';
$contenidoEncriptado = file_get_contents($archivo);
$contenidoDesencriptado = openssl_decrypt($contenidoEncriptado, 'AES-256-CBC', $clave, 0, '1234567890123456');
$leer_pedidos_desencriptado = unserialize($contenidoDesencriptado);
echo "<br>Pedido <strong>Desencritado:</strong> ";
for($i=0;$i<count($leer_pedidos_desencriptado);$i++){
    echo '<br>' . $leer_pedidos_desencriptado[$i][0] . ' <-----> ' . $leer_pedidos_desencriptado[$i][1];
}
?>