<?php

include("conexion.php");
$con=conectar();

$cod_cita=$_POST['IDcita'];
$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$motivo=$_POST['motivo'];


$sql="UPDATE cita SET  cliente='$cliente',fecha='$fecha',motivo='$motivo'
 WHERE IDcita='$cod_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: citas.php");
    }
?>