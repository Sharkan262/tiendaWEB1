<?php

    include("BaseDatos.php");
    
    if (isset($_POST["botonEnvio"])){
        
        //1. recibir datos:
        $nombreProducto=$_POST["nombreProducto"];
        $marcaProducto=$_POST["marcaProducto"];
        $precioProducto=$_POST["precioProducto"];
        $descripcionProducto= $_POST["descripcionProducto"];
        $imagenProducto = $_POST["imagenProducto"];

        //2. Crear un objeto de la clase BaseDatos
        //2. Sacar una copia de la clase BaseDatos
        $transaccion= new BaseDatos();
        
        //3.Crear la consulta SQL para agregar datos
        $consultaSQL="INSERT INTO productos(nombre,marca,precio,descripcion,imagen) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$descripcionProducto','$imagenProducto')";

        //4.LLamar al metodo agregarDatos     
        $transaccion->agregarDatos($consultaSQL);

        
        

        
    }
?>