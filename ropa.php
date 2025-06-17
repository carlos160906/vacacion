<?php
session_start();
$usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$inicial = $usuario ? strtoupper(substr($usuario, 0, 1)) : '';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acapulco Paraiso</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
	<header>
        <h1>Acapulco Paraiso </h1>
    </header>
    <nav>
    <div class="menu">
        <ul>
            <li><a href="menu.php"></i> MENU</a></li>
            <li><a href="comida.php"></i> comida</a></li>
            <li><a href="ropa.php"></i>ropa</a></li>
            <li><a href="atraccion.php"></i>atraccion</a></li>
            <li><a href="eventos.php"></i>eventos</a></li>
            <li><a href="opciones.php"></i>opciones</a></li>
        </ul>
        </font>
    </div>
</nav>
    <main>
        <section id="tiendas-de-ropa">
            <h2>Tiendas de Ropa</h2>
            <div class="contenedor">
                <div class="cuadro">
                    <h3>La Isla Acapulco Shopping Village</h3>
                    <p>Ubicación: Boulevard de las Naciones, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 10:00 pm</p>
                    <p>Descripción: Un centro comercial con una variedad de tiendas, restaurantes y bares.</p>
                </div>
                <div class="cuadro">
                    <h3>Galerías Diana</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 10:00 pm</p>
                    <p>Descripción: Un mall con tiendas de ropa, zapaterías, boutiques de accesorios, cine y opciones de entretenimiento.</p>
                </div>
                <div class="cuadro">
                    <h3>Fullsand</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Club del Sol, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 9:00 am a 9:00 pm</p>
                    <p>Descripción: Una tienda de ropa de playa que ofrece ropa con protección solar para toda la familia.</p>
                </div>
            </div>
        </section>

</body>
</html>