<?php
include("conexion.php");
$con=conectar();

$cliente=$_POST['cliente'];
$esfera=$_POST['esfera'];
$cilindro=$_POST['cilindro'];
$prisma=$_POST['prisma'];
$fecha=$_POST['fecha'];



$ini="SELECT MAX(IDexamen) FROM examen" ;


$sql="INSERT INTO examen VALUES('$ini','$cliente','$esfera','$cilindro','$prisma','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: examen.php");
    
}else {
}
?>