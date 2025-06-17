<?php
session_start();
$usuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
        }

        .barra-superior {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color: #1b1b1b;
            color: white;
            padding: 10px 20px;
        }

        .nombre-usuario {
            font-size: 16px;
            font-weight: bold;
        }

        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 60px;
        }

        .menu-box {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .menu-box a {
            display: block;
            margin: 15px;
            padding: 10px;
            background-color: #222;
            color: #00f0ff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .menu-box a:hover {
            background-color: #444;
        }

        .boton-login {
            color: white;
            font-weight: bold;
            text-decoration: none;
            background-color: #4e54c8;
            padding: 10px 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="barra-superior">
    <?php if ($usuario): ?>
        <div class="nombre-usuario">Bienvenido, <?php echo htmlspecialchars($usuario); ?></div>
    <?php else: ?>
        <a class="boton-login" href="index2.html">Iniciar sesión</a>
    <?php endif; ?>
</div>

<div class="contenedor">
    <div class="menu-box">
        <h2>Menú Principal</h2>
        <a href="#">Principal</a>
        <a href="#">Contáctanos por WhatsApp</a>
        <a href="#">Contáctanos por Facebook</a>
        <a href="#">Contáctanos por Twitter</a>
    </div>
</div>

</body>
</html>