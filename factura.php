<?php
include 'funciones.php';
//Importamos una clase fdpf.php
require('fpdf/fpdf.php');
$fecha = date('d/m/Y');

//Creamos un objeto de la clase fpdf
$fpdf = new FPDF('P', 'mm', 'letter', true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10, 30, 20, 20);

//Dar color de fondo en RGB
$fpdf->SetFillColor(40, 92, 100);
//
$fpdf->Rect(0, 0, 220, 50, 'F');
//Elegir tipo de letra
$fpdf->SetFont('Arial', 'B', 15);
//Color del texto
$fpdf->SetTextColor(255, 255, 255);
//Elegir altura
$fpdf->SetY(5);
//Elegir distancia
$fpdf->SetX(50);
//Crear celda
$fpdf->Cell(0, 5, "Empresa : ZGamersZ", 0, 0, 'L', 1);
$fpdf->SetY(10);
$fpdf->SetX(50);
//Crear una linea
$fpdf->SetLineWidth(0.2);
$fpdf->Cell(0, 5, "Fecha de emision : $fecha", 0, 0, 'L', 1);
$fpdf->SetTextColor(0, 0, 0);
$fpdf->SetY(250);
$fpdf->SetX(70);
//Insertar imagen
$fpdf->Image("img/icono_factura.png", 3, 3);
//Insertar texto
$fpdf->Write(5, 'Gracias por su compra.');
$fpdf->SetY(20);
$fpdf->SetX(50);
$fpdf->Write(1, 'Avd Los Vengadores s/n');
$fpdf->SetY(25);
$fpdf->SetX(50);
$fpdf->Write(1, 'Zaragoza');

//Zona de Base de Datos

$conexion = conexionbbdd();

//Hacemos la consulta a la Base de Datos de los datos recibidos por $_GET
if(isset($_GET['factura'])){
    $id_factura = $_GET['factura'];
    $sql = "SELECT id_pedido, nombre, precio, cantidad, total FROM pedidos WHERE id_pedido LIKE " . $id_factura;
}else{
$sql = "SELECT id_pedido, nombre, precio, cantidad, total FROM pedidos";
}
$resultado = $conexion->query($sql);

//Pasar los registros a un array
if ($resultado->num_rows > 0) {
    $pedidos = array();
    $posicion = 0;
    while ($fila = $resultado->fetch_assoc()) {
        $pedidos[$posicion][0] = $fila["id_pedido"];
        $pedidos[$posicion][1] = $fila["nombre"];
        $pedidos[$posicion][2] = $fila["precio"];
        $pedidos[$posicion][3] = $fila["cantidad"];
        $pedidos[$posicion][4] = $fila["total"];
        $posicion++;
    }
}

//utf8_decode para que salgan los acentos
//Zona de datos
$fpdf->SetFillColor(11, 165, 98);
$fpdf->SetY(60);
$fpdf->SetX(10);
$fpdf->Cell(120, 10, utf8_decode('Producto'), 1, 0, 'C', 1);
$fpdf->Cell(25, 10, 'Cantidad', 1, 0, 'C', 1);
$fpdf->Cell(25, 10, 'Precio', 1, 0, 'C', 1);
$fpdf->Cell(25, 10, 'Total', 1, 0, 'C', 1);

$total = 0;
$fpdf->SetFillColor(255, 255, 255);
for ($i = 0; $i < count($pedidos); $i++) {
    $fpdf->SetY(70 + $i * 10);
    $fpdf->Cell(120, 10, $pedidos[$i][1], 1, 0, 'C', 1);
    $fpdf->Cell(25, 10, $pedidos[$i][3], 1, 0, 'C', 1);
    $fpdf->Cell(25, 10, $pedidos[$i][2], 1, 0, 'C', 1);
    $fpdf->Cell(25, 10, $pedidos[$i][4], 1, 0, 'C', 1);
}

$fpdf->SetY(200);
$fpdf->SetX(130);

$nombre_factura = 'Factura_' . $id_factura;
$fpdf->OutPut($nombre_factura, "I");
