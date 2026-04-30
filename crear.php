<?php
include("conexion.php");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono)
            VALUES ('$nombre', '$email', '$telefono')";

    if ($conn->query($sql)) {
        echo "Usuario creado correctamente<br>";
        echo "<a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <button type="submit">Guardar</button>
</form>