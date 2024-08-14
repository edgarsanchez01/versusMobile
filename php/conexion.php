<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "espectelefonos";

// Establecer la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
?>