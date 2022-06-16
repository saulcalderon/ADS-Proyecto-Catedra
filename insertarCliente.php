<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$ocupacion=$_POST['ocupacion'];

$ini="SELECT MAX(IDcliente) FROM cliente" ;


$sql="INSERT INTO cliente VALUES('$ini','$nombre','$edad','$genero','$direccion','$telefono','$ocupacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>