<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda WEED</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
            <img src="https://i.etsystatic.com/8383766/r/il/ee2feb/582954673/il_570xN.582954673_pvhp.jpg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy"> MEDEWEED </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <a  class="nav-link" href="index.php">Formulario De Registro </a>
                </li>     
                <li class="nav-item ">
                    <a class="nav-link" href="bodega.php">Productos En Bodega</a>
                </li>
            </ul>    
            </div>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav>   
        </nav>
    </header>
    <body style="background-color:#A1F786"> 
        <main >
            <div class="container">
                <div class="col-m">
                    <h1 class="text-center" style="color:#1C6106">ADMINISTRACION DE PRODUCTOS</h1>
                </div>
                <div class="container">
                <div class="form-group">
                
                    <form action="registrarProductos.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label ><h4 style="color:#1C6106">Nombre Producto</h4></label>
                                <input type="text" class="form-control" name="nombrepro">
                            </div>
                            <div class="form-group col-md-6">
                                <label><h4 style="color:#1C6106">Marca Del Producto</h4></label>
                                <input type="text" class="form-control" name="marcapro">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-6" >
                                <label ><h4 style="color:#1C6106">Tipo De Efecto</h4></label>
                                <input type="text" class="form-control" name="tipopro" >
                            </div>
                            <div class="form-group col-md-6">
                                <label ><h4 style="color:#1C6106">Precio</h4></label>
                                <input type="text" class="form-control" name="preciopro" >
                            </div>
                        </div> 
                        <div class="form-row ">
                            <div class="form-group col-md-12" >
                                <label ><h4 style="color:#1C6106">Foto</h4></label>
                                <input type="text" class="form-control" placeholder="URL foto" name="fotopro">
                            </div>
                        </div>      
                        <div class="form-row ">
                            <div class="form-group col-md-12" >
                                <label ><h4 style="color:#1C6106">Descripcion Del Producto</h4></label>
                            </div>
                            <div class="form-group col-md-8" >
                                <textarea rows="10" cols="90" name="descripcion"></textarea>
                            </div>
                            <div class="form-group col-md-4" >
                                <img src="https://i.etsystatic.com/8383766/r/il/ee2feb/582954673/il_570xN.582954673_pvhp.jpg" width="90%" height="90%" class=" display:inline-block">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6" >
                                <button class="btn btn-outline-success my-2 my-sm-0 center"name="botonRegistro" type="submit"><h4 style="color:#1C6106" >Registrar Producto</h4></button>
                            <div>
                        </div>
                    </form>
                                
                </div>
            </div>
        </main>
        <blockquote class="blockquote text-center">
            <p class="mb-0">“La marihuana es cien veces mejor que el whisky. Es agradable, es una ebriedad que cuesta poco alcanzar, es buena para el asma y relaja los nervios”.</p>
            <footer class="blockquote-footer">Cantante estadounidense de jazz. <cite title="Source Title"> – Louis Armstrong</cite></footer>
        </blockquote>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
