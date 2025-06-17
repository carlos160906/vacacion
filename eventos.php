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

    <h1>Eventos y Festividades para bacacionar</h1>
    <p>Acapulco es un destino turístico popular en México que ofrece una variedad de eventos y festividades a lo largo del año.</p> 
    <div class="contenedor">  
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Vendimia</h2>
        <p>Fecha: 15-20 de enero</p>
        <p>Lugar: Centro de Convenciones de Acapulco</p>
        <p>Actividades: Degustaciones de vino, comida y música en vivo</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Carnaval de Acapulco</h2>
        <p>Fecha: 1-5 de febrero</p>
        <p>Lugar: Malecón de Acapulco</p>
        <p>Actividades: Desfiles, música, baile y comida típica</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de Música de Acapulco</h2>
        <p>Fecha: 10-15 de marzo</p>
        <p>Lugar: Teatro de la Ciudad de Acapulco</p>
        <p>Actividades: Conciertos de música clásica, jazz y rock</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Semana Santa en Acapulco</h2>
        <p>Fecha: 1-8 de abril</p>
        <p>Lugar: Centro de Acapulco</p>
        <p>Actividades: Procesiones, misas y eventos culturales</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Música de Rock de Acapulco</h2>
        <p>Fecha: 10-15 de octubre</p>
        <p>Lugar: Teatro de la Ciudad de Acapulco</p>
     </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Danza de Acapulco</h2>
        <p>Fecha: 15-20 de mayo</p>
        <p>Lugar: Teatro de la Ciudad de Acapulco</p>
        <p>Actividades: Espectáculos de danza folclórica y contemporánea</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Música de Cámara de Acapulco</h2>
        <p>Fecha: 10-15 de junio</p>
        <p>Lugar: Sala de Conciertos de Acapulco</p>
        <p>Actividades: Conciertos de música de cámara</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Comida Típica de Acapulco</h2>
        <p>Fecha: 15-20 de julio</p>
        <p>Lugar: Centro de Convenciones de Acapulco</p>
        <p>Actividades: Degustaciones de comida típica y música en vivo</p>
    </div>
    </div>
    <div class="cuadro">
    <div class="evento">
        <h2>Festival de la Cultura de Acapulco</h2>
        <p>Fecha: 10-15 de agosto</p>
        <p>Lugar: Centro de Acapulco</p>
        <p>Actividades: Eventos culturales, artísticos y musicales</p>
    </div>
    </div>
    <div class="cuadro">
        <div class="evento">
        <h2>Fiestas Patrias en Acapulco</h2>
        <p>Fecha: 1-15 de septiembre</p>
        <p>Lugar: Centro de Acapulco</p>
        <p>Actividades: Desfiles, música y comida típica</p>
    </div>
</div>
</div>
</div>
</section>
    </main>
    <footer>
        <p>&copy; 2023 Lugares de Atracción en Acapulco</


