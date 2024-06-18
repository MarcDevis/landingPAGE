<?php
include 'db.php';
include 'header.php';

// Obtener el ID del mensaje desde la URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Preparar y ejecutar la consulta para obtener el mensaje
    $stmt = $conn->prepare('SELECT id, nombre, telefono, correo, mensaje FROM contactos WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Obtener los datos del mensaje
        $row = $result->fetch_assoc();
        ?>

        <h1 style="text-align:center; margin-top: 20px;">Ver Mensaje</h1>
        
        <div class="contenedor mensaje-completo">
            <div class="campoDetalle">
                <strong>Id:</strong> <span><?php echo $row['id']; ?></span>
            </div>
            <div class="campoDetalle">
                <strong>Nombre:</strong> <span><?php echo $row['nombre']; ?></span>
            </div>
            <div class="campoDetalle">
                <strong>Teléfono:</strong> <span><?php echo $row['telefono']; ?></span>
            </div>
            <div class="campoDetalle">
                <strong>Correo:</strong> <span><?php echo $row['correo']; ?></span>
            </div>
            <div class="campoDetalle">
                <strong>Mensaje:</strong> <span><?php echo nl2br(htmlspecialchars($row['mensaje'])); ?></span>
            </div>
            <div class="btn-regresar">
                <a href="read.php" >Regresar</a>
            </div>
        </div>

        <?php
    } else {
        echo "<h1 style='text-align:center;'>Mensaje no encontrado</h1>";
        echo "<div class='btn-regresar'><a href='index.php'>Regresar</a></div>";
    }

    $stmt->close();
} else {
    echo "<h1 style='text-align:center;'>Identificador de mensaje no válido</h1>";
    echo "<div class='btn-regresar'><a href='index.php'>Regresar</a></div>";
}

$conn->close();
?>