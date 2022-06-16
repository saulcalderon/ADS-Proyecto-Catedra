<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM examen WHERE IDexamen='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateExamen.php" method="POST">
                    
                                <input type="hidden" name="IDexamen" value="<?php echo $row['IDexamen']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="cliente" placeholder="cliente" value="<?php echo $row['cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Esfera" placeholder="Esfera" value="<?php echo $row['Esfera']  ?>">
                                <input type="text" class="form-control mb-3" name="Cilindro" placeholder="Cilindro" value="<?php echo $row['Cilindro']  ?>">
                                <input type="text" class="form-control mb-3" name="Prisma" placeholder="Prisma" value="<?php echo $row['Prisma']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>