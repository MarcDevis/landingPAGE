<?php


IF($_SERVER['REQUEST_METHOD']=="POST"){
echo "CREANDO CONTACTO NUEVO <BR>";
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];


echo "nombre: ".$nombre."<br>";
echo "telefono: ".$telefono."<br>";
echo "correo: ".$correo."<br>";
echo "mensaje: ".$mensaje."<br>";

}else{
    echo "NO SE HA ENVIADO EL FORMULARIO";
}