<?php
include 'db.php';
include 'header.php';
$sql = 'SELECT id, nombre, telefono, correo, mensaje FROM contactos';
$result = $conn->query($sql);


?>

<h1>leer mensajes</h1>

<div class="contenedor listado">
    <?php
    while($row = $result->fetch_assoc()){
    ?>
    <div class="fila">
        <div class="campo"><?php echo $row['id']; ?></div>
        <div class="campo"><?php echo $row['nombre']; ?></div>
        <div class="campo"><?php echo $row['telefono']; ?></div>
        <div class="campo"><?php echo $row['correo']; ?></div>
        <div class="campo"><?php echo $row['mensaje']; ?></div>
    </div>

        <?php
        }
    ?>
</div>


