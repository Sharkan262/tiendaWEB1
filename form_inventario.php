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
        <nav>
            <Style></Style>
            <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Catálogo</a> </li>
            <li><a href="#">Contáctanos</a></li>
            <li><a href="#">Sesión</a></li>
            <li><a href="inventario.php">Inventario</a></li>
            <li><a href="form_inventario.php">Agregar Productos</a></li>
            </ul>
        </nav>

    <div class="contenedor_formulario">
        <form action="Php/registrarProductos.php" method="POST">
            <div class="form-group">
                <label >Nombre Del Producto:</label>
                <input type="text" class="form-control" name="nombreProducto" id="nombreProducto">
            </div>
            <div class="form-group">
                <label >Marca Del Producto:</label>
                <input type="text" class="form-control"  name="marcaProducto" id="marcaProducto">
            </div>
            <div class="form-group">
                <label >Precio Del Producto:</label>
                <input type="number" class="form-control"  name="precioProducto" id="precioProducto">
            </div>
            <div class="form-group">
                <label >URL Imagen Del Producto:</label>
                <input type="text" class="form-control" name="imagenProducto" id="imagenProducto" >
            </div>
            <div class="form-group">
                <label>Descripcion del Producto:</label>
                <textarea class="form-control" name="descripcionProducto"  placeholder="Descripcion del producto" rows="3"></textarea>
            </div>
            <input type="submit" value="Registrar" class="boton" name="botonEnvio">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>