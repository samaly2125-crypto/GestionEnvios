<?php
$conexion = new mysqli("mysql-marcela.alwaysdata.net", "marcela", "lina123.", "marcela_envios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
