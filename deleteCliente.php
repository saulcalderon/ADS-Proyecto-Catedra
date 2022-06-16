<?php

include("conexion.php");
$con=conectar();

$cod_cliente=$_GET['id'];

$sql="DELETE FROM cliente  WHERE IDcliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
