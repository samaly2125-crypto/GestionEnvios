<?php
include("conexion.php");

$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM envios WHERE id=$id");

$fila = $resultado->fetch_assoc();

if($_POST){

    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $sql = "UPDATE envios 
            SET codigo='$codigo',
                descripcion='$descripcion',
                destino='$destino'
            WHERE id=$id";

    $conexion->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Envío</title>
</head>
<body>

<h2>Editar Envío</h2>

<form method="POST">

    Código:
    <input type="text" name="codigo"
    value="<?php echo $fila['codigo']; ?>">
    <br><br>

    Descripción:
    <input type="text" name="descripcion"
    value="<?php echo $fila['descripcion']; ?>">
    <br><br>

    Destino:
    <input type="text" name="destino"
    value="<?php echo $fila['destino']; ?>">
    <br><br>

    <button type="submit">Actualizar</button>

</form>

</body>
</html>
