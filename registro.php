<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro de Usuario</title>
    <meta charset="utf-8" />
    <meta name="Description" content="Description" />
</head>

<body>
    <?php include 'menu_lateral.php' ?>

    <!-- Cabecera superior -->
    <header class="w3-container w3-xlarge">
        <p class="w3-right">
            <i class="fa fa-shopping-cart w3-margin-right"></i>
            <a href="zona_usuarios.php"><i class="fa fa-male w3-margin-right"></i></a>
        </p>
    </header>

    <form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin">
        <h2 class="w3-center">Registro de Usuario</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="nombre" type="text" placeholder="Nombre">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="E-mail">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="pass" type="password" placeholder="Contraseña">
            </div>
        </div>

        <button class="w3-button w3-block w3-section w3-red w3-ripple w3-padding">Registrarse</button>

    </form>

</body>

</html>