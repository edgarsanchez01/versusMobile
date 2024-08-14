<?php
include '../php/conexion.php';
// Obtener el ID del dispositivo desde la URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_dispositivo = $_GET['id'];

    // Actualizar el contador de visitas del dispositivo
    $sql_update = "UPDATE dispositivos SET visitas = visitas + 1 WHERE id_dispositivo = $id_dispositivo";
    $conn->query($sql_update);

    // Consultar los detalles del dispositivo con el ID proporcionado
    $sql = "SELECT titulo, descripcion, marca, modelo, p_tipo, p_tamaño, p_resolucion, p_proteccion, m_expansion, m_interna, m_ram, m_ram_tipo, c_principalD, c_principalF, s_altavoces, jack3_5, b_tipo, b_carga, s_1, c_wlan, c_bt, c_posicionamiento, c_nfc, c_puertoinf, c_radio, c_usb, r_tecnologia, t_dimensiones, t_peso, t_construccion, t_sim, t_certificaciones, l_anunciado, l_estado, pl_so, pl_procesador, pl_cpu, pl_gpu, o_colores, o_precio, aututu, amazon, imgP
            FROM dispositivos
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
            $p_tipo = $row['p_tipo'];
            $p_tamaño = $row['p_tamaño'];
            $p_resolucion = $row['p_resolucion'];
            $p_proteccion = $row['p_proteccion'];
            $m_expansion = $row['m_expansion'];
            $m_interna = $row['m_interna'];
            $m_ram = $row['m_ram'];
            $m_ram_tipo = $row['m_ram_tipo'];
            $c_principalD = $row['c_principalD'];
            $c_principalF = $row['c_principalF'];
            $s_altavoces = $row['s_altavoces'];
            $jack3_5 = $row['jack3_5'];
            $b_tipo = $row['b_tipo'];
            $b_carga = $row['b_carga'];
            $s_1 = $row['s_1'];
            $c_wlan = $row['c_wlan'];
            $c_bt = $row['c_bt'];
            $c_posicionamiento = $row['c_posicionamiento'];
            $c_nfc = $row['c_nfc'];
            $c_puertoinf = $row['c_puertoinf'];
            $c_radio = $row['c_radio'];
            $c_usb = $row['c_usb'];
            $r_tecnologia = $row['r_tecnologia'];
            $t_dimensiones = $row['t_dimensiones'];
            $t_peso = $row['t_peso'];
            $t_construccion = $row['t_construccion'];
            $t_sim = $row['t_sim'];
            $t_certificaciones = $row['t_certificaciones'];
            $l_anunciado = $row['l_anunciado'];
            $l_estado = $row['l_estado'];
            $pl_so = $row['pl_so'];
            $pl_procesador = $row['pl_procesador'];
            $pl_cpu = $row['pl_cpu'];
            $pl_gpu = $row['pl_gpu'];
            $o_colores = $row['o_colores'];
            $o_precio = $row['o_precio'];
            $aututu = $row['aututu'];
            $amazon = $row['amazon'];
            $imgP = $row['imgP'];
        }
?>

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
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css" />


</head>

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
                                <div class="col-lg-4 align-self-center">
                                    <div class="main-info header-text">
                                        <span><?php echo $marca; ?></span>
                                        <h4><?php echo $modelo; ?></h4>
                                        <p><?php echo $descripcion; ?>.</p>
                                        <div class="main-border-button">
                                            <a href="?php echo $amazon; ?>">Comprar en Amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <ul>
                                        <li>Procesador <span><?php echo $pl_procesador; ?></span></li>
                                        <li>Almacenamiento <span><?php echo $m_interna; ?></span></li>
                                        <li>RAM <span><?php echo $m_ram; ?></span></li>
                                        <li>Precio <span><?php echo $o_precio; ?></span></li>
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
                                <div class="col-lg-6">
                                    <div class="left-info">
                                        <div class="left">
                                            <h4><?php echo $titulo; ?></h4>
                                            <span><?php echo $descripcion; ?></span>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-star"></i> 4.8</li>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-info">
                                        <ul>
                                            <li><i class="fa fa-star"></i> 4.8</li>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                            <li><i class="fa fa-server"></i> 36GB</li>
                                            <li><i class="fa fa-gamepad"></i> Action</li>
                                        </ul>
                                    </div>
                                </div>
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
                                <div class="col-lg-12">
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Maiores perspiciatis eveniet fugit magnam nobis quam ipsum
                                        reiciendis, iusto iste! Maiores id ratione rem facere
                                        natus atque veniam aperiam quidem ullam? Lorem ipsum
                                        dolor, sit amet consectetur adipisicing elit. Velit
                                        reiciendis modi, nihil inventore minus ut qui, laudantium
                                        iure sapiente porro placeat nostrum sed expedita, unde
                                        iusto aut quidem eos ullam.
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="main-border-button">
                                        <a href="{Llamar link amazon}">Comprar en Amazon!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Details End ***** -->

            <!-- ***** Other Start ***** -->
            <div class="other-games">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Otros</em> Dispositivos</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-01.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-02.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-03.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-02.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-03.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item">
                            <img src="../assets/images/game-01.jpg" alt="" class="templatemo-item" />
                            <h4>{Llamar Disp}</h4>
                            <span>{Llamar Descripcion}</span>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Other End ***** -->
        </div>

        <div class="right-container">
            <h1>Rellena los campos necesarios..!</h1>
            <form action="../php/form.php" method="post">
                <div class="set">
                    <div class="pets-name">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" name="titulo" placeholder="Titulo articulo" type="text" />
                    </div>
                    <!-- <div class="container-img">
            <label for="archivo">Img Principal</label>
            <input accept=".jpg, .jpeg, .png, .gif, .pdf" class="inpdddut" name="archivo" id="archivo" type="file" />
          </div> -->
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
                <div class="set">
                    <div class="pets-breed">
                        <label for="marca">Marca</label>
                        <input id="marca" name="marca" placeholder="Marca dispositivo" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="modelo">Modelo</label>
                        <input id="modelo" name="modelo" placeholder="Modelo dispositivo" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="amazon">Amazon</label>
                        <input id="amazon" name="amazon" placeholder="Link de compra Amazon" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="fecha">Año</label>
                        <input id="fecha" name="fecha" placeholder="Año lanzamiento" type="date" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="p_tipo">Pantalla</label>
                        <input id="p_tipo" name="p_tipo" placeholder="Tipo de pantalla" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="p_tamaño">Tamaño</label>
                        <input id="p_tamaño" name="p_tamaño" placeholder="Tamaño de pantalla" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="p_resolucion">Resolucion</label>
                        <input id="p_resolucion" name="p_resolucion" placeholder="Resolucion de Pantalla" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="p_proteccion">Proteccion</label>
                        <input id="p_proteccion" name="p_proteccion" placeholder="Proteccion de Pantalla" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="m_interna">Almacenamiento</label>
                        <input id="m_interna" name="m_interna" placeholder="Memoria interna" type="text" />
                    </div>
                    <div class="pets-gender">
                        <label for="memoria">Memoria expandible</label>
                        <div class="radio-container">
                            <input id="memoriat" name="m_expansion" type="radio" value="true" />
                            <label for="memoriat">SI</label>
                            <input id="memoriaf" name="m_expansion" type="radio" value="false" />
                            <label for="memoriaf">No</label>
                        </div>
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="gender-female">Almacenamiento</label>
                        <div id="checklist">
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
                    </div>
                    <div class="pats-gender">
                        <label for="gender-female">RAM</label>
                        <div id="checklist">
                            <input value="2" name="m_ram[]" type="checkbox" id="02" />
                            <label for="02">2GB</label>
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
                    </div>
                </div>

                <div class="pets-name-memoria">
                    <label for="descripcion">Tipo de memoria ram</label>
                    <input id="descripcion" name="m_ram_tipo" placeholder="Tipo de ram" type="text" />
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="camaras">Cámara trasera</label>
                        <div id="camaras-container">
                            <div class="campo-camara">
                                <input name="c_principalD[]" placeholder="Cámara principal trasera" type="text" />
                            </div>
                        </div>
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
                    </div>
                    <div class="pets-gender">
                        <label for="jack3_5">Jack 3.5</label>
                        <div class="radio-container">
                            <input id="jack3_5t" name="jack3_5" type="radio" value="true" />
                            <label for="jack3_5t">SI</label>
                            <input id="jack3_5f" name="jack3_5" type="radio" value="false" />
                            <label for="jack3_5f">No</label>
                        </div>
                    </div>
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Tipo de Carga</label>
                        <input id="pets-breed" name="b_tipo" placeholder="Coloca el tipo de Carga" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Velocidad de carga</label>
                        <input id="pets-birthday" name="b_carga" placeholder="velocidad de carga" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="sim">Dual sim</label>
                        <div class="radio-container">
                            <input id="simt" name="s_1" type="radio" value="true" />
                            <label for="simt">SI</label>
                            <input id="simf" name="s_1" type="radio" value="false" />
                            <label for="simf">No</label>
                        </div>
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Conexion Wlan</label>
                        <input id="pets-birthday" name="c_wlan " placeholder="Tipo de conexion Wlan" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-gender">
                        <label for="gender-bt">Bluetooth</label>
                        <div class="radio-container">
                            <input id="gender-btt" name="c_bt" type="radio" value="true" />
                            <label for="gender-btt">SI</label>
                            <input id="gender-btf" name="c_bt" type="radio" value="false" />
                            <label for="gender-btf">No</label>
                        </div>
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">coms posicionamiento</label>
                        <input id="pets-birthday" name="c_posicionamiento " placeholder="comunicaciones" type="text" />
                    </div>
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
                    <div class="pets-gender">
                        <label for="inflarojo">Inflarojo</label>
                        <div class="radio-container">
                            <input id="inflarojot" name="c_puertoinf" type="radio" value="true" />
                            <label for="inflarojot">SI</label>
                            <input id="inflarojof" name="c_puertoinf" type="radio" value="false" />
                            <label for="inflarojof">No</label>
                        </div>
                    </div>
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
                    <div class="pets-breed">
                        <label for="usb">Usb</label>
                        <input id="petsusb" name="c_usb" placeholder="Tipo de usb" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Redes</label>
                        <input name="r_tecnologia" id="pets-breed" placeholder="Tecnologias" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Tamaño</label>
                        <input name="t_dimensiones" id="pets-birthday" placeholder="Dimensiones" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Peso</label>
                        <input name="t_peso" id="pets-breed" placeholder="Peso" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Contruccion</label>
                        <input name="t_construccion" id="pets-birthday" placeholder="material de contruccion"
                            type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">SIM</label>
                        <input name="t_sim" id="pets-breed" placeholder="Tipo de sim" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Cerficaciones</label>
                        <input name="t_certificaciones" id="pets-birthday" placeholder="Tipo de certificaciones"
                            type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Lanzamiento Anunciado</label>
                        <input name="l_anunciado" id="pets-breed" placeholder="Anunciado" type="date" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Lanzamiento </label>
                        <input name="l_estado" id="pets-birthday" placeholder="Estado" type="text" />
                    </div>
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">SO</label>
                        <input name="pl_so" id="pets-breed" placeholder="Sistema Operativo" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Procesador</label>
                        <input name="pl_procesador" id="pets-birthday" placeholder="Tipo de Procesador" type="text" />
                    </div>
                </div>
                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">CPU</label>
                        <input name="pl_cpu" id="pets-breed" placeholder="Tipo de cpu" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">GPU</label>
                        <input name="pl_gpu" id="pets-birthday" placeholder="Tipo de gpu" type="text" />
                    </div>
                </div>

                <div class="set">
                    <div class="pets-breed">
                        <label for="pets-breed">Colores</label>
                        <input name="o_colores" id="pets-breed" placeholder="Colores disponibles" type="text" />
                    </div>
                    <div class="pets-birthday">
                        <label for="pets-birthday">Precio</label>
                        <input name="o_precio" id="pets-birthday" placeholder="Precio estimado" type="text" />
                    </div>
                </div>
                <div class="pets-name-publicar">
                    <button class="publicar">Publicar</button>
                </div>

            </form>
        </div>
    </div>

    <?php
    } else {
        echo "No se encontró el dispositivo con el ID proporcionado.";
    }
    } else {
        echo "No se proporcionó un ID de dispositivo válido.";
    }
    $conn->close();
    ?>
</body>

<script type="module" src="./agregar.js"></script>

</html>