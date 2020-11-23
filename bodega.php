<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos Bodega</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <header>
        <nav class="navbar navbar-dark bg-dark">
             <a class="navbar-brand" href="#">
            <img src="https://i.etsystatic.com/8383766/r/il/ee2feb/582954673/il_570xN.582954673_pvhp.jpg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy"> MEDEWEED </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                <a  class="nav-link" href="index.php">Formulario De Registro </a>
                </li>     
                <li class="nav-item active">
                     <a class="nav-link" href="bodega.php">Productos En Bodega</a>
                </li>
            </ul>    
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav> 
        </nav>
    </header>
    <body style="background-color:#A1F786"> 
        <br>
        <br>
        <?php
        include("BaseDatos.php");
        //crear objeto de la clase BaseDatos
        $transaccion=new BaseDatos();
        //crear la consulta sql para buscar los datos
        $consultaSQL="SELECT * FROM productosweed WHERE 1";
        //utilizar el metodo para consultar datos 
        $productos=$transaccion->consultarDatos($consultaSQL);
           
        ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach( $productos as $producto):?>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo($producto["fotopro"])?>" class="card-img-top" alt="imagen">
                            <div class="card-body">
                                    <h3 class="card-title"><?php echo($producto["nombre"])?></h3>
                                    <h5 class="card-text"><?php echo($producto["marcapro"])?></h5>
                                    <h5 class="card-text"><?php echo($producto["tipoefecto"])?></h5>
                                    <h5 class="card-text"><?php echo($producto["preciopro"])?></h5>
                                    <p class="card-text"><?php echo($producto["descripcionpro"])?></p>
                                    <a href="eliminarUsuario.php?id=<?php echo($producto["idUsuario"])?>" class="btn btn-danger">Eliminar</a>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idUsuario"])?>">Editar</button>
                            </div>
                        </div>
                        <div class="modal fade" id="editar<?php echo($producto["idUsuario"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editor De Productos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarProductos.php?id=<?php echo($producto["idUsuario"])?>" method="POST">
                                            <div class="form-group">
                                                <label >Nombre</label>
                                                <input type="text" class="form-control" name="nombreEditar"  value="<?php echo($producto["nombre"])?>" >
                                            </div>
                                            <div class="form-group">
                                                <label >Marca</label>
                                                <input type="text" class="form-control" name="marcaEditar"  value="<?php echo($producto["marcapro"])?>" >
                                            </div>
                                            <div class="form-group">
                                                <label >Tipo efecto</label>
                                                <input type="text" class="form-control" name="efectoEditar"  value="<?php echo($producto["tipoefecto"])?>" >
                                            </div>
                                            <div class="form-group">
                                                <label >Precio</label>
                                                <input type="text" class="form-control" name="precioEditar"  value="<?php echo($producto["preciopro"])?>" >
                                            </div>
                                            <div class="form-group">
                                                <label >Foto</label>
                                                <input type="text" class="form-control" name="fotoEditar" placeholder="URL de la fotografia" value="<?php echo($producto["fotopro"])?>" >
                                            </div>
                                            <div class="form-group">
                                                <label >Descripcion</label>
                                                <textarea class="form-control"  rows="3" name="descripcionEditar"><?php echo($producto["descripcionpro"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info"name="botonEditar">Editar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
        <blockquote class="blockquote text-center">
            <p class="mb-0">“La hierba te hace sentir que en vez de trabajar por el dinero trabajas por ti”.</p>
            <footer class="blockquote-footer">Cantante St. Anns, Jamaica. <cite title="Source Title"> – Bob Marley</cite></footer>
        </blockquote>
                    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>      
    </body>
</html>