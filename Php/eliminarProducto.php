<?php 

include("BaseDatos.php");
$id=$_GET["id"];
$transaccion = new BaseDatos();
$consultaSQL = "DELETE FROM productos WHERE idProducto='$id'";
$transaccion->eliminarProducto($consultaSQL);

header("location:../inventario.php");
?>