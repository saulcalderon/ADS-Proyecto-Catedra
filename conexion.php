<?php
function conectar(){
    $host="sql5.freemysqlhosting.net:3306";
    $user="sql5500090";
    $pass="nprGY4j9kL";

    $bd="sql5500090";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
