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
        </font>
    </div>
</nav>
    <main>
        <section id="lugares-de-atraccion">
            <h2>Lugares de Atracción</h2>
            <div class="contenedor">
                <div class="cuadro">
                    <h3>La Quebrada</h3>
                    <p>Ubicación: La Quebrada, Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Un acantilado impresionante con una vista panorámica del océano Pacífico.</p>
                </div>
                <div class="cuadro">
                    <h3>El Fuerte de San Diego</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Un fuerte histórico que data del siglo XVII y que ofrece una vista impresionante de la bahía de Acapulco.</p>
                </div>
                <div class="cuadro">
                    <h3>La Isla de la Roqueta</h3>
                    <p>Ubicación: Isla de la Roqueta, Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Una isla paradisíaca con playas de ensueño y aguas cristalinas.</p>
                </div>
                <div class="cuadro">
                    <h3>El Parque Papagayo</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Un parque de diversiones con atracciones para todas las edades.</p>
                </div>
                <div class="cuadro">
                    <h3>La Playa de Caleta</h3>
                    <p>Ubicación: Playa de Caleta, Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Una playa tranquila y pintoresca con aguas cristalinas y arena blanca.</p>
                </div>
                <div class="cuadro">
                    <h3>El Museo de Arte de Acapulco</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Un museo que alberga una colección de arte mexicano y contemporáneo.</p>
                </div>
                <div class="cuadro">
                    <h3>La Catedral de Nuestra Señora de la Asunción</h3>
                    <p>Ubicación: Plaza de la Constitución, Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Una catedral impresionante con una arquitectura colonial.</p>
                </div>
                <div class="cuadro">
                    <h3>El Mercado de Artesanías</h3>
                    <p>Ubicación: Avenida Costera Miguel Alemán, Fracc. Magallanes, 39850 Acapulco, Guerrero</p>
                    <p>Horarios: De lunes a domingo de 10:00 am a 6:00 pm</p>
                    <p>Descripción: Un mercado donde se pueden encontrar artesanías y souvenirs.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Lugares de Atracción en Acapulco</
