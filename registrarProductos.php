<?php

include("BaseDatos.php");

if(isset($_POST ["botonRegistro"])) {

//recibir datos usuario    
$nombre= $_POST["nombrepro"];
$marcapro= $_POST["marcapro"];
$tipoefecto=$_POST["tipopro"];
$preciopro=$_POST["preciopro"];
$descripcionpro=$_POST["descripcion"];
$fotopro =$_POST["fotopro"];

// crear una copia de la clase BaseDatos
// crear un objeto de la clase Basedatos
$transaccion =new BaseDatos();

// crear consulta sql

$consultaSQL="INSERT INTO productosweed(nombre,marcapro,tipoefecto,preciopro,descripcionpro,fotopro) VALUES ('$nombre','$marcapro','$tipoefecto','$preciopro','$descripcionpro','$fotopro')";

// usar la funcion para insertar los datos

$transaccion->agregarDatos($consultaSQL);

header("location:index.php");

}



?>