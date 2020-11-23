<?php
include("BaseDatos.php");

$id=$_GET["id"];

if(isset($_POST ["botonEditar"])) {

$nombre=$_POST["nombreEditar"];
$marca=$_POST["marcaEditar"];
$efecto=$_POST["efectoEditar"];
$precio=$_POST["precioEditar"];
$descripcion=$_POST["descripcionEditar"];
$foto=$_POST["fotoEditar"];


$transaccion =new BaseDatos();

$consultaSQL="UPDATE productosweed SET nombre='$nombre',marcapro='$marca',tipoefecto='$efecto',preciopro='$precio',descripcionpro='$descripcion',fotopro='$foto' WHERE idUsuario='$id'";

$transaccion->editarDatos($consultaSQL);

header("location:bodega.php");
 }



?>