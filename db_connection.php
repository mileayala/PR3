<?php

function openConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "venta_electrodomesticos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        // Si hay un error de conexión, lo mostramos
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    return $conn; // Retornar conexión si es exitosa
}

function closeConnection($conn) {
    $conn->close();
}
?>