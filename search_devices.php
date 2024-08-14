<?php
include './php/conexion.php';

if (isset($_GET['searchKeyword'])) {
    $searchKeyword = $_GET['searchKeyword'];

    // Consulta SQL para buscar los dispositivos que coincidan con el término de búsqueda
    $sql = "SELECT id_dispositivo, modelo, marca, imgP FROM especphones WHERE modelo LIKE '%" . mysqli_real_escape_string($conn, $searchKeyword) . "%' OR marca LIKE '%" . mysqli_real_escape_string($conn, $searchKeyword) . "%' OR titulo LIKE '%" . mysqli_real_escape_string($conn, $searchKeyword) . "%' OR descripcion LIKE '%" . mysqli_real_escape_string($conn, $searchKeyword) . "%' LIMIT 10";
    $result = $conn->query($sql);

    $devices = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $devices[] = $row;
        }
    }

    // Devolver los resultados en formato JSON
    header('Content-Type: application/json');
    echo json_encode($devices);
}
?>