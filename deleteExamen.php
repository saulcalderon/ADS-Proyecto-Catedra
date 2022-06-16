<?php

include("conexion.php");
$con=conectar();

$cod_examen=$_GET['id'];

$sql="DELETE FROM examen  WHERE IDexamen='$cod_examen'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: examen.php");
    }
?>
