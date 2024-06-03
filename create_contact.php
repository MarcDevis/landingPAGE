<?php
    include'db.php';


if($_SERVER['REQUEST_METHOD']=="POST"){
echo "CREANDO CONTACTO NUEVO <BR>";
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];


echo "nombre: ".$nombre."<br>";
echo "telefono: ".$telefono."<br>";
echo "correo: ".$correo."<br>";
echo "mensaje: ".$mensaje."<br>";
$sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $telefono, $correo, $mensaje);
$result = $stmt->execute();

if($result){
    $stmt->close();
    $conn->close();
    echo "CONTACTO CREADO";
    header("Location:contacto.php?status=success&msg=Mensaje guardado!");
}else{
    echo "ERROR AL CREAR CONTACTO";
}

}else{
    echo "NO SE HA ENVIADO EL FORMULARIO";
    header("Location:contacto.php?status=error&msg=Error guardando mensaje!");
}
