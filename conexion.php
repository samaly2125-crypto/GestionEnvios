<?php
$conexion = new mysqli("mysql-marcela.alwaysdata.net", "marcela", "clase1234", "marcela_envios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
