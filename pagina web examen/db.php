<?php
//parametros de conexion
$servername="localhost";
$username="mdevisa";
$password="1234";
$dbname="formacion";

//crear conexion
$conn=new mysqli($servername,$username,$password,$dbname);

//comprobar conexion
if($conn->connect_error){
    die("conexion fallida: ".$conn->connect_error);
}

//echo "conexion exitosa";


