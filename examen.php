<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM examen";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Examen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertarExamen.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="esfera" placeholder="Esfera">
                                    <input type="text" class="form-control mb-3" name="cilindro" placeholder="Cilindro">
                                    <input type="text" class="form-control mb-3" name="prisma" placeholder="Prisma">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                   
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Esfera</th>
                                        <th>Cilindro</th>
                                        <th>Prisma</th>
                                        <th>Fecha</th>
                                        
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cliente']?></th>
                                                <th><?php  echo $row['Esfera']?></th>
                                                <th><?php  echo $row['Cilindro']?></th>
                                                <th><?php  echo $row['Prisma']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                
                                                
                                                <th><a href="actualizarExamen.php?id=<?php echo $row['IDexamen'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteExamen.php?id=<?php echo $row['IDexamen'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>