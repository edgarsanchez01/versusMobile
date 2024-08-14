<?php
// Datos del usuario y contraseña en texto plano
$usuario = 'EdgarPlay';
$contrasena = 'EdgarPlay1';

// Encriptar la contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Conectarse a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "espectelefonos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar los datos en la tabla
$stmt = $conn->prepare("INSERT INTO users (usuario, contrasena_hash) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $contrasena_hash);
$stmt->execute();

// Cerrar la conexión
$stmt->close();
$conn->close();
?>