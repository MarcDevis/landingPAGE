<?php
include 'db.php';
include 'header.php';
$sql = 'SELECT id, nombre, telefono, correo, mensaje FROM contactos';
$result = $conn->query($sql);
?>

<h1>Leer mensajes</h1>

<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campoCabecera">
            ID
        </div>
        <div class="campoCabecera">
            NOMBRE
        </div>
        <div class="campoCabecera">
            TELEFONO
        </div>
        <div class="campoCabecera">
            CORREO
        </div>
        <div class="campoCabecera">
            MENSAJE
        </div>
        <div class="campoCabecera">
            ACCIÓN
        </div>
    </div>

<?php
$num = 0;
while ($row = $result->fetch_assoc()) {
    $num++;
    $paridad = "impar";
    if ($num % 2 == 0) {
        $paridad = "par";
    }
    // Limitar el mensaje a 50 caracteres
    $mensajeCorto = substr($row['mensaje'], 0, 50) . '...';
    ?>
    <div class="fila <?=$paridad?>">
        <div class="campoo"><?php echo $row['id']; ?></div>
        <div class="campoo"><?php echo $row['nombre']; ?></div>
        <div class="campoo"><?php echo $row['telefono']; ?></div>
        <div class="campoo"><?php echo $row['correo']; ?></div>
        <div class="campoo"><?php echo $mensajeCorto; ?></div>
        <div class="btn-accion">
            <a href="borrar.php?id=<?=$row['id']?>" class="icon-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="iconn" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 3l18 18" />
                    <path d="M4 7h3m4 0h9" />
                    <path d="M10 11l0 6" />
                    <path d="M14 14l0 3" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l.077 -.923" />
                    <path d="M18.384 14.373l.616 -7.373" />
                    <path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                </svg>
            </a>
            <a href="ver_mensaje.php?id=<?=$row['id']?>" class="icon-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="iconn" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007bff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                    <path d="M3 6l0 13" />
                    <path d="M12 6l0 13" />
                    <path d="M21 6l0 13" />
                </svg>
            </a>
        </div>
    </div>
<?php
}

if ($num === 0) {
    echo "<div style='text-align:center;'>NO HAY MENSAJES</div>";
}
?>
</div>