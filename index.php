<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión Envíos</title>
</head>
<body>

<h2>Lista de Envíos</h2>

<a href="crear.php">Crear Envío</a>

<br><br>

<table border="1">
<tr>
    <th>Código</th>
    <th>Descripción</th>
    <th>Destino</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM envios");

while($fila = $resultado->fetch_assoc()){
?>

<tr>
    <td><?php echo $fila['codigo']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>
    <td><?php echo $fila['destino']; ?></td>

    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>

        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">
            Eliminar
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>