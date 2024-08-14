<?php
include './php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <title>VSMovil | Busqueda</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./Header/css/style.css">
</head>

<body>
    <script>
    window.addEventListener("load", function() {
        var loaderContainer = document.querySelector(".loader-container");
        loaderContainer.style.display = "flex";
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 3000);
    });
    </script>
    <!-- ***** Preloader Start ***** -->
    <?php include './php/loaderIndex.php'; ?>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php include './Header/index.php'; ?>
    <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>+ Recientes</em>
                                        <?php if (isset($_GET['marca'])) { echo "de " . $_GET['marca']; } ?></h4>
                                </div>

                                <div class="row">
                                    <?php
                                    if (isset($_GET['marca'])) {
                                        $marca_filtrada = $_GET['marca'];
                                    
                                        // Prepara la consulta SQL para obtener dispositivos de la marca filtrada
                                        $sql = "SELECT id_dispositivo, modelo, marca, Announced, visitas, imgP FROM especphones WHERE marca = '$marca_filtrada' ORDER BY id_dispositivo DESC LIMIT 25";
                                        $result = $conn->query($sql);
                                        
                                    while ($row = $result->fetch_assoc()) {
                                        $id_dispositivo = $row['id_dispositivo'];
                                        $modelo = $row['modelo'];
                                        $marca = $row['marca'];
                                        $Announced = $row['Announced'];
                                        $visitas = $row['visitas'];
                                        $imgP = $row['imgP'];


                                        // Estructura HTML para mostrar cada dato
                                        echo '<div class="col-lg-3 col-sm-6">';
                                        echo '<a href="details.php?id=' . $id_dispositivo . '">';
                                        echo '<div class="top item phone">';
                                        echo '<img src="' . $imgP . '" alt="" href="./details.php" />';
                                        echo '<h4>' . $modelo  . '<br /><span>' . $marca . '</span></h4>';
                                        echo '<ul>';
                                        echo '</a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }} else {
                                        echo "Marca no especificada en la URL.";
                                    }
                                    ?>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="browse.html">+ Recientes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
                    <br><br>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="featured-games header-text">
                                <div class="heading-section">
                                    <h4><em>Comparativas</em> + Populares</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    <?php
                                   $sql_comparacion = "SELECT id_dispositivo, modelo, marca, PerformanceAntutu, imgP FROM especphones";

                                   if (isset($_GET['marca'])) {
                                       $marca_filtrada = $_GET['marca'];
                                       $sql_comparacion .= " WHERE marca = '$marca_filtrada'";
                                   }
                                   
                                   $sql_comparacion .= " ORDER BY PerformanceAntutu DESC LIMIT 4";
                                   
                                   $result_comparacion = $conn->query($sql_comparacion);
                                   
                                   if ($result_comparacion->num_rows >= 2) {
                                            // Obtener los datos del primer dispositivo del par
                                            $row1 = $result_comparacion->fetch_assoc();
                                            $id_dispositivo1 = $row1['id_dispositivo'];
                                            $modelo1 = $row1['modelo'];
                                            $marca1 = $row1['marca'];
                                            $PerformanceAntutu1 = $row1['PerformanceAntutu'];
                                            $imgP1 = $row1['imgP'];

                                            // Obtener los datos del segundo dispositivo del par
                                            $row2 = $result_comparacion->fetch_assoc();
                                            $id_dispositivo2 = $row2['id_dispositivo'];
                                            $modelo2 = $row2['modelo'];
                                            $marca2 = $row2['marca'];
                                            $PerformanceAntutu2 = $row2['PerformanceAntutu'];
                                            $imgP2 = $row2['imgP'];

                                            // Mostrar los datos en el formato deseado
                                            echo '<div class="item">';
                                            echo '<a href="comparation.php?id[]=' . $id_dispositivo1 . ' &id[]=' . $id_dispositivo2 . '">   ';
                                            echo '<div class="thumb">';
                                            echo '<div class="image-container">';
                                            echo '<img class="up" src="' . $imgP1 . '" alt="" />';
                                            echo '<img class="down" src="' . $imgP2 . '" alt="" />';
                                            echo '</div>';
                                            echo '<div class="hover-effect">';
                                            echo '<h6>' . ($PerformanceAntutu1 > $PerformanceAntutu2 ? $modelo1 :
                                                $modelo2) . '</h6>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<h4>' . $modelo1 . '<br /><span>' . $modelo2 . '</span></h4>';
                                            echo '</a>';
                                            echo '</div>';
                                        }
                                     else {
                                        echo 'No se encontraron suficientes especphones para realizar la comparación.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="top-downloaded ">
                                <div class="heading-section">
                                    <h4><em>Lo</em> + Potente</h4>
                                </div>
                                <ul>
                                    <?php
                                    // Consulta SQL para obtener los 3 dispositivos más potentes de la marca filtrada
                                    $sql3 = "SELECT id_dispositivo, marca, modelo, PerformanceAntutu, imgP FROM especphones";

                                    if (isset($_GET['marca'])) {
                                        $marca_filtrada = $_GET['marca'];
                                        $sql3 .= " WHERE marca = '$marca_filtrada'";
                                    }

                                    $sql3 .= " ORDER BY PerformanceAntutu DESC LIMIT 3";

                                    $result3 = $conn->query($sql3);

                                    if ($result3->num_rows > 0) {
                                        while ($row = $result3->fetch_assoc()) {
                                            // Obtener los datos de cada dispositivo
                                            $id_dispositivo = $row['id_dispositivo'];
                                            $marca = $row['marca'];
                                            $modelo = $row['modelo'];
                                            $PerformanceAntutu = $row['PerformanceAntutu'];
                                            $imgP = $row['imgP'];
                                            // Generar la estructura HTML para mostrar los datos
                                            echo '<li>';
                                            echo '<a href="details.php?id=' . $id_dispositivo . '">';
                                            echo '<img src="' . $imgP . '" alt="" class="templatemo-item" />';
                                            echo '<h4>' . $modelo . '</h4>';
                                            echo '<h6>' . $marca . '</h6>';
                                            echo '<span><i class="fa fa-fire" style="color: red"></i>    ' . $PerformanceAntutu . '</span>';
                                            echo '</a>';
                                            echo '</li>';
                                        }
                                    } else {
                                        echo "No se encontraron especphones para mostrar.";
                                    }
                                    ?>
                                </ul>
                                <div class="text-button">
                                    <a href="profile.html">Ver +</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Carrusel -->
                    <div class="carrusel">
                        <div class="col-lg-12">
                            <div class="collections">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="heading-section">
                                            <h4><em>Top </em>+ Infravalorados</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="owl-collection owl-carousel">
                                            <?php
                                            $sql2 = "SELECT titulo, Price, categoria, marca, imgP, id_dispositivo FROM especphones";

                                            if (isset($_GET['marca'])) {
                                                $marca_filtrada = $_GET['marca'];
                                                $sql2 .= " WHERE marca = '$marca_filtrada' AND categoria LIKE '%infravalorado%'";
                                            } else {
                                                $sql2 .= " WHERE categoria LIKE '%infravalorado%'";
                                            }

                                            $sql2 .= " ORDER BY id_dispositivo DESC LIMIT 6";

                                            $result2 = $conn->query($sql2);

                                            if ($result2->num_rows > 0) {
                                                while ($row = $result2->fetch_assoc()) {
                                                    // Obtener los datos de cada dispositivo
                                                    $titulo = $row['titulo'];
                                                    $Price = $row['Price'];
                                                    $categoria = $row['categoria'];
                                                    $marca = $row['marca'];
                                                    $imgP = $row['imgP'];
                                                    $id_dispositivo = $row['id_dispositivo'];

                                                    // Generar la estructura HTML para mostrar los datos
                                                    echo '<div class="item">';
                                                    echo '<img src="' . $imgP . '" alt="" />';
                                                    echo '<div class="down-content">';
                                                    echo '<h4>' . $titulo . '</h4>';
                                                    echo '<span class="collection">Precio:<br /><strong>' . $Price . '</strong></span>';
                                                    echo '<span class="category">Marca:<br /><strong>' . $marca . '</strong></span>';
                                                    echo '<div class="main-button">';
                                                    echo '<a href="details.php?id=' . $id_dispositivo . '">Saber +</a>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            } else {
                                                echo "No se encontraron especphones con la categoría 'Infravalorado'.";
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Carrusel -->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

    <!-- Animaciones scripts  -->
    <script src="./assets/js/animaciones.js"></script>

    <script src="./header/js/bootstrap.min.js"></script>
    <script src="./header/js/main.js"></script>
</body>

</html>