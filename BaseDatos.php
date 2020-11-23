<?php
class BaseDatos {
// atributos son variables
public $usuarioBD="root";
public $passwordBD="";


// funcion especial que se llama constructor
public function __construct(){}


// metodos== funciones
public function conectarBD(){
    $infoDB="mysql:host=localhost;dbname=medeweed";
    $conexionBD = new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
    return($conexionBD);
   
}
// agregar datos
public function agregarDatos($consultaSQL)  {

    // 1 conectarme a la base de datos
    $conexionBD=$this->conectarBD();

    // 2 preparar la consulta
    $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

    // 3 ejecute la consulta 
    $resultado=$consultaInsertarDatos->execute();

    // 4 verificar ingreso de datos
    
    if($resultado)  {
        echo("REGISTRO CON EXITO");
    }else   {
        echo("ERROR EN EL REGISTRO");
    }
}

public function consultardatos($consultaSQL){
//1.conectarme a la base de datos
$conexionBD=$this->conectarBD();
// 2 preparar la consulta
$consultaBuscarDatos= $conexionBD->prepare($consultaSQL);
// 3 definir la forma en la que se van a traer los datos ( setFetchMode )
$consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

// 4 ejecutar la consulta
$consultaBuscarDatos->execute();

//5 retornar consulta
return($consultaBuscarDatos->fetchAll());
}

public function eliminarDatos($consultaSQL) {
    //1.conectarme a la base de datos
    $conexionBD=$this->conectarBD();
    
    // 2.preparar la consulta que se va a realizar
    $consultaEliminarDatos = $conexionBD->prepare($consultaSQL);
    
    // 3.ejecutar la consulta
    $resultado=$consultaEliminarDatos->execute();
    
    // 4. verificar el resultado
    if($resultado)  {
        echo("ELIMINADO CON EXITO");
    }else   {
        echo("ERROR AL ELIMINAR EL REGISTRO");
    }
}
public function editarDatos($consultaSQL){  
    //1.conectarme a la base de datos
    $conexionBD=$this->conectarBD();
    
    // 2.preparar la consulta que se va a realizar
    $consultaEditarDatos = $conexionBD->prepare($consultaSQL);
    
    // 3.ejecutar la consulta
    $resultado=$consultaEditarDatos->execute();
    
    // 4. verificar el resultado
    if($resultado)  {
        echo("EDITADO CON EXITO");
    }else   {
        echo("ERROR AL EDITAR EL REGISTRO");
    }
}
    
    


}
?>