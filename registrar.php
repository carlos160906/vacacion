<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "proyecto");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña =$_POST['contraseña'];

// Insertar en la base de datos
$sql = "INSERT INTO usuario (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado correctamente. <a href='index2.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>