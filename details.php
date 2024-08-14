<?php
include './php/conexion.php';

// Establecer la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Obtener el ID del dispositivo desde la URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_dispositivo = $_GET['id'];

    // Incrementar la variable "visitas" en 1 para el dispositivo actual
    $updateVisitasSql = "UPDATE especphones SET visitas = visitas + 1 WHERE id_dispositivo = $id_dispositivo";
    if ($conn->query($updateVisitasSql) === TRUE) {
        // La variable "visitas" se incrementó correctamente

        // Consultar los detalles del dispositivo con el ID proporcionado
        $sql = "SELECT titulo, descripcion, marca, modelo, DisplayType, Size, Resolution, Protection, Cardslot, Internal, RAM, RAMType, MainCamera, SelfieCamera, Loudspeaker, Jack3_5, BatteryType, BatteryCharging, SIM, WLAN, Bluetooth, Positioning, NFC, InfraredPort, Radio, USB, Technology, Dimensions, BodyWeight, Build, Certifications, Announced, LaunchStatus, OS, Chipset, CPU, GPU, Colors, Price, PerformanceAntutu, amazon, imgP, categoria, Sensors
               FROM especphones
               WHERE id_dispositivo = $id_dispositivo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Hay resultados, procede a mostrar los detalles del dispositivo
            while ($row = $result->fetch_assoc()) {
                // Obtener los datos del dispositivo
                $titulo = $row['titulo'];
                $descripcion = $row['descripcion'];
                $marca = $row['marca'];
                $modelo = $row['modelo'];
                $DisplayType = $row['DisplayType'];
                $Size = $row['Size'];
                $Resolution = $row['Resolution'];
                $Protection = $row['Protection'];
                $Cardslot = $row['Cardslot'];
                $Internal = $row['Internal'];
                $RAM = $row['RAM'];
                $RAMType = $row['RAMType'];
                $MainCamera = $row['MainCamera'];
                $SelfieCamera = $row['SelfieCamera'];
                $Loudspeaker = $row['Loudspeaker'];
                $Jack3_5 = $row['Jack3_5'];
                $BatteryType = $row['BatteryType'];
                $BatteryCharging = $row['BatteryCharging'];
                $SIM = $row['SIM'];
                $WLAN = $row['WLAN'];
                $Bluetooth = $row['Bluetooth'];
                $Positioning = $row['Positioning'];
                $NFC = $row['NFC'];
                $InfraredPort = $row['InfraredPort'];
                $Radio = $row['Radio'];
                $USB = $row['USB'];
                $Technology = $row['Technology'];
                $Dimensions = $row['Dimensions'];
                $BodyWeight = $row['BodyWeight'];
                $Build = $row['Build'];
                $Certifications = $row['Certifications'];
                $Announced = $row['Announced'];
                $LaunchStatus = $row['LaunchStatus'];
                $OS = $row['OS'];
                $Chipset = $row['Chipset'];
                $CPU = $row['CPU'];
                $GPU = $row['GPU'];
                $Colors = $row['Colors'];
                $Price = $row['Price'];
                $PerformanceAntutu = $row['PerformanceAntutu'];
                $amazon = $row['amazon'];
                $imgP = $row['imgP'];
                $Sensors = $row['Sensors'];
                $categoria = $row['categoria'];
            }
        } else {
            // No se encontraron detalles para el dispositivo
        }
    } else {
        // Error al incrementar la variable "visitas"
        echo "Error: " . $conn->error;
    }
} else {
    // No se proporcionó el ID del dispositivo en la URL
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <title>VSMovil | Detalles</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="./assets/css/fontawesome.css" />
    <link rel="stylesheet" href="./assets/css/templatemo-cyborg-gaming.css" />
    <link rel="stylesheet" href="./assets/css/owl.css" />
    <link rel="stylesheet" href="./assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

</head>

<style>
swiper-container {
    width: 100%;
    height: 100%;
}

swiper-slide {
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
}

swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card {
    height: auto;
    overflow: hidden;
    transition: height 0.5s;
}

.card:hover {
    height: auto;
}

.additional-info {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.3s, opacity 0.3s;
}

.cardt {
    align-items: center;
    text-align: right;
    justify-content: space-between;
    height: 100%;
    box-sizing: border-box;
}

.card:hover .additional-info {
    max-height: 250px;
    opacity: 1;
}

.cardt h3 {
    margin: 0;
    transition: transform 0.3s;
}

.card:hover .cardt h3 {
    transform: translateY(50%);
}
</style>

<body>
    <!-- ***** Preloader Start ***** -->
    <?php include './php/loaderComparation.php'; ?>
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <?php include './Header/index.php'; ?>
    <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Details Start ***** -->
                    <div class="game-details">
                        <!-- ***** Featured Start ***** -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-profile dispositivos">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img class="prev" src="<?php echo $imgP; ?>" alt=""
                                                style="border-radius: 23px; height: 250px; width: 100%;" />
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <div class="main-info header-text">
                                                <span><?php echo $categoria; ?></span>
                                                <span><?php echo $marca; ?></span>
                                                <h4 style="color: #fff; font-weight: bolder;"><?php echo $titulo; ?>
                                                </h4>
                                                <p><?php echo $descripcion; ?>.</p>
                                                <div class="main-border-button">
                                                    <a class="amazon" href="<?php echo $amazon; ?>">Comprar en
                                                        Amazon</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 align-self-center">
                                            <ul>
                                                <li>Antutu <span><?php echo $PerformanceAntutu; ?></span></li>
                                                <li>ROM <span><?php echo $Internal; ?></span></li>
                                                <li>RAM <span><?php echo $RAM; ?></span></li>
                                                <li>Precio <span>$ <?php echo $Price; ?>.00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <!-- ***** Featured End ***** -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content specs">
                                    <div class="row">
                                        <div class="grey-bg container-fluid specs">
                                            <div class="row">
                                                <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-screen-smartphone primary font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="primary">
                                                                                Pantalla
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="primary">Tipo: </span>
                                                                            <?php echo $DisplayType; ?><br>
                                                                            <span class="primary">Tamaño: </span>
                                                                            <?php echo $Size; ?><br>
                                                                            <span class="primary">Resolucion: </span>
                                                                            <?php echo $Resolution; ?><br>
                                                                            <span class="primary">Proteccion: </span>
                                                                            <?php echo $Protection; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-fire warning font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="warning">
                                                                                Specs
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="warning">Procesador: </span>
                                                                            <?php echo $Chipset; ?><br>
                                                                            <span class="warning">CPU: </span>
                                                                            <?php echo $CPU; ?><br>
                                                                            <span class="warning">GPU: </span>
                                                                            <?php echo $GPU; ?><br>
                                                                            <span class="warning">Sisema
                                                                                Operativot: </span>
                                                                            <?php echo $OS; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-8 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-fire success font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="success">
                                                                                Cámaras
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="success">Cámaras
                                                                                Delanteras: </span>
                                                                            <?php echo $MainCamera; ?><br>
                                                                            <span class="success">Cámaras
                                                                                Traseras: </span>
                                                                            <?php echo $SelfieCamera; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="media-body text-left">
                                                                        <div class="cardt text-left"
                                                                            style="background-color: none;">
                                                                            <h3 class="danger">
                                                                                RAM / ROM
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="danger">Memoria
                                                                                Expandible: </span>
                                                                            <?php echo $Cardslot; ?><br>
                                                                            <span class="danger">Memoria
                                                                                Interna: </span>
                                                                            <?php echo $Internal; ?><br>
                                                                            <span class="danger">RAM: </span>
                                                                            <?php echo $RAM; ?><br>
                                                                            <span class="danger">Tipo de RAM:
                                                                            </span>
                                                                            <?php echo $RAMType; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-folder-alt danger font-large-2 float-right"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-volume-2 danger font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="danger">
                                                                                Sonido
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="danger">Sonido Estereo:
                                                                            </span>
                                                                            <?php echo $Loudspeaker; ?><br>
                                                                            <span class="danger">Conector Jack:
                                                                                3.5</span>
                                                                            <?php echo $Jack3_5; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-info warning font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="warning">
                                                                                SIM
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="warning">DUAL SIM:
                                                                            </span>
                                                                            <?php echo $SIM; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-energy primary font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="primary">
                                                                                Batería
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="primary">Tipo de
                                                                                Batería:
                                                                            </span>
                                                                            <?php echo $BatteryType; ?><br>
                                                                            <span class="primary">Velocidad de Carga:
                                                                            </span>
                                                                            <?php echo $BatteryCharging; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-feed success font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="success">
                                                                                Conexiones
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="success">BT:
                                                                            </span>
                                                                            <?php echo $Bluetooth; ?><br>
                                                                            <span class="success">Conector USB:
                                                                            </span>
                                                                            <?php echo $USB; ?><br>
                                                                            <span class="success">NFC:
                                                                            </span>
                                                                            <?php echo $NFC; ?><br>
                                                                            <span class="success">Puerto Infrarrojo:
                                                                            </span>
                                                                            <?php echo $InfraredPort; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-plane danger font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="danger">
                                                                                Posicionamiento
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="danger">Posicionamiento:
                                                                            </span>
                                                                            <?php echo $Positioning; ?><br>
                                                                            <span class="danger">Conexiones WLAN:
                                                                            </span>
                                                                            <?php echo $WLAN; ?><br>
                                                                            <span class="danger">Radio:
                                                                            </span>
                                                                            <?php echo $Radio; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-5 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="media-body text-left">
                                                                        <div class="cardt text-left"
                                                                            style="background-color: none;">
                                                                            <h3 class="primary">
                                                                                Red
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="primary">Redes: </span>
                                                                            <?php echo $Technology; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-folder-alt primary font-large-2 float-right"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-wallet success font-large-2 float-left"></i>
                                                                    </div>
                                                                    <div class="media-body text-right">
                                                                        <div class="cardt"
                                                                            style="background-color: none;">
                                                                            <h3 class="success">
                                                                                Precio
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="success">Precio Anunciado:
                                                                            </span>
                                                                            <?php echo $Price; ?><br>
                                                                            <span class="success">Estado:
                                                                            </span>
                                                                            <?php echo $LaunchStatus; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-12 d-flex">
                                                    <div class="card rounded-4 w-100" id="expandibleCard">
                                                        <div class="card-content">
                                                            <div class="card-body" id="cardBody">
                                                                <div class="media d-flex align-items-center">
                                                                    <div class="media-body text-left">
                                                                        <div class="cardt text-left"
                                                                            style="background-color: none;">
                                                                            <h3 class="warning">
                                                                                Chasis
                                                                            </h3>
                                                                        </div>
                                                                        <!-- Información adicional oculta -->
                                                                        <div class="additional-info">
                                                                            <br>
                                                                            <span class="warning">Material de
                                                                                Construcción:
                                                                            </span>
                                                                            <?php echo $Build; ?><br>
                                                                            <span class="warning">Dimensiones:
                                                                            </span>
                                                                            <?php echo $Dimensions; ?><br>
                                                                            <span class="warning">Peso:
                                                                            </span>
                                                                            <?php echo $BodyWeight; ?><br>
                                                                            <span class="warning">Colores:
                                                                            </span>
                                                                            <?php echo $Colors; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-self-center">
                                                                        <i
                                                                            class="icon-folder-alt warning font-large-2 float-right"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <swiper-container class="mySwiper" autoplay-delay="true" speed="2000"
                                                    loop="true">
                                                    <swiper-slide>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-01.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-02.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-05.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px" />
                                                        </div>
                                                    </swiper-slide>
                                                    <swiper-slide>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-01.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-02.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px" />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img class="img-detail" src="assets/images/popular-04.jpg"
                                                                alt=""
                                                                style="border-radius: 23px; margin-bottom: 30px;" />
                                                        </div>
                                                    </swiper-slide>
                                                </swiper-container>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other-games">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Other Related</em> Games</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-01.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-02.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-03.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-02.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-03.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <img src="assets/images/game-01.jpg" alt="" class="templatemo-item" />
                                    <h4 style="font-weight: 900; font-size: 1.3rem; color:#fff">Dota 2</h4>
                                    <span style="font-size: 1.1rem;">Sandbox</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './php/modeCD.php'; ?>

    <?php include './php/footer.php'; ?>

    <?php
    $conn->close();
    ?>
    <!-- // Cerrar la conexión -->
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/isotope.min.js"></script>
    <script src="./assets/js/owl-carousel.js"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="./assets/js/popup.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="./assets/js/animaciones.js"></script>

    <script src="./header/js/bootstrap.min.js"></script>
    <script src="./header/js/main.js"></script>
</body>

</html>