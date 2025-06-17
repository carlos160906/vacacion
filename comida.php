<?php
session_start();
$usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
$inicial = $usuario ? strtoupper(substr($usuario, 0, 1)) : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acapulco Paraiso</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <header>
        <h1>Acapulco Paraiso</h1>
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
    </div>
</nav>
    <main>
        <section id="lugares-de-comida">
            <h2>Lugares de Comida</h2>
            <div class="contenedor">
                <div class="cuadro">
                    <h3>Italianni's</h3>
                    <p>Ubicación: Galerías Diana, Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 1:00 pm a 11:00 pm</p>
                    <p>Descripción: Un restaurante de comida italiana con una variedad de opciones para todos los gustos.</p>
                </div>
                <div class="cuadro">
                    <h3>Fisher's</h3>
                    <p>Ubicación: Galerías Diana, Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 1:00 pm a 11:00 pm</p>
                    <p>Descripción: Un restaurante de mariscos y pescados frescos con una vista impresionante del mar.</p>
                </div>
                <div class="cuadro">
                    <h3>Señor Frog's</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Zona: Zona Dorada</p>
                    <p>Horarios: De lunes a domingo de 12:00 pm a 12:00 am</p>
                    <p>Descripción: Un restaurante y tienda de recuerdos que ofrece comida y bebida en un ambiente divertido y festivo.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Acapulco: Tiendas de Ropa y Lugares de Comida</p>
    </footer>
</body>
</html>
