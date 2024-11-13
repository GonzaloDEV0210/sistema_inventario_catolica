<?php
session_start();
include('conn.php');

$usuario_ingresado = $_POST['usuario'];
$usuario_contrasenia = $_POST['contrasenia'];

$sql = "SELECT contraseña FROM usuarios WHERE nombre_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario_ingresado);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hash_almacenado);
$stmt->fetch();

if ($stmt->num_rows > 0) {
    if ($usuario_contrasenia === $hash_almacenado) {
        echo "ingresamos";
        $_SESSION['usuario'] = $usuario_ingresado;
        echo "Login exitoso";
        header("Location: http://localhost/sistema_inventario_catolica/views/inicio.php");
    } else {
        echo "Contraseña Incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$stmt->close();
$conn->close();
?>