<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tendencias</title>
    <meta charset="utf-8" />
    <meta name="Description" content="Description" />
</head>

<body>
    <?php include 'menu_lateral.php'; ?>

    <!-- Cabecera superior -->
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Tendencias</p>
        <p class="w3-right">
            <a href="ver_carrito.php"> <i class="fa fa-shopping-cart w3-margin-right"></i></a>
            <a href="zona_usuarios.php"><i class="fa fa-male w3-margin-right"></i></a>
        </p>
    </header>

    <div class="w3-container w3-text-grey" id="juegos">
        <p>Estos son los juegos que lo estan petando ahora mismo.</p>
    </div>

    <!-- Listado de productos -->
    <div class="w3-row">
        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/hogwarts-legacy.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Hogwarts Legacy<br><b>43,55€</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/the-last-of-us-part-i.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>The Last of Us Part I<br><b>44,67€</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/like-a-dragon-ishin.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">Nuevo</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Like a Dragon: Ishin!<br><b>41,99€</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/dead-island-2.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Dead Island 2 Deluxe Edition<br><b>59,59€</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/spider-man-miles-morales.jpg" style="width:100%">
                    <span class="w3-tag w3-display-topleft">Oferta</span>
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora<i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Spider-Man: Miles Morales<br><b class="w3-text-red">21,99€</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/dead-space.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Dead Space<br><b>36,03€</b></p>
            </div>
        </div>

        <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/sifu.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Sifu<br><b>23,99€</b></p>
            </div>
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="img/stranger-of-paradise-final-fantasy-origin.jpg" style="width:100%">
                    <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Comprar ahora <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <p>Stranger of Paradise Final Fantasy Origin<br><b>32,63€</b></p>
            </div>
        </div>
    </div>

    <!-- FIN listado de productos -->

</body>

</html>