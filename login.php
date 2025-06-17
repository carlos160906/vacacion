<?php
session_start();

// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "proyecto");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

// Buscar el usuario por nombre y contraseña
$sql = "SELECT * FROM usuario WHERE nombre = '$nombre' AND contraseña = '$contraseña'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['nombre'] = $usuario['nombre'];
    header("Location: menu.php");
    exit;
} else {
    echo "Nombre o contraseña incorrectos. <a href='index2.html'>Volver</a>";
}
?>