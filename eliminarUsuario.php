<?php
include("BaseDatos.php");
//recibir desde la url el ID de el registro que se va a eliminas
 $id=$_GET["id"];
 
  //crear un objeto de la clase BaseDatos()
 $transaccion=new BaseDatos();

 // crear consulta eliminar los datos
 $consultaSQL="DELETE FROM productosweed WHERE idUsuario='$id'";

 // utilizar el metodo eliminarDatos
 $transaccion->eliminarDatos($consultaSQL);

 header("location:bodega.php");

?>
 
 