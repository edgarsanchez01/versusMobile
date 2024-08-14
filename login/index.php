<?php
include '../php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../php/procesar_login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Iniciar sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="usuario" placeholder="Usuario" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="contrasena" placeholder="Contraseña" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <img src="img/cohete1.svg" class="image" alt="" id="cohete" />
            </div>
        </div>
    </div>
</body>

</html>