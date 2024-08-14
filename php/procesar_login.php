<?php
// Datos de conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "espectelefonos";

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Conectarse a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para verificar el usuario y la contraseña
$stmt = $conn->prepare("SELECT * FROM users WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();

// Obtener el resultado de la consulta
$result = $stmt->get_result();

// Verificar si se encontró el usuario y la contraseña coinciden
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $contrasena_hash = $row['contrasena_hash'];
    if (password_verify($contrasena, $contrasena_hash)) {
        // Las credenciales son correctas
        // Establecer la cookie de sesión al iniciar sesión correctamente
        setcookie('sesion_iniciada', $usuario, time() + (86400 * 30), "/"); // Caduca en 30 días
        session_start();
        $_SESSION['usuario'] = $usuario;    
        header("Location: ../profile.php");
        exit();
    } else {
        // La contraseña es incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // El usuario no existe
    echo "Usuario no encontrado";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>