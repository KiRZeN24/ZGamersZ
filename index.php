<!DOCTYPE html>
<html>

<head>
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

    .mySlides {
      display: none;
    }
  </style>
</head>

<body class="w3-content" style="max-width:1200px">
  <?php include 'funciones.php';
  $productos = productos();
  ?>

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
      <?php menu_usuario() ?>
    </div>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contacto</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
  </nav>

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

    <!-- Imagen cabecera -->
    <h2 class="w3-center">ZGamersZ</h2>
    <header class="w3-container w3-xlarge">
      <p class="w3-right">
        <a href="ver_carrito.php"> <i class="fa fa-shopping-cart w3-margin-right"></i></a>
        <a href="zona_usuarios.php"><i class="fa fa-male w3-margin-right"></i></a>
      </p>
    </header>

    <div class="w3-display-container w3-container">
      <img src="img/starwars.jpg" alt="starwars" style="width:100%">
      <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
        <h1 class="w3-jumbo w3-hide-small">Nuevo Lanzamiento</h1>
        <h1 class="w3-hide-large w3-hide-medium"><?php echo $productos[0][1] ?></h1>
        <h1 class="w3-hide-large w3-hide-medium"><?php echo $productos[0][2] ?>€</h1>
        <h1 class="w3-hide-small"><?php echo $productos[0][1] ?></h1>
        <h1 class="w3-hide-small"><?php echo $productos[0][2] ?>€</h1>
        <p><a href="agregar_carrito.php?id=<?php echo $productos[0][0] ?>&op=suma" class="w3-button w3-black w3-padding-large w3-large">Comprar ahora</a></p>
      </div>
    </div>

    <!-- Ultimas Lanzamientos -->

    <h2 class="w3-center">Ultimos lanzamientos</h2>
    <div class="w3-row">
      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[1][4] ?>" alt="Marvel's Midnight Suns" style="width:100%">
            <span class="w3-tag w3-display-topleft">Nuevo</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[1][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[1][1] ?><br><b><?php echo $productos[1][2] ?>€</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[3][4] ?>" alt="Forspoken" style="width:100%">
            <span class="w3-tag w3-display-topleft">Nuevo</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[3][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[3][1] ?><br><b><?php echo $productos[3][2] ?>€</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[2][4] ?>" alt="Like a Dragon: Ishin!" style="width:100%">
            <span class="w3-tag w3-display-topleft">Nuevo</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[2][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[2][1] ?><br><b><?php echo $productos[2][2] ?>€</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[4][4] ?>" alt="Watch Dogs Legion" style="width:100%">
            <span class="w3-tag w3-display-topleft">Oferta</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[4][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[4][1] ?><br><b class="w3-text-red"><?php echo $productos[4][2] ?>€</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[5][4] ?>" alt="F1 23" style="width:100%">
            <span class="w3-tag w3-display-topleft">Proximamente</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[5][0] ?>&op=suma" class="w3-button w3-black">Reservar ahora<i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[5][1] ?><br><b><?php echo $productos[5][2] ?>€</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[6][4] ?>" alt="Final Fantasy XVI" style="width:100%">
            <span class="w3-tag w3-display-topleft">Proximamente</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[6][0] ?>&op=suma" class="w3-button w3-black">Reservar ahora <i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[6][1] ?><br><b><?php echo $productos[6][2] ?>€</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[7][4] ?>" alt="Ghostrunner" style="width:100%">
            <span class="w3-tag w3-display-topleft">Oferta</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[7][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora <i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[7][1] ?><br><b class="w3-text-red"><?php echo $productos[7][2] ?>€</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="<?php echo $productos[8][4] ?>" alt="The Legend of Zelda: Tears of the Kingdom" style="width:100%">
            <span class="w3-tag w3-display-topleft">Nuevo</span>
            <div class="w3-display-middle w3-display-hover">
              <a href="agregar_carrito.php?id=<?php echo $productos[8][0] ?>&op=suma" class="w3-button w3-black">Comprar ahora <i class="fa fa-shopping-cart"></i></a>
            </div>
          </div>
          <p><?php echo $productos[8][1] ?><br><b><?php echo $productos[8][2] ?>€</b></p>
        </div>
      </div>
    </div>

    <!-- FIN ultimos lanzamientos -->

    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
      <div class="w3-row-padding">
        <div class="w3-col s4">
          <h4>Contacto</h4>
          <p>¿Tienes pregutas?.</p>
          <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-border" type="text" placeholder="Nombre" name="Nombre" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Asunto" name="Asunto" required></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Mensaje" name="Mensaje" required></p>
            <button type="submit" class="w3-button w3-block w3-black">Enviar</button>
          </form>
        </div>

        <div class="w3-col s4">
          <h4>Sobre nosotros</h4>
          <p><a href="#">¿Quienes somos?</a></p>
          <p><a href="#">Ayuda</a></p>
          <p><a href="#">Envios</a></p>
          <p><a href="#">Pagos</a></p>
          <p><a href="#">Tarjetas de regalo</a></p>
          <p><a href="#">Devoluciones</a></p>
        </div>

        <div class="w3-col s4 w3-justify">
          <h4>Tienda</h4>
          <p><i class="fa fa-fw fa-map-marker"></i> Zaragoza, España</p>
          <p><i class="fa fa-fw fa-phone"></i> +34041231232</p>
          <p><i class="fa fa-fw fa-envelope"></i> zgamersz@zgamersz.com</p>
          <h4>Aceptamos</h4>
          <p><i class="fa fa-fw fa-cc-amex"></i> Tranferencias bancarias</p>
          <p><i class="fa fa-fw fa-credit-card"></i> Tarjetas de credito</p>
          <br>
          <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
          <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
          <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
          <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
          <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
        </div>
      </div>
    </footer>

    <div class="w3-black w3-center w3-padding-24">&copy; Todos los derechos reservados, 2023</div>

    <!-- Fin del contenido de la pagina -->
  </div>

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