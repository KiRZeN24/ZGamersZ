<!DOCTYPE html>
<html>

<title>ZGamersZ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/2541ae2695.js" crossorigin="anonymous"></script>
<style>
    .w3-sidebar a {
        font-family: "Roboto", sans-serif
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
        font-family: "Montserrat", sans-serif;
    }
</style>

<body class="w3-content" style="max-width:1200px">

    <!-- Menu lateral -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <h3 class="w3-wide"><b><img src="img/icono.png" width="100"></b></h3>
        </div>
        <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="index.php" class="w3-bar-item w3-button">Inicio</a>
            <a href="tendencias.php" class="w3-bar-item w3-button">Tendencias</a>
            <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Plataformas <i class="fa fa-caret-down"></i>
            </a>
            <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="pc.php" class="w3-bar-item w3-button">PC</a>
                <a href="playstation.php" class="w3-bar-item w3-button">PlayStation</a>
                <a href="xbox.php" class="w3-bar-item w3-button">Xbox</a>
                <a href="nintendo.php" class="w3-bar-item w3-button">Nintendo</a>
            </div>
            <?php
            include 'funciones.php';
            menu_usuario();
            ?>
        </div>
        <a href="index.php#footer" class="w3-bar-item w3-button w3-padding">Contacto</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
    </nav>

    <!-- Newsletter Modal -->
    <div id="newsletter" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
            <div class="w3-container w3-white w3-center">
                <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                <h2 class="w3-wide">NEWSLETTER</h2>
                <p>Unete a la lista de correo para recibir en tu e-mail las ultimas novedades y ofertas.</p>
                <p><input class="w3-input w3-border" type="text" placeholder="Introducir e-mail"></p>
                <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Suscribirse</button>
            </div>
        </div>
    </div>

    <!-- Menu superior en pantallas pequeñas -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
        <div class="w3-bar-item w3-padding-24 w3-wide"><img src="img/icono.png" width="50"></div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>

    <!-- Efecto de superposición al abrir la barra lateral en pantallas pequeñas -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !Contenido de la Pagina! -->
    <div class="w3-main" style="margin-left:250px">

        <!-- Empuje hacia abajo el contenido en pantallas pequeñas -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <script>
            // Acordeon
            function myAccFunc() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            // Acordeon de Plataformas
            document.getElementById("myBtn").click();


            // Abrir cerrar menu lateral
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
</body>

</html>