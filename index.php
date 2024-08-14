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
    <title>VSMovil</title>
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


    <!-- Header -->
    <!-- Style -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./Header/css/style.css">
</head>

<body>
    <!-- <script>
    window.addEventListener("load", function() {
        var loaderContainer = document.querySelector(".loader-container");
        loaderContainer.style.display = "flex";
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 3000);
    });
    </script> -->
    <!-- ***** Preloader Start ***** -->
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php include './Header/index.php'; ?>
    <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <section id="Comparar">
                        <div class="main-banner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <div class="caption header-text">
                                            <h6>Bienvenido a Vsmobile</h6>
                                            <h2>¿Que <br>Quieres <br> Comparar?</h2>
                                            <div class="search-input">
                                                <form id="search" action="search_devices.php" method="GET">
                                                    <input type="text" placeholder="Busca un dispositivo"
                                                        id="searchText" name="searchKeyword"
                                                        oninput="searchDevices()" />
                                                    <button id="submitButton" type="submit" disabled>
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="device-list">
                                                <div id="deviceResults"></div>
                                            </div>
                                            <input type="checkbox" id="active" style="opacity: 0;">
                                            <label for="active" class="menu-btn"><span></span></label>
                                            <label for="active" class="close"></label>
                                            <div class="wrapper">

                                                <div class="main no">
                                                    <div class="loadercaca">
                                                        <div class="song">
                                                            <div class="selected-devices">
                                                                <ul id="selectedDevices"></ul>
                                                            </div>
                                                        </div>
                                                        <!-- <img src="./assets/images/popular-02.jpg" class="albumcover" alt=""> -->
                                                        <div class="play"></div>
                                                    </div>


                                                    <div class="comparar">
                                                        <button>
                                                            <svg viewBox="0 0 16 16" class="bi bi-discord"
                                                                fill="currentColor" height="16" width="16"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z">
                                                                </path>
                                                            </svg>
                                                            <span>Comparar</span>
                                                        </button>
                                                    </div>


                                                </div>

                                            </div>
                                            <script>
                                            var delayTimer;
                                            var selectedDevices = [];
                                            var allDevices = []; // Lista de todos los dispositivos cargados
                                            var maxResults = 5; // Número máximo de resultados a mostrar

                                            // Función para realizar la búsqueda en tiempo real
                                            function searchDevices() {
                                                var searchText = document.getElementById("searchText").value;

                                                // Limpiar el temporizador anterior para evitar envíos innecesarios
                                                clearTimeout(delayTimer);

                                                // Configurar un nuevo temporizador para retrasar el envío de la solicitud
                                                delayTimer = setTimeout(function() {
                                                        // Verificar si el campo de búsqueda no está vacío
                                                        if (searchText.trim() !== "") {
                                                            // Utiliza AJAX para enviar la búsqueda al servidor
                                                            // y obtener los resultados en formato JSON
                                                            var xmlhttp = new XMLHttpRequest();
                                                            xmlhttp.onreadystatechange = function() {
                                                                if (this.readyState == 4 && this.status ==
                                                                    200) {
                                                                    var results = JSON.parse(this.responseText);
                                                                    allDevices =
                                                                        results; // Guardar todos los dispositivos cargados

                                                                    // Filtrar los resultados para mostrar solo los dispositivos no seleccionados
                                                                    var deviceList = document.getElementById(
                                                                        "deviceResults");
                                                                    deviceList.innerHTML = "";
                                                                    var resultsCount =
                                                                        0; // Contador para el número de dispositivos mostrados

                                                                    for (var i = 0; i < results.length &&
                                                                        resultsCount < maxResults; i++) {
                                                                        var device = results[i];
                                                                        if (!isDeviceSelected(device
                                                                                .id_dispositivo)) {
                                                                            var listItem = document
                                                                                .createElement(
                                                                                    "div");
                                                                            listItem.classList.add("main");
                                                                            listItem.setAttribute(
                                                                                "data-device-id",
                                                                                device.id_dispositivo);
                                                                            var innerHTML =
                                                                                '<div class="loadercaca">' +
                                                                                '<div class="song">' +
                                                                                '<p class="name chi">' + device
                                                                                .modelo + '</p>' +
                                                                                '<p class="artist chi">' +
                                                                                device
                                                                                .marca + '</p>' +
                                                                                '</div>' +
                                                                                '<img class="albumcover" src="' +
                                                                                device.imgP + '">' +
                                                                                '<div class="play"></div>' +
                                                                                '</div>';
                                                                            listItem.innerHTML = innerHTML;
                                                                            deviceList.appendChild(listItem);
                                                                            resultsCount++; // Incrementar el contador de dispositivos mostrados
                                                                        }
                                                                    }

                                                                    // Agregar un evento de clic al contenedor de dispositivos para seleccionarlos o deseleccionarlos
                                                                    var devices = deviceList
                                                                        .getElementsByClassName(
                                                                            "main");
                                                                    for (var i = 0; i < devices.length; i++) {
                                                                        devices[i].addEventListener("click",
                                                                            function() {
                                                                                var deviceId = this
                                                                                    .getAttribute(
                                                                                        "data-device-id");
                                                                                var device = allDevices
                                                                                    .find(
                                                                                        function(d) {
                                                                                            return d
                                                                                                .id_dispositivo ===
                                                                                                deviceId;
                                                                                        });

                                                                                var isSelected =
                                                                                    selectedDevices
                                                                                    .some(function(d) {
                                                                                        return d.id ===
                                                                                            deviceId;
                                                                                    });

                                                                                if (isSelected) {
                                                                                    removeFromSelection(
                                                                                        deviceId);
                                                                                } else {
                                                                                    addToSelection(deviceId,
                                                                                        device.modelo);
                                                                                }
                                                                            });
                                                                    }
                                                                }
                                                            };
                                                            xmlhttp.open("GET",
                                                                "search_devices.php?searchKeyword=" +
                                                                searchText, true);
                                                            xmlhttp.send();
                                                        } else {
                                                            // Si el campo de búsqueda está vacío, borra los resultados de la búsqueda, pero mantiene las selecciones
                                                            var deviceList = document.getElementById(
                                                                "deviceResults");
                                                            deviceList.innerHTML = "";
                                                        }
                                                    },
                                                    100
                                                ); // Tiempo de retraso en milisegundos (ajusta según tus necesidades)
                                            }
                                            // Función para verificar si un dispositivo ya ha sido seleccionado
                                            function isDeviceSelected(deviceId) {
                                                return selectedDevices.some(function(device) {
                                                    return device.id === deviceId;
                                                });
                                            }

                                            // Función para agregar un dispositivo a la selección
                                            function addToSelection(id, modelo) {
                                                // Verificar si el dispositivo ya está seleccionado
                                                var isSelected = selectedDevices.some(function(device) {
                                                    return device.id === id;
                                                });

                                                // Si ya está seleccionado, deseleccionarlo
                                                if (isSelected) {
                                                    selectedDevices = selectedDevices.filter(function(device) {
                                                        return device.id !== id;
                                                    });
                                                } else {
                                                    // Si no está seleccionado, agregarlo a la lista de dispositivos seleccionados
                                                    selectedDevices.push({
                                                        id: id,
                                                        modelo: modelo
                                                    });
                                                }

                                                // Actualizar la lista de dispositivos seleccionados
                                                updateSelectedDevicesList();
                                            }


                                            // Función para eliminar un dispositivo de la selección
                                            function removeFromSelection(id) {
                                                selectedDevices = selectedDevices.filter(function(device) {
                                                    return device.id !== id;
                                                });
                                                updateSelectedDevicesList();
                                            }

                                            // Función para actualizar la lista de dispositivos seleccionados
                                            function updateSelectedDevicesList() {
                                                var selectedDevicesList = document.getElementById("selectedDevices");
                                                selectedDevicesList.innerHTML = "";
                                                for (var i = 0; i < selectedDevices.length; i++) {
                                                    var device = selectedDevices[i];
                                                    var listItem = document.createElement("li");
                                                    listItem.innerHTML = device.modelo;
                                                    selectedDevicesList.appendChild(listItem);
                                                }

                                                // Si ya hay 4 dispositivos seleccionados, deshabilita el botón de submit
                                                var submitButton = document.getElementById("submitButton");
                                                if (selectedDevices.length >= 4) {
                                                    submitButton.disabled = true;
                                                } else {
                                                    submitButton.disabled = false;
                                                }
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ***** Banner End ***** -->
                    <br />
                    <br />

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="featured-games header-text">
                                <div class="heading-section">
                                    <h4><em>Comparativas</em> + Populares</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    <?php
                                    // Consulta SQL para obtener los datos de los especphones ordenados por PerformanceAntutu descendente
                                    $sql_comparacion = "SELECT id_dispositivo, modelo, marca, PerformanceAntutu, imgP FROM especphones ORDER BY PerformanceAntutu DESC LIMIT 10";
                                    $result_comparacion = $conn->query($sql_comparacion);

                                    if ($result_comparacion->num_rows >= 2) {
                                        // Iterar para mostrar 5 pares de especphones
                                        for ($i = 0; $i < 4; $i++) {
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
                                    } else {
                                        echo 'No se encontraron suficientes especphones para realizar la comparación.';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <section id="Lo+Potente">
                                <div class="top-downloaded ">
                                    <div class="heading-section">
                                        <h4><em>Lo</em> + Potente</h4>
                                    </div>
                                    <ul>
                                        <?php
                                    // Consulta 3: Por nivel de Antutu
                                    $sql3 = "SELECT id_dispositivo, marca, modelo, PerformanceAntutu, imgP FROM especphones ORDER BY PerformanceAntutu DESC LIMIT 3";
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
                                            echo '<a  href="details.php?id=' . $id_dispositivo . '">';
                                            echo '<img src="' . $imgP . '" alt="" class="templatemo-item" />';
                                            echo '<h4>'. $marca .' ' . $modelo . '</h4>';
                                            echo '<span><i class="fa fa-fire" style="color: red"></i>    ' . $PerformanceAntutu . '</span>';
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
                            </section>
                        </div>
                    </div>

                    <br><br>
                    <!-- ***** Most Popular Start ***** -->
                    <section id="Top+Recientes">
                        <div class="most-popular">
                            <div class="row">
                                <div class="top col-lg-12">

                                    <div class="heading-section">
                                        <h4><em>Top</em> + Recientes</h4>
                                    </div>
                                    <div class="row">
                                        <?php
                                    $sql = "SELECT id_dispositivo ,modelo, marca, Announced, visitas, imgP FROM especphones ORDER BY id_dispositivo DESC LIMIT 8";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        $id_dispositivo = $row['id_dispositivo'];
                                        $modelo = $row['modelo'];
                                        $marca = $row['marca'];
                                        $imgP = $row['imgP'];


                                        // Estructura HTML para mostrar cada dato
                                        echo '<div class="col-lg-3 col-sm-6">';
                                        echo '<a href="details.php?id=' . $id_dispositivo . '">';
                                        echo '<div class="item phone">';
                                        echo '<img src="' . $imgP . '" alt="" href="./details.php" />';
                                        echo '<h4>' . $modelo  . '<br /><span>' . $marca . '</span></h4>';
                                        echo '</a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                        <div class="col-lg-12">
                                            <div class="main-button">
                                                <a href="browse.html">+ Populares</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- ***** Most Popular End ***** -->

                    <!-- Carrusel -->
                    <section id="Top+Infravalorados">
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
                                            // Consulta 1: Top Infravalorados
                                            $sql2 = "SELECT titulo, Price, categoria, marca, imgP, id_dispositivo FROM especphones WHERE categoria LIKE '%infravalorado%' ORDER BY id_dispositivo DESC LIMIT 6";
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
                    </section>
                    <!-- End Carrusel -->

                    <!-- ***** Gaming Library Start ***** -->
                    <section id="Top+Vistos">
                        <div class="gaming-library vistos">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Top </em> + Visto</h4>
                                </div>
                                <?php
                            $sql_top_vistos = "SELECT id_dispositivo, marca, modelo, visitas, imgP, Announced, LaunchStatus, Price FROM especphones ORDER BY visitas DESC LIMIT 3";
                            $result_top_vistos = $conn->query($sql_top_vistos);

                            // Mostrar los 3 especphones más vistos
                            while ($row = $result_top_vistos->fetch_assoc()) {
                                $id_dispositivo = $row['id_dispositivo'];
                                $marca = $row['marca'];
                                $modelo = $row['modelo'];
                                $visitas = $row['visitas'];
                                $imgP = $row['imgP'];
                                $Announced = $row['Announced'];
                                $LaunchStatus = $row['LaunchStatus'];
                                $Price = $row['Price'];

                                // Generar la estructura HTML para mostrar los especphones más vistos
                                echo '<div class="item phone">';
                                echo '<ul>';
                                echo '<li><img src="' . $imgP . '" alt="" class="templatemo-item" /></li>';
                                echo '<li><h4>' . $modelo . '</h4><span>' . $marca . '</span></li>';
                                echo '<li> <h4>Lanzamiento</h4> <span>' . $Announced . '</span> </li>';
                                // Agregar más detalles según tus necesidades
                                echo '<li> <h4>Estado</h4> <span>' . $LaunchStatus . '</span> </li>';
                                echo '<li> <h4>Precio</h4> <span>' . $Price . '</span> </li>';
                                echo '<li><div class="main-border-button"><a href="details.php?id=' . $id_dispositivo . '">Ver ahora</a></div></li>';
                                echo '</ul>';
                                echo '</div>';
                            }

                            ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="profile.html">Ver Top Completo</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ***** Gaming Library End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <section id="Top+CalidadPrecio">
                        <div class="gaming-library calidad-precio">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Top</em> + Calidad Precio</h4>
                                </div>
                                <?php
                            $sql_categoria = "SELECT marca, modelo, Announced, LaunchStatus, Price, imgP, id_dispositivo FROM especphones WHERE id_dispositivo IN (
                                SELECT id_dispositivo FROM especphones WHERE categoria LIKE '%calidadprecio%') 
                                ORDER BY id_dispositivo DESC LIMIT 3";
                            $result_categoria = $conn->query($sql_categoria);

                            // Mostrar los especphones con categoría "calidadprecio"
                            while ($row = $result_categoria->fetch_assoc()) {
                                $marca = $row['marca'];
                                $modelo = $row['modelo'];
                                $Announced = $row['Announced'];
                                $LaunchStatus = $row['LaunchStatus'];
                                $Price = $row['Price'];
                                $imgP = $row['imgP'];
                                $id_dispositivo = $row['id_dispositivo'];
                                // Generar la estructura HTML para mostrar los especphones
                                echo '<div class="item phone">';
                                echo '<ul>';
                                echo '<li><img src="' . $imgP . '" alt="" class="templatemo-item" /></li>';
                                echo '<li><h4>' . $modelo . '</h4><span>' . $marca . '</span></li>';
                                echo '<li><h4>Lanzamiento</h4><span>' . $Announced . '</span></li>';
                                echo '<li><h4>Estado</h4><span>' . $LaunchStatus . '</span></li>';
                                echo '<li><h4>Precio</h4><span>' . $Price . '</span></li>';
                                echo '<li><div class="main-border-button border-no-active"><a href="details.php?id=' . $id_dispositivo . '">Ver ahora</a></div></li>';
                                echo '</ul>';
                                echo '</div>';
                            }

                            ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="profile.html">Ver Top Completo</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ***** Gaming Library End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <section id="Top+Recomendados">
                        <div class="gaming-library recomendados">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Top</em> + Recomendados</h4>
                                </div>
                                <?php
                            $sql_categoria = "SELECT marca, modelo, Announced, LaunchStatus, Price, imgP, id_dispositivo FROM especphones WHERE id_dispositivo IN (
                                SELECT id_dispositivo FROM especphones WHERE categoria LIKE '%recomendado%') 
                                ORDER BY id_dispositivo DESC LIMIT 3";
                            $result_categoria = $conn->query($sql_categoria);

                            // Mostrar los especphones con categoría "calidadprecio"
                            while ($row = $result_categoria->fetch_assoc()) {
                                $marca = $row['marca'];
                                $modelo = $row['modelo'];
                                $Announced = $row['Announced'];
                                $LaunchStatus = $row['LaunchStatus'];
                                $Price = $row['Price'];
                                $imgP = $row['imgP'];
                                $id_dispositivo = $row['id_dispositivo'];
                                // Generar la estructura HTML para mostrar los especphones
                                echo '<div class="item phone">';
                                echo '<ul>';
                                echo '<li><img src="' . $imgP . '" alt="" class="templatemo-item" /></li>';
                                echo '<li><h4>' . $modelo . '</h4><span>' . $marca . '</span></li>';
                                echo '<li><h4>Lanzamiento</h4><span>' . $Announced . '</span></li>';
                                echo '<li><h4>Estado</h4><span>' . $LaunchStatus . '</span></li>';
                                echo '<li><h4>Precio</h4><span>' . $Price . '</span></li>';
                                echo '<li><div class="main-border-button border-no-active"><a href="details.php?id=' . $id_dispositivo . '">Ver ahora</a></div></li>';
                                echo '</ul>';
                                echo '</div>';
                            }
                            ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="profile.html">Ver Top Completo</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>


    <?php include './php/modeCD.php'; ?>

    <?php include './php/footer.php'; ?>

    <!-- Scripts -->
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

    <!-- Header -->
    <script src="./header/js/bootstrap.min.js"></script>
    <script src="./header/js/main.js"></script>

</body>

</html>