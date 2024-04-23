<!DOCTYPE html>
<html lang="es">

<head>
    <title>Zona Usuarios</title>
    <meta charset="utf-8" />
    <meta name="Description" content="Description" />
</head>

<body>
    <?php include 'menu_lateral.php' ?>

    <!-- Cabecera superior -->
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Zona de Usuario</p>
        <p class="w3-right">
            <a href="ver_carrito.php"> <i class="fa fa-shopping-cart w3-margin-right"></i></a>
            <a href="zona_usuarios.php"><i class="fa fa-male w3-margin-right"></i></a>
        </p>
    </header>

    <form action="verificacion_usuario.php" method="post" class="w3-container w3-card-4 w3-light-grey">
        <h2>Iniciar Sesión</h2>
        <p>Estas apunto de entrar a la zona de usuarios de <strong>ZGamersZ</strong>, si es tu primera vez, por favor <strong>registrate <a href="alta_usuario.php">aquí<a></strong></p>

        <p>
            <label>E-Mail</label>
            <input class="w3-input w3-border w3-round" name="email" type="text" required>
        </p>
        <p>
            <label>Contraseña</label>
            <input class="w3-input w3-border w3-round-large" name="pass" type="password" required>
        </p>
        <p>
            <button class="w3-btn w3-green">Iniciar Sesión</button>
        </p>
    </form>

</body>

</html>