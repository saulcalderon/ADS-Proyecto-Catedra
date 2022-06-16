<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
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
                                <form action="insertarCliente.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="ocupacion" placeholder="Ocupacion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Genero</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Ocupacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['genero']?></th>
                                                <th><?php  echo $row['direccion']?></th>   
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['ocupacion']?></th>  

                                                <th><a href="actualizarCliente.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteCliente.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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