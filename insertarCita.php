<?php
include("conexion.php");
$con=conectar();

$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$motivo=$_POST['motivo'];


$ini="SELECT MAX(IDcita) FROM citas" ;


$sql="INSERT INTO cita VALUES('$ini','$cliente','$fecha','$motivo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: citas.php");
    
}else {
}
?>