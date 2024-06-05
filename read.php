<?php
include 'db.php';
include 'header.php';
$sql = 'SELECT id, nombre, telefono, correo, mensaje FROM contactos';
$result = $conn->query($sql);


?>

<h1>leer mensajes</h1>

<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campoCabecera">
            Id
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensaje
        </div>

</div>
<?php
$num = 0;
while ($row = $result->fetch_assoc()) {
    $num++;
    $paridad ="impar";
    if ($num % 2 == 0) {
        $paridad ="par";
    }
    // PARIDAD ME INDICA SI LA FILA ES PAR O IMPAR
    ?>
    <div class="fila <?=$paridad?>">

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


