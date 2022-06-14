<?php 
include_once ('templates/header.php');
include 'conexion_be.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">
</head>
<body>
<div class="row">
        <div class="col-8 col-md-6 offset-sm-2 col-md-4 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
        <a href="/Login-Register/php/perfilconductor.php"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>

        <div class="col-md-10">
        <h1> Cargas disponibles</h1>
        </div>
        <hr>
        <h2> Que carga desea adjudicarse: </h2>
        <div class="row">
        <div class="col-md-4"> 
        <form action="adjudica_carga_conductor.php" method="POST" class="entregado">
        <input type="text" class="form-control" placeholder="ID:" name="id" value="">
        <div class="col-md-4">
        <button class="btn btn-primary"> Adjudicar carga </button>
        </div>    
    </form>
</div>

        </div>
         
        </br>

    <script src="assets/js/script.js"></script>


    
    <?php
       
       $sql = "SELECT * FROM carga ";
       $result = mysqli_query($conexion,$sql);
       while($row = mysqli_fetch_array($result)){
       ?>
<br>
<div class="row">
    <div class="col-md-3">
    <td>ID</td>
    <td><?php echo $row['id_carga']?></td>
        </div>
        <div class="col-md-3">
        <td>Alto</td>
        <td><?php echo $row['alto_carga']?></td>

        </div>
        
        <div class="col-md-3">
        <td>Largo</td>
        <td><?php echo $row['largo_carga']?></td>

        </div>
       </div>
 <hr>
       <div class="row">

    <div class="col-md-3">
    <td>Region de recogida</td>
    <td><?php echo $row['direccion_de_inicio']?></td>

        </div>
        
        <div class="col-md-3">
        <td>comuna de recogida</td>
        <td><?php echo $row['direccion_de_destino']?></td>

    </div>
        
        <div class="col-md-3">
        <td>Direccion de recogida</td>

        </div>
    
        </div>
        <hr> 
        <div class="row">
        
    <div class="col-md-3">
    <td>Casa,departamento N° de recogida</td>
   
    </div>

        <div class="col-md-3">
        <td>Region de destino</td>
   
    </div>
        
        <div class="col-md-3">
        <td>comuna de destino</td>
   
    </div>
    </div>
    <hr>
    <div class="row">

    <div class="col-md-3">
    <td>Direccion de destino</td>
        
</div>
        
        <div class="col-md-3">
        <td>Region de destino</td>
    
    </div>
        
        <div class="col-md-3">
        <td>Casa,departamento N° de destino</td>
   
    </div>
    </div>
    <hr>
    <div class="row">

    <div class="col-md-3">
        </div>
       </div>
            


        </tr>
</div>

<?php

}
?>

    

</div>
</div>
</div>


</body>
</html>

