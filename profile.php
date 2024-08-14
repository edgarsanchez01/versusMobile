<?php
session_start();
// Verificar si la sesión está activa o si se ha establecido una cookie de sesión
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} elseif (isset($_COOKIE['sesion_iniciada'])) {
    // Obtener el usuario de la cookie de sesión
    $usuario = $_COOKIE['sesion_iniciada'];
    // Actualizar la sesión con el usuario obtenido de la cookie
    $_SESSION['usuario'] = $usuario;
} else {
    // Redirigir al archivo de inicio de sesión si no hay sesión activa ni cookie de sesión
    header("Location: login.php");
    exit();
}

include './php/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>VSMovil</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./header/css/style.css">
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php include './php/header.php'; ?>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-lg-4">
                                        <img class="prev" src="./assets/images/profile.jpg" alt=""
                                            style="border-radius: 23px; height: 250px; width: 100%;" />
                                    </div>
                                    <div class="col-lg-4  align-self-center">
                                        <div class="main-info header-text">
                                            <span style="background-color: green;">Online</span>
                                            <h4><?php echo $usuario; ?></h4>
                                            <p>Bienvenido de nuevo <?php echo $usuario; ?> ¿en que puedo ayudarte el
                                                diade hoy?.</p>
                                            <div class="main-border-button">
                                                <a href="./php/logout.php">Cerrar sesión</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="clips">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-section">
                                                        <h4><em>Herramientas</em> Principales</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="./assets/images/clip-01.jpg" alt=""
                                                                style="border-radius: 23px;">
                                                            <a href="./form/mainform.php" target="_blank"><i
                                                                    class="fa fa-plus"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Agregar dispositivo</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="assets/images/clip-02.jpg" alt=""
                                                                style="border-radius: 23px;">
                                                            <a href="#" target="_blank"><i class="fa fa-pencil"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Editar dispositivo</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="assets/images/clip-03.jpg" alt=""
                                                                style="border-radius: 23px;">
                                                            <a href="#" target="_blank"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Comparacion populares</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <img src="assets/images/clip-04.jpg" alt=""
                                                                style="border-radius: 23px;">
                                                            <a href="#" target="_blank"><i class="fa fa-pencil"></i></a>
                                                        </div>
                                                        <div class="down-content">
                                                            <h4>Recomendados y Calidad precio</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <div class="gaming-library profile-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Publicaciones </em> + Recientes </h4>
                            </div>
                            <?php
                            // Realizar la consulta a la base de datos para obtener los últimos 5 dispositivos
                            $sql = "SELECT titulo, marca, visitas, l_estado, imgP, id_dispositivo FROM dispositivos ORDER BY id_dispositivo DESC LIMIT 5";
                            $result = $conn->query($sql);

                            // Verificar si se encontraron resultados
                            if ($result->num_rows > 0) {
                                // Iterar sobre los resultados y generar el HTML para cada dispositivo
                                while ($row = $result->fetch_assoc()) {
                                    $titulo = $row['titulo'];
                                    $marca = $row['marca'];
                                    $visitas = $row['visitas'];
                                    $l_estado = $row['l_estado'];
                                    $imgP = $row['imgP'];
                                    $id_dispositivo = $row['id_dispositivo'];

                                    // Generar el HTML para el dispositivo
                                    echo '<div class="item">';
                                    echo '<ul>';
                                    echo '<li><img src="' . $imgP . '" alt="" class="templatemo-item"></li>';
                                    echo '<li><h4>' . $titulo . '</h4><span>' . $marca . '</span></li>';
                                    echo '<li><h4></h4><span></span></li>';
                                    echo '<li><h4>Visitas</h4><span>' . $visitas . '</span></li>';
                                    echo '<li><h4>Estado</h4><span>' . $l_estado . '</span></li>';
                                    echo '<li><div class="main-border-button border-no-active"><a href="./form/form.php?id=' . $id_dispositivo . '">Ver / Editar</a></div></li>';
                                    echo '</ul>';
                                    echo '</div>';
                                }
                            } else {
                                echo "No se encontraron dispositivos.";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>

    <?php include './php/modeCD.php'; ?>

    <?php include './php/footer.php'; ?>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>