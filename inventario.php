<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/styles.css">
    <link  rel="icon"   href="Images/favicon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    <title>Tecno Store</title>
</head>
<body>
    <header>Tecno Store</header>
    <nav >
        <ul>
        <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Catálogo</a> </li>
            <li><a href="#">Contáctanos</a></li>
            <li><a href="#">Sesión</a></li>
            <li><a href="inventario.php">Inventario</a></li>
            <li><a href="form_inventario.php">Agregar Productos</a></li>
        </ul>
    </nav>
    
    <section>
        <div class="Inventario">
            <p>Productos en Bodega</p>
        </div>
        <?php 
            include("Php/BaseDatos.php");

            $consultaSQL="SELECT * FROM productos WHERE 1";
            $transaccion=new Basedatos();
            $productos=$transaccion->buscarDatos($consultaSQL);
        ?>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php foreach($productos as $producto):?>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo($producto["imagen"])?>" class="card-img-top" alt="imagen">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                                <p class="card-text">Marca: <?php echo($producto["marca"])?></p>
                                <p class="card-text">Precio: <?php echo($producto["precio"])?></p>
                                <p class="card-text">Descripcion: <?php echo($producto["descripcion"])?></p>
                                
                                <a href="Php/eliminarProducto.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"]) ?>">
                                    Editar
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="Php/editarProducto.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                            <div class="form-group">
                                                <p>Nombre:</p>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                            </div>
                                            <div class="form-group">
                                                <p>Marca:</p>
                                                <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                                            </div>
                                            <div class="form-group">
                                                <p>Precio:</p>
                                                <input type="number" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                            </div>
                                            <div class="form-group">
                                                <p>Descripción:</p>
                                                <textarea class="form-control" name="descripcionEditar"> <?php echo($producto["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="boton-Editar">Editar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php endforeach?>
                </div>
</div>
        
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>