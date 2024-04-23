<?php
  $nombre = $_COOKIE['email'];
?>
<div class="w3-container">
<div class="w3-dropdown-hover">
  <button class="w3-button"><?php echo $nombre ?></button>
  <div class="w3-dropdown-content w3-bar-block w3-border w3-animate-zoom">
    <a href="ver_pedidos.php" class="w3-bar-item w3-button">Ver pedidos</a>
    <a href="modificar_usuario.php" class="w3-bar-item w3-button">Modificar mis datos</a>
    <a href="cerrar_sesion.php" class="w3-bar-item w3-button">Cerrar sesión</a>
  </div>
</div>
</div>