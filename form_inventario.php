<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styles.css">
    <link  rel="icon"   href="Images/favicon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    <title>Tecno Store</title>
</head>
<body>
    <header>Tecno Store</header>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Catálogo</a> </li>
                <li><a href="">Contáctanos</a></li>
                <li><a href="">Sesión</a></li>
            </ul>
        </nav>

    <div class="contenedor_formulario">
        <form action="registrarProductos.php" method="POST">
            <div class="contenedor2">
                <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Nombre del Producto">
                <input type="text" name="marcaProducto" id="marcaProducto" placeholder="Marca del Producto">
            </div>
            <input type="number" name="precioProducto" id="precioProducto" placeholder="Precio del Producto">
            <textarea name="descripcionProducto"  placeholder="Descripcion del producto"></textarea>
            <input type="text" name="imagenProducto" id="imagenProducto" class="imagenProducto" placeholder="Ingrese el vinculo de la imagen">
            <input type="submit" value="Registrar" class="boton" name="botonEnvio">
        </form>
    </div>
</body>
</html>