<?php
//Cerrarmos sesion eliminando la cookies generadas por la sesión
setcookie("sesion", $id_sesion, -1, "/", "localhost", FALSE, TRUE);
header("Location: index.php");
?>