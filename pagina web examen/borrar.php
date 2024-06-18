<?php
include 'db.php';
echo "fora if";
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "dins if";

    $id = $_GET['id'];
    $sql = "DELETE FROM contactos WHERE id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    $msg = "Contacto eliminado correctamente";
    header("Location: read.php?status=success&msg=".$msg);

    }
