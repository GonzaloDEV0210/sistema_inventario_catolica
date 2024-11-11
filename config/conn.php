<?php
$host = "localhost";
$usuario = "root";
$contrasena = "root";
$baseDeDatos = "catolica";

$conn = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexión fallifa: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>