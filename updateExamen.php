<?php

include("conexion.php");
$con=conectar();

$cod_examen=$_POST['IDexamen'];
$cliente=$_POST['cliente'];
$esfera=$_POST['Esfera'];
$cilindro=$_POST['Cilindro'];
$prisma=$_POST['Prisma'];
$fecha=$_POST['Fecha'];



$sql="UPDATE examen SET  cliente='$cliente',Esfera='$esfera',Cilindro='$cilindro',
Prisma='$prisma',Fecha='$fecha'
 WHERE IDexamen='$cod_examen'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: examen.php");
    }
?>