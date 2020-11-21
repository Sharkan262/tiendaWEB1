<?php 

    include("BaseDatos.php");

    if(isset($_POST["boton-Editar"])){

        $nombre=$_POST["nombreEditar"];
        $marca=$_POST["marcaEditar"];
        $precio=$_POST["precioEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $id=$_GET["id"];

        $transaccion=new BaseDatos();

        $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca', precio = '$precio', descripcion='$descripcion' WHERE idProducto='$id'";
        
        $transaccion->editarDatos($consultaSQL);

        header("location:../inventario.php");





    }





?>