<?php

include("conexion.php");
$con=conectar();

$cod_cliente=$_POST['IDcliente'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$ocupacion=$_POST['ocupacion'];

$sql="UPDATE cliente SET  nombre='$nombre',edad='$edad',genero='$genero',
direccion='$direccion',telefono='$telefono',ocupacion='$ocupacion'
 WHERE IDcliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>