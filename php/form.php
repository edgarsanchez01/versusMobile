<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "espectelefonos";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Obtener los valores del formulario y asegurar la protección contra inyección de SQL
$titulo = isset($_POST['titulo']) ? $conn->real_escape_string($_POST['titulo']) : '';
$descripcion = isset($_POST['descripcion']) ? $conn->real_escape_string($_POST['descripcion']) : '';
$marca = isset($_POST['marca']) ? $conn->real_escape_string($_POST['marca']) : '';
$modelo = isset($_POST['modelo']) ? $conn->real_escape_string($_POST['modelo']) : '';
$fecha = isset($_POST['año']) ? $conn->real_escape_string($_POST['año']) : '';
$p_tipo = isset($_POST['p_tipo']) ? $conn->real_escape_string($_POST['p_tipo']) : '';
$p_tamaño = isset($_POST['p_tamaño']) ? $conn->real_escape_string($_POST['p_tamaño']) : '';
$p_resolucion = isset($_POST['p_resolucion']) ? $conn->real_escape_string($_POST['p_resolucion']) : '';
$p_proteccion = isset($_POST['p_proteccion']) ? $conn->real_escape_string($_POST['p_proteccion']) : '';
    $m_expansion = isset($_POST['m_expansion']) ? $conn->real_escape_string($_POST['m_expansion']) : '';
$m_interna = isset($_POST['m_interna']) ? $_POST['m_interna'] : '';
$m_interna = '';
if (isset($_POST['m_interna'])) {
    $m_interna = implode('| ', $_POST['m_interna']);
    // ...
}
$m_ram  = '';
if (isset($_POST['m_ram'])) {
    $m_ram = implode('| ', $_POST['m_ram']);
    // ...
}

$m_ram_tipo = isset($_POST['m_ram_tipo']) ? $conn->real_escape_string($_POST['m_ram_tipo']) : '';

$c_principalD = '';
if (isset($_POST['c_principalD'])) {
    $c_principalD = implode('| ', $_POST['c_principalD']);
    // 
}
$c_principalF='';
$c_principalF = isset($_POST['c_principalF']) ? $_POST['c_principalF'] : '';
if (isset($_POST['c_principalF'])) {
    $c_principalF = implode('| ', $_POST['c_principalF']);
    // ...
}
$s_altavoces = isset($_POST['s_altavoces']) ? $conn->real_escape_string($_POST['s_altavoces']) : '';
$jack3_5 = isset($_POST['jack3_5']) ? $conn->real_escape_string($_POST['jack3_5']) : '';
$b_tipo = isset($_POST['b_tipo']) ? $conn->real_escape_string($_POST['b_tipo']) : '';
$b_carga = isset($_POST['b_carga']) ? $conn->real_escape_string($_POST['b_carga']) : '';
$s_1 = isset($_POST['s_1']) ? $conn->real_escape_string($_POST['s_1']) : '';
$c_wlan = '';
if (isset($_POST['c_wlan'])) {
    $c_wlan = implode(',', $_POST['c_wlan']);
    // ...
}
    $c_bt = isset($_POST['c_bt']) ? $conn->real_escape_string($_POST['c_bt']) : '';
$c_posicionamiento = isset($_POST['c_posicionamiento']) ? $conn->real_escape_string($_POST['c_posicionamiento']) : '';
$c_nfc = isset($_POST['c_nfc']) ? $conn->real_escape_string($_POST['c_nfc']) : '';
$c_puertoinf = isset($_POST['c_puertoinf']) ? $conn->real_escape_string($_POST['c_puertoinf']) : '';
$c_radio = isset($_POST['c_radio']) ? $conn->real_escape_string($_POST['c_radio']) : '';
$c_usb = isset($_POST['c_usb']) ? $conn->real_escape_string($_POST['c_usb']) : '';
$r_tecnologia = isset($_POST['r_tecnologia']) ? $conn->real_escape_string($_POST['r_tecnologia']) : '';
$t_dimensiones = isset($_POST['t_dimensiones']) ? $conn->real_escape_string($_POST['t_dimensiones']) : '';
$t_peso = isset($_POST['t_peso']) ? $conn->real_escape_string($_POST['t_peso']) : '';
$t_construccion = isset($_POST['t_construccion']) ? $conn->real_escape_string($_POST['t_construccion']) : '';
$t_sim = isset($_POST['t_sim']) ? $conn->real_escape_string($_POST['t_sim']) : '';
$t_certificaciones = isset($_POST['t_certificaciones']) ? $conn->real_escape_string($_POST['t_certificaciones']) : '';
$l_anunciado = isset($_POST['l_anunciado']) ? $conn->real_escape_string($_POST['l_anunciado']) : '';
$l_estado = isset($_POST['l_estado']) ? $conn->real_escape_string($_POST['l_estado']) : '';
$pl_so = isset($_POST['pl_so']) ? $conn->real_escape_string($_POST['pl_so']) : '';
$pl_procesador = isset($_POST['pl_procesador']) ? $conn->real_escape_string($_POST['pl_procesador']) : '';
$pl_cpu = isset($_POST['pl_cpu']) ? $conn->real_escape_string($_POST['pl_cpu']) : '';
$pl_gpu = isset($_POST['pl_gpu']) ? $conn->real_escape_string($_POST['pl_gpu']) : '';
$o_colores = isset($_POST['o_colores']) ? $conn->real_escape_string($_POST['o_colores']) : '';
$o_precio = isset($_POST['o_precio']) ? $conn->real_escape_string($_POST['o_precio']) : '';
$aututu = isset($_POST['aututu']) ? $conn->real_escape_string($_POST['aututu']) : '';
$amazon = isset($_POST['amazon']) ? $conn->real_escape_string($_POST['amazon']) : '';
$imgP = isset($_POST['imgP']) ? $conn->real_escape_string($_POST['imgP']) : '';
$imgC = isset($_POST['imgC']) ? $conn->real_escape_string($_POST['imgC']) : '';

$sql = "INSERT INTO dispositivos (titulo, descripcion, marca, modelo, fecha, p_tipo, p_tamaño, p_resolucion, p_proteccion, m_expansion, m_interna, m_ram, m_ram_tipo, c_principalD, c_principalF, s_altavoces, jack3_5, b_tipo, b_carga, s_1, c_wlan, c_bt, c_posicionamiento, c_nfc, c_puertoinf, c_radio, c_usb, r_tecnologia, t_dimensiones, t_peso, t_construccion, t_sim, t_certificaciones, l_anunciado, l_estado, pl_so, pl_procesador, pl_cpu, pl_gpu, o_colores, o_precio, aututu, amazon, imgP, imgC) 
        VALUES ('$titulo', '$descripcion', '$marca', '$modelo', '$fecha', '$p_tipo', '$p_tamaño', '$p_resolucion', '$p_proteccion', '$m_expansion', '$m_interna', '$m_ram', '$m_ram_tipo', '$c_principalD', '$c_principalF', '$s_altavoces', '$jack3_5', '$b_tipo', '$b_carga', '$s_1', '$c_wlan', '$c_bt', '$c_posicionamiento', '$c_nfc', '$c_puertoinf', '$c_radio', '$c_usb', '$r_tecnologia', '$t_dimensiones', '$t_peso', '$t_construccion', '$t_sim', '$t_certificaciones', '$l_anunciado', '$l_estado', '$pl_so', '$pl_procesador', '$pl_cpu', '$pl_gpu', '$o_colores', '$o_precio', '$aututu', '$amazon', '$imgP', '$imgC')";
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conn->error;
}

$conn->close();
?>