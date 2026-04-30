<?php
include("conexion.php");

$id = $_GET['id'];

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET 
            nombre='$nombre',
            email='$email',
            telefono='$telefono'
            WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Actualizado correctamente<br>";
        echo "<a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>