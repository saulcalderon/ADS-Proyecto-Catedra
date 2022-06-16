<?php

include("conexion.php");
$con=conectar();

$cod_cita=$_GET['id'];

$sql="DELETE FROM cita  WHERE IDcita='$cod_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>
