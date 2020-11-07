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
    
    <section>
        <div class="Inventario">
            <p>Productos en Bodega</p>
        </div>

        <?php 
            include("BaseDatos.php");
            $consultaSQL="SELECT * FROM productos WHERE 1";
            $transaccion=new Basedatos();
            $productos=$transaccion->buscarDatos($consultaSQL);
            foreach ($productos as $producto): ?> 
            <div class="articulo">  
                <img src="<?php echo($producto["imagen"])?>" alt="">
                <div class="administrar">
                <h2><?php echo($producto["nombre"]) ?></h2>
                <h2>(<?php echo($producto["marca"]) ?>)</h2>
                <h3><?php echo($producto["descripcion"]) ?></h3>
                <h3><?php echo($producto["precio"]) ?></h3>
                    <form action="">
                        <button type="submit" class="boton">Editar</button>
                        <br>
                        <button type="submit" class="boton">Eliminar</button>
                    </form>
                    <br>
                </div> 
            </div>
        <?php endforeach ?> 
    </section>
</body>
</html>