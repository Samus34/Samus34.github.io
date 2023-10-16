<?php
$servername = "Samus34.github.io";
$username = "Samus34";
$password = "";
$dbname = "Samus34.github.io";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>