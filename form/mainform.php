<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Nueva Publicacion</title>
    <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css" />
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-cyborg-gaming.css" />
    <link rel="stylesheet" href="../assets/css/owl.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../form/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<style>
.checklist {
    --background: #fff;
    --text: #414856;
    --check: #f7b1ab;
    --disabled: #c3c8de;
    --width: 100px;
    --border-radius: 10px;
    background: var(--background);
    width: auto;
    height: auto;
    border-radius: var(--border-radius);
    position: relative;
    box-shadow: 0 10px 30px rgba(65, 72, 86, 0.05);
    padding: 10px;
    display: grid;
    grid-template-columns: 30px auto;
    align-items: center;
    justify-content: center;
}

.checklist label {
    color: var(--text);
    position: relative;
    cursor: pointer;
    display: grid;
    align-items: center;
    width: fit-content;
    transition: color 0.3s ease;
    margin-right: 20px;
}

.checklist label::before,
.checklist label::after {
    content: "";
    position: absolute;
}

.checklist label::before {
    height: 2px;
    width: 8px;
    left: -27px;
    background: var(--check);
    border-radius: 2px;
    transition: background 0.3s ease;
}

.checklist label:after {
    height: 4px;
    width: 4px;
    top: 8px;
    left: -25px;
    border-radius: 50%;
}

.checklist input[type="checkbox"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    position: relative;
    height: 15px;
    width: 15px;
    outline: none;
    border: 0;
    margin: 0 15px 0 0;
    cursor: pointer;
    background: var(--background);
    display: grid;
    align-items: center;
    margin-right: 20px;
}

.checklist input[type="checkbox"]::before,
.checklist input[type="checkbox"]::after {
    content: "";
    position: absolute;
    height: 2px;
    top: auto;
    background: var(--check);
    border-radius: 2px;
}

.checklist input[type="checkbox"]::before {
    width: 0px;
    right: 60%;
    transform-origin: right bottom;
}

.checklist input[type="checkbox"]::after {
    width: 0px;
    left: 40%;
    transform-origin: left bottom;
}

.checklist input[type="checkbox"]:checked::before {
    animation: check-01 0.4s ease forwards;
}

.checklist input[type="checkbox"]:checked::after {
    animation: check-02 0.4s ease forwards;
}

.checklist input[type="checkbox"]:checked+label {
    color: var(--disabled);
    animation: move 0.3s ease 0.1s forwards;
}

.checklist input[type="checkbox"]:checked+label::before {
    background: var(--disabled);
    animation: slice 0.4s ease forwards;
}

.checklist input[type="checkbox"]:checked+label::after {
    animation: firework 0.5s ease forwards 0.1s;
}

.pets-name-files {
    align-items: center;
    text-align: center;
    height: 38px;
    border-radius: 5px;
    background-color: #fff;
    margin-top: 9%;
    color: #d3394c;

}

.card {
    justify-content: center;
    align-content: center;
    text-align: center;
}
</style>

<body>
    <!-- partial:index.partial.html -->
    <div class="signup-container">
        <div class="left-container">
            <div class="game-details">
                <!-- ***** Featured Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-profile">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="prev" src="../assets/images/featured-02.jpg" alt=""
                                        style="border-radius: 23px" />
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <ul>
                                        <div class="main-info header-text">
                                            <span id="categoria-preview">Categoria</span>
                                            <span id="marca-preview">Marca</span>
                                            <h4 id="titulo-preview">Titulo Flagship</h4>
                                            <p id="descripcion-preview">Agregamos una descripcion breve del dispositivo
                                            </p>
                                            <div class="main-border-button">
                                                <a href="?php echo $amazon; ?>">Comprar en Amazon</a>
                                            </div>
                                        </div>
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
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="../assets/images/details-01.jpg" alt=""
                                        style="border-radius: 23px; margin-bottom: 30px" />
                                </div>
                                <div class="col-lg-4">
                                    <img src="../assets/images/details-02.jpg" alt=""
                                        style="border-radius: 23px; margin-bottom: 30px" />
                                </div>
                                <div class="col-lg-4">
                                    <img src="../assets/images/details-03.jpg" alt=""
                                        style="border-radius: 23px; margin-bottom: 30px" />
                                </div>

                                <div class="grey-bg container-fluid">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-screen-smartphone primary font-large-2 float-left"></i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="primary">Tipo de pantalla</h3>
                                                                <span id="p_tipo-preview">Tipo de pantala</span> | <span
                                                                    id="p_tama-preview">Tamaño de pantalla</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-frame success font-large-2 float-left"></i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h4 class="success">
                                                                    Especificaciones de Pantalla
                                                                </h4>
                                                                <span id="p_reso-preview">Resolucion</span> | <span
                                                                    id="p_prot-preview">Proteccion</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4 class="danger">Procesador</h4>
                                                                <span id="procesador-preview">Procesador</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-fire danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4 class="success">CPU</h4>
                                                                <span id="CPU-preview">CPU</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-ghost success font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4 class="danger">GPU</h4>
                                                                <span id="GPU-preview">GPU</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-game-controller danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="danger">RAM</h3>
                                                                <span id="m_ram[]-preview">Memoria RAM</span> GB
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-rocket danger font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="primary">Tipo de
                                                                    RAM
                                                                </h3>
                                                                <span id="ramt-preview">Tipo de RAM</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-info primary font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="success">ROM
                                                                </h3>
                                                                <span id="m_interna[]-preview">Memoria interna</span> GB
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-folder-alt success font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 f-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="warning">Memoria
                                                                    expandible
                                                                </h3>
                                                                <span id="memoria-expandible-preview"> Memoria
                                                                    expandible</span>
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
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="primary">
                                                                    Camara Trasera
                                                                </h3>
                                                                <span id="camaras-preview">Camara Trasera</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-camera primary font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="warning">
                                                                    Camara Frontal
                                                                </h3>
                                                                <span id="camaras-previewf">Camara Frontal</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-camera warning font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="success">Sonido estereo</h3>
                                                                <span id="altavoces-preview">Sonido Estereo<span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-volume-2 success font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="danger">Conector AUX</h3>
                                                                <span id="jack3_5-preview">Jack 3.5</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-earphones danger font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="success">Dual SIM</h3>
                                                                <span id="sim-preview">Dual SIM</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-feed success font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="danger">Bluetooth</h3>
                                                                <span id="bt-preview">Bluetooth</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-share danger font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="primary">Velocidad de carga</h3>
                                                                <span id="b_carga-preview">Velocidad de carga</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-speedometer primary font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="warning">Tipo de bateria
                                                                </h3>
                                                                <span id="b_tipo-preview">Tipo de bateria</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-energy warning font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-2 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="primary">
                                                                    NFC
                                                                </h3>
                                                                <span id="nfc-preview">NFC</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-feed primary font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="success">Conexiones WLAN
                                                                </h3>
                                                                <span id="wlan-preview">WLAN</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-plane success font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-left">
                                                                <h3 class="danger">Inflarrojo
                                                                </h3>
                                                                <span id="inflarrojo-preview">Inflarrojo</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i
                                                                    class="icon-earphones danger font-large-2 float-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="align-self-center">
                                                                <i class="icon-speech danger font-large-2 mr-2"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="danger">Radio</h4>
                                                                <span id="radio-preview">Radio</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12 flex">
                                            <div class="card overflow-hidden rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="align-self-center">
                                                                <i class="icon-plane primary font-large-2 mr-2"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="primary">Sensor de Posicionamiento</h4>
                                                                <span
                                                                    id="posicionamiento-preview">Posicionamiento</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="align-self-center">
                                                                <i class="icon-speech warning font-large-2 mr-2"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="warning">USB</h4>
                                                                <span id="radio-preview">USB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class=" card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Redes</h4>
                                                                <span id="red-preview">Redes</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-globe danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Precio</h4>
                                                                <span id="precio-preview">Precio</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-wallet success font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Peso</h4>
                                                                <span id="peso-preview">Peso</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-anchor danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4 class="success">Construccion</h4>
                                                                <span id="construccion-preview">Material de
                                                                    Construccion</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-wrench success font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Certificaciones</h4>
                                                                <span id="certf-preview">Certificaciones</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-check danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Estado</h4>
                                                                <span id="estado-preview">Estado</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-heart success font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>SO</h4>
                                                                <span id="SO-preview">SO</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-home danger font-large-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-12 d-flex">
                                            <div class="card rounded-4 w-100">
                                                <div class="card-content">
                                                    <div class="card-body cleartfix">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-body">
                                                                <h4>Colores</h4>
                                                                <span id="colores-preview">Colores</span>
                                                            </div>
                                                            <div class="align-self-center">
                                                                <i class="icon-magic-wand danger font-large-2"></i>
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
                    </div>
                </div>
            </div>
            <!-- ***** Details End ***** -->
        </div>

        <div class="right-container">
            <h1>Rellena los campos necesarios..!</h1>
            <form action="../php/form.php" method="post">
                <div class="set">

                    <div class="pets-name">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" name="titulo" placeholder="Titulo articulo" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('titulo').addEventListener('input', function() {
                        var tituloPreview = document.getElementById('titulo-preview');
                        tituloPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-name-files">
                        <input type="file" name="archivo[]" id="archivo" class="inputfile inputfile-2"
                            data-multiple-caption="{count} Archivo Subidos" multiple />
                        <label for="archivo"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                                viewBox="0 0 20 17">
                                <path
                                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                            </svg> <span>Subir archivos&hellip;</span></label>
                    </div>
                </div>

                <div class="pets-name-descripcion">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" name="descripcion" placeholder="Descripcion del telefono" type="text" />
                </div>
                <script>
                // Capturar los eventos de cambio en los campos de entrada
                document.getElementById('descripcion').addEventListener('input', function() {
                    var descripcionPreview = document.getElementById('descripcion-preview');
                    descripcionPreview.textContent = this.value;
                });
                </script>

                <div class="set">
                    <div class="pets-breed">
                        <label for="marca">Marca</label>
                        <input id="marca" name="marca" placeholder="Marca dispositivo" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('marca').addEventListener('input', function() {
                        var marcaPreview = document.getElementById('marca-preview');
                        marcaPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="modelo">Modelo</label>
                        <input id="modelo" name="modelo" placeholder="Modelo dispositivo" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('modelo').addEventListener('input', function() {
                        var modeloPreview = document.getElementById('modelo-preview');
                        modeloPreview.textContent = this.value;
                    });
                    </script>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="amazon">Amazon</label>
                        <input id="amazon" name="amazon" placeholder="Link de compra Amazon" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-breed">Año de lanzamiento</label>
                        <input name="l_anunciado" id="lanzamiento" placeholder="Anunciado" type="date" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('lanzamiento').addEventListener('input', function() {
                        var lanzamientoPreview = document.getElementById('lanzamiento-preview');
                        lanzamientoPreview.textContent = this.value;
                    });
                    </script>


                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="p_tipo">Pantalla</label>
                        <input id="p_tipo" name="p_tipo" placeholder="Tipo de pantalla" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('p_tipo').addEventListener('input', function() {
                        var ptipoPreview = document.getElementById('p_tipo-preview');
                        ptipoPreview.textContent = this.value;
                    });
                    </script>
                    <div class="pets-birthday">
                        <label for="p_tamaño">Tamaño</label>
                        <input id="p_tamaño" name="p_tamaño" placeholder="Tamaño de pantalla" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('p_tamaño').addEventListener('input', function() {
                        var ptamaPreview = document.getElementById('p_tama-preview');
                        ptamaPreview.textContent = this.value;
                    });
                    </script>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="p_resolucion">Resolucion</label>
                        <input id="p_resolucion" name="p_resolucion" placeholder="Resolucion de Pantalla" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('p_resolucion').addEventListener('input', function() {
                        var presoPreview = document.getElementById('p_reso-preview');
                        presoPreview.textContent = this.value;
                    });
                    </script>
                    <div class="pets-birthday">
                        <label for="p_proteccion">Proteccion</label>
                        <input id="p_proteccion" name="p_proteccion" placeholder="Proteccion de Pantalla" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('p_proteccion').addEventListener('input', function() {
                        var pprotPreview = document.getElementById('p_prot-preview');
                        pprotPreview.textContent = this.value;
                    });
                    </script>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="memoria">Memoria expandible</label>
                        <div class="radio-container">
                            <input id="memoriat" name="m_expansion" type="radio" value="true" />
                            <label for="memoriat">SI</label>
                            <input id="memoriaf" name="m_expansion" type="radio" value="false" />
                            <label for="memoriaf">No</label>
                        </div>
                        <script>
                        // Capturar los eventos de cambio en los campos de radio
                        var memoriaInputs = document.querySelectorAll('input[name="m_expansion"]');
                        var memoriaPreview = document.getElementById('memoria-expandible-preview');

                        // Iterar sobre los campos de radio y asignar el evento de cambio
                        memoriaInputs.forEach(function(memoria) {
                            memoria.addEventListener('change', function() {
                                memoriaPreview.textContent = this.value;
                            });
                        });
                        </script>
                    </div>


                    <div class="pets-birthday">
                        <label for="m_ram_tipo">Tipo de RAM</label>
                        <input id="m_ram_tipo" name="m_ram_tipo" placeholder="Tipo de RAM" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('m_ram_tipo').addEventListener('input', function() {
                        var ramtPreview = document.getElementById('ramt-preview');
                        ramtPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="gender-female">Almacenamiento</label>
                        <div class="checklist" id="checklistROM">
                            <input value="32" name="m_interna[]" type="checkbox" id="32" />
                            <label for="32">32</label>
                            <input value="64" name="m_interna[]" type="checkbox" id="64" />
                            <label for="64">64</label>
                            <input value="128" name="m_interna[]" type="checkbox" id="128" required />
                            <label for="128">128</label>
                            <input value="256" name="m_interna[]" type="checkbox" id="256" />
                            <label for="256">256</label>
                            <input value="512" name="m_interna[]" type="checkbox" id="512" />
                            <label for="512">512</label>
                            <input value="1TB" name="m_interna[]" type="checkbox" id="1TB" />
                            <label for="1TB">1TB</label>
                        </div>
                        <script>
                        var checkboxInputs1 = document.querySelectorAll('#checklistROM input[type="checkbox"]');
                        var previewSpan1 = document.getElementById('m_interna[]-preview');

                        // Capturar los eventos de cambio en los campos de checkbox
                        // Capturar los eventos de cambio en los campos de checkbox
                        checkboxInputs1.forEach(function(checkbox) {
                            checkbox.addEventListener('change', function() {
                                var selectedItems1 = Array.from(checkboxInputs1)
                                    .filter(function(checkbox) {
                                        return checkbox.checked;
                                    })
                                    .map(function(checkbox) {
                                        return checkbox.value;
                                    });

                                var checklistPreview1 = selectedItems1.join(', ');
                                previewSpan1.textContent = checklistPreview1;
                            });
                        });
                        </script>
                    </div>
                    <div class="pats-gender">
                        <label for="gender-female">RAM</label>
                        <div class="checklist" id="checklistRAM">
                            <input value="2" name="m_ram[]" type="checkbox" id="02" />
                            <label for="02">2
                                GB</label>
                            <input value="3" name="m_ram[]" type="checkbox" id="03" />
                            <label for="03">3GB</label>
                            <input value="4" name="m_ram[]" type="checkbox" id="04" />
                            <label for="04">4GB</label>
                            <input value="6" name="m_ram[]" type="checkbox" id="06" />
                            <label for="06">6GB</label>
                            <input value="8" name="m_ram[]" type="checkbox" id="08" />
                            <label for="08">8GB</label>
                            <input value="16" name="m_ram[]" type="checkbox" id="016" />
                            <label for="016">16GB</label>
                            <input value="32" name="m_ram[]" type="checkbox" id="032" />
                            <label for="032">32GB</label>
                            <input value="64" name="m_ram[]" type="checkbox" id="064" />
                            <label for="064">64GB</label>
                        </div>
                        <script>
                        var checkboxInputs = document.querySelectorAll('#checklistRAM input[type="checkbox"]');
                        var previewSpan = document.getElementById('m_ram[]-preview');

                        // Capturar los eventos de cambio en los campos de checkbox
                        checkboxInputs.forEach(function(checkbox) {
                            checkbox.addEventListener('change', function() {
                                var selectedItems = Array.from(checkboxInputs)
                                    .filter(function(checkbox) {
                                        return checkbox.checked;
                                    })
                                    .map(function(checkbox) {
                                        return checkbox.value;
                                    });

                                var checklistPreview = selectedItems.join(', ');
                                previewSpan.textContent = checklistPreview;
                            });
                        });
                        </script>
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="camaras">Cámara Trasera</label>
                        <div id="camaras-container">
                            <div class="campo-camara">
                                <input name="c_principalD[]" placeholder="Cámara principal trasera" type="text" />
                            </div>
                        </div>
                        <script>
                        var camaraInput = document.querySelector('input[name="c_principalD[]"]');
                        var camaraPreview = document.getElementById('camaras-preview');

                        // Asignar el evento de cambio al campo de entrada
                        camaraInput.addEventListener('input', function() {
                            camaraPreview.textContent = this.value;
                        });
                        </script>
                        <div class="botones">
                            <button id="agregar-camara-btn">+</button>
                            <button id="quitar-camara-btn">-</button>
                        </div>
                    </div>
                    <div class="pets-breed">
                        <label for="camaras">Cámara Frontal</label>
                        <div id="camaras-containerf">
                            <div class="campo-camaraf">
                                <input name="c_principalF[]" placeholder="Cámara principal frontal" type="text" />
                            </div>
                        </div>
                        <div class="botones">
                            <button id="agregar-camara-btnf">+</button>
                            <button id="quitar-camara-btnf">-</button>
                        </div>
                        <script>
                        // Capturar los eventos de cambio en los campos de entrada para la cámara frontal
                        var camaraInputF = document.querySelector('input[name="c_principalF[]"]');
                        var camaraPreviewF = document.getElementById('camaras-previewf');

                        // Asignar el evento de cambio al campo de entrada
                        camaraInputF.addEventListener('input', function() {
                            camaraPreviewF.textContent = this.value;
                        });
                        </script>
                    </div>
                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="altavoces">Altavoces</label>
                        <div class="radio-container">
                            <input id="altavocest" name="s_altavoces" type="radio" value="true" />
                            <label for="altavocest">SI</label>
                            <input id="altavocesf" name="s_altavoces" type="radio" value="false" />
                            <label for="altavocesf">No</label>
                        </div>
                        <script>
                        // Capturar los eventos de cambio en los campos de radio
                        var altavocesInputs = document.querySelectorAll('input[name="s_altavoces"]');
                        var altavocesPreview = document.getElementById('altavoces-preview');

                        // Iterar sobre los campos de radio y asignar el evento de cambio
                        altavocesInputs.forEach(function(altavoces) {
                            altavoces.addEventListener('change', function() {
                                altavocesPreview.textContent = this.value;
                            });
                        });
                        </script>
                    </div>

                    <div class="pets-gender">
                        <label for="jack3_5">Jack 3.5</label>
                        <div class="radio-container">
                            <input id="jack3_5t" name="jack3_5" type="radio" value="true" />
                            <label for="jack3_5t">SI</label>
                            <input id="jack3_5f" name="jack3_5" type="radio" value="false" />
                            <label for="jack3_5f">No</label>
                        </div>
                        <script>
                        // Capturar los eventos de cambio en los campos de radio
                        var jack35Inputs = document.querySelectorAll('input[name="jack3_5"]');
                        var jack35Preview = document.getElementById('jack3_5-preview');

                        // Iterar sobre los campos de radio y asignar el evento de cambio
                        jack35Inputs.forEach(function(jack35) {
                            jack35.addEventListener('change', function() {
                                jack35Preview.textContent = this.value;
                            });
                        });
                        </script>
                    </div>
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="b_tipo">Tipo de Bateria</label>
                        <input id="b_tipo" name="b_tipo" placeholder="Tipo de bateria" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('b_tipo').addEventListener('input', function() {
                        var tipoPreview = document.getElementById('b_tipo-preview');
                        tipoPreview.textContent = this.value;
                    });
                    </script>


                    <div class="pets-birthday">
                        <label for="b_carga">Velocidad de carga</label>
                        <input id="b_carga" name="b_carga" placeholder="Velocidad de carga" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('b_carga').addEventListener('input', function() {
                        var cargaPreview = document.getElementById('b_carga-preview');
                        cargaPreview.textContent = this.value;
                    });
                    </script>


                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="sim">Dual SIM</label>
                        <div class="radio-container">
                            <input id="simt" name="s_1" type="radio" value="true" />
                            <label for="simt">SI</label>
                            <input id="simf" name="s_1" type="radio" value="false" />
                            <label for="simf">No</label>
                        </div>
                        <script>
                        // Capturar los eventos de cambio en los campos de entrada
                        var simInputs = document.querySelectorAll('input[name="s_1"]');
                        var simPreview = document.getElementById('sim-preview');

                        // Iterar sobre los campos de entrada y asignar el evento de cambio
                        simInputs.forEach(function(sim) {
                            sim.addEventListener('change', function() {
                                simPreview.textContent = this.value;
                            });
                        });
                        </script>

                    </div>
                    <div class="pets-birthday">
                        <label for="c_wlan">Conexion Wlan</label>
                        <input id="c_wlan" name="c_wlan " placeholder="Tipo de conexion WLAN" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('c_wlan').addEventListener('input', function() {
                        var wlanPreview = document.getElementById('wlan-preview');
                        wlanPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="bt">Bluetooth</label>
                        <div class="radio-container">
                            <input id="btt" name="c_bt" type="radio" value="true" />
                            <label for="btt">SI</label>
                            <input id="btf" name="c_bt" type="radio" value="false" />
                            <label for="btf">No</label>
                        </div>
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de radio
                    var btInputs = document.querySelectorAll('input[name="c_bt"]');
                    var btPreview = document.getElementById('bt-preview');

                    // Iterar sobre los campos de radio y asignar el evento de cambio
                    btInputs.forEach(function(bt) {
                        bt.addEventListener('change', function() {
                            btPreview.textContent = this.value;
                        });
                    });
                    </script>


                    <div class="pets-birthday">
                        <label for="c_c_posicionamiento">Posicionamiento</label>
                        <input id="c_posicionamiento" name="c_posicionamiento " placeholder="comunicaciones"
                            type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('c_posicionamiento').addEventListener('input', function() {
                        var posicionamientoPreview = document.getElementById('posicionamiento-preview');
                        posicionamientoPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="nfc">NFC</label>
                        <div class="radio-container">
                            <input id="nfct" name="c_nfc" type="radio" value="true" />
                            <label for="nfct">SI</label>
                            <input id="nfcf" name="c_nfc" type="radio" value="false" />
                            <label for="nfcf">No</label>
                        </div>
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de radio
                    var nfcInputs = document.querySelectorAll('input[name="c_nfc"]');
                    var nfcPreview = document.getElementById('nfc-preview');

                    // Iterar sobre los campos de radio y asignar el evento de cambio
                    nfcInputs.forEach(function(nfc) {
                        nfc.addEventListener('change', function() {
                            nfcPreview.textContent = this.value;
                        });
                    });
                    </script>

                    <div class="pets-gender">
                        <label for="inflarojo">Inflarojo</label>
                        <div class="radio-container">
                            <input id="inflarojot" name="c_puertoinf" type="radio" value="true" />
                            <label for="inflarojot">SI</label>
                            <input id="inflarojof" name="c_puertoinf" type="radio" value="false" />
                            <label for="inflarojof">No</label>
                        </div>
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de radio
                    var inflarrojoInputs = document.querySelectorAll('input[name="c_puertoinf"]');
                    var inflarrojoPreview = document.getElementById('inflarrojo-preview');

                    // Iterar sobre los campos de radio y asignar el evento de cambio
                    inflarrojoInputs.forEach(function(inflarrojo) {
                        inflarrojo.addEventListener('change', function() {
                            inflarrojoPreview.textContent = this.value;
                        });
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="radio">Radio</label>
                        <div class="radio-container">
                            <input id="radiot" name="c_radio" type="radio" value="true" />
                            <label for="radiot">SI</label>
                            <input id="radiof" name="c_radio" type="radio" value="false" />
                            <label for="radiof">No</label>
                        </div>
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de radio
                    var radioInputs = document.querySelectorAll('input[name="c_radio"]');
                    var radioPreview = document.getElementById('radio-preview');
                    // Iterar sobre los campos de radio y asignar el evento de cambio
                    radioInputs.forEach(function(radio) {
                        radio.addEventListener('change', function() {
                            radioPreview.textContent = this.value;
                        });
                    });
                    </script>

                    <div class="pets-breed">
                        <label for="usb">USB</label>
                        <input id="usb" name="c_usb" placeholder="Tipo de entrada USB" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('usb').addEventListener('input', function() {
                        var usbPreview = document.getElementById('usb-preview');
                        usbPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Redes</label>
                        <input name="r_tecnologia" id="red" placeholder="Tecnologias" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('red').addEventListener('input', function() {
                        var redPreview = document.getElementById('red-preview');
                        redPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="pets-birthday">Precio</label>
                        <input name="o_precio" id="o_precio" placeholder="Precio estimado" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('o_precio').addEventListener('input', function() {
                        var precioPreview = document.getElementById('precio-preview');
                        precioPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Peso</label>
                        <input name="t_peso" id="peso" placeholder="Peso" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('peso').addEventListener('input', function() {
                        var pesoPreview = document.getElementById('peso-preview');
                        pesoPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="pets-birthday">Contruccion</label>
                        <input name="t_construccion" id="construccion" placeholder="material de contruccion"
                            type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('construccion').addEventListener('input', function() {
                        var construccionPreview = document.getElementById('construccion-preview');
                        construccionPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">

                    <div class="pets-birthday">
                        <label for="pets-birthday">Cerficaciones</label>
                        <input name="t_certificaciones" id="certf" placeholder="Tipo de certificaciones" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('certf').addEventListener('input', function() {
                        var certfPreview = document.getElementById('certf-preview');
                        certfPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="pets-birthday">Estado </label>
                        <input name="l_estado" id="estado" placeholder="Estado" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('estado').addEventListener('input', function() {
                        var estadoPreview = document.getElementById('estado-preview');
                        estadoPreview.textContent = this.value;
                    });
                    </script>
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">SO</label>
                        <input name="pl_so" id="SO" placeholder="Sistema Operativo" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('SO').addEventListener('input', function() {
                        var SOPreview = document.getElementById('SO-preview');
                        SOPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="pets-birthday">Procesador</label>
                        <input name="pl_procesador" id="procesador" placeholder="Tipo de Procesador" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('procesador').addEventListener('input', function() {
                        var procesadorPreview = document.getElementById('procesador-preview');
                        procesadorPreview.textContent = this.value;
                    });
                    </script>

                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">CPU</label>
                        <input name="pl_cpu" id="CPU" placeholder="Tipo de cpu" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('CPU').addEventListener('input', function() {
                        var CPUPreview = document.getElementById('CPU-preview');
                        CPUPreview.textContent = this.value;
                    });
                    </script>

                    <div class="pets-birthday">
                        <label for="pets-birthday">GPU</label>
                        <input name="pl_gpu" id="GPU" placeholder="Tipo de gpu" type="text" />
                    </div>
                    <script>
                    // Capturar los eventos de cambio en los campos de entrada
                    document.getElementById('GPU').addEventListener('input', function() {
                        var GPUPreview = document.getElementById('GPU-preview');
                        GPUPreview.textContent = this.value;
                    });
                    </script>

                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Colores</label>
                        <input name="o_colores" id="colores" placeholder="Colores disponibles" type="text" />
                        <script>
                        // Capturar los eventos de cambio en los campos de entrada
                        document.getElementById('colores').addEventListener('input', function() {
                            var coloresPreview = document.getElementById('colores-preview');
                            coloresPreview.textContent = this.value;
                        });
                        </script>
                    </div>
                    <div class="pats-gender">
                        <label for="gender-female">Categoria</label>
                        <div class="checklist" id="checklistCat">
                            <input value="infravalorado" name="categoria" type="checkbox" id="infravalorado" />
                            <label for="infravalorado">infravalorado</label>
                            <input value="recomendado" name="categoria" type="checkbox" id="recomendado" />
                            <label for="recomendado">Recomendado</label>
                            <input value="calidadprecio" name="categoria" type="checkbox" id="calidadprecio" />
                            <label for="calidadprecio">Calidad Precio</label>
                        </div>
                        <script>
                        var categoriaInputs = document.querySelectorAll('#checklistCat input[type="checkbox"]');
                        var categoriaPreview = document.getElementById('categoria-preview');

                        // Capturar los eventos de cambio en los campos de checkbox
                        categoriaInputs.forEach(function(checkbox) {
                            checkbox.addEventListener('change', function() {
                                var selectedItems = Array.from(categoriaInputs)
                                    .filter(function(checkbox) {
                                        return checkbox.checked;
                                    })
                                    .map(function(checkbox) {
                                        return checkbox.value;
                                    });

                                var checklistPreview = selectedItems.join(', ');
                                categoriaPreview.textContent = checklistPreview;
                            });
                        });
                        </script>
                    </div>
                </div>
                <div class="pets-name-publicar">
                    <button class="publicar">Publicar</button>
                </div>
        </div>

        </form>
    </div>
    </div>

</body>

<script type="module" src="./agregar.js"></script>
<script src="../assets/js/animaciones.js"></script>

</html>