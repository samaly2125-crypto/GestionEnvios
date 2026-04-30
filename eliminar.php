<?php
include("conexion.php");

$id = $_GET['id'];

if ($conn->query("DELETE FROM usuarios WHERE id=$id")) {
    echo "Eliminado correctamente<br>";
} else {
    echo "Error: " . $conn->error;
}

echo "<a href='index.php'>Volver</a>";
?>