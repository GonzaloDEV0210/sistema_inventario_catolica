<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: http://localhost/sistema_inventario_catolica/config/login.php");
    exit();
}

echo "Bienvenido, " . $_SESSION['usuario'];
?>