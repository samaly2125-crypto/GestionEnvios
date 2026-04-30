<?php
include("conexion.php");

$result = $conn->query("SELECT * FROM usuarios");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Nombre: " . $row['nombre'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Teléfono: " . $row['telefono'] . "<br>";

    echo "<a href='editar.php?id=".$row['id']."'>Editar</a> | ";
    echo "<a href='eliminar.php?id=".$row['id']."'>Eliminar</a>";

    echo "<hr>";
}

echo "<a href='crear.php'>Crear nuevo usuario</a>";
?>