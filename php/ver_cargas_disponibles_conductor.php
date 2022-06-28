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

    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
        
        <div class="col-md-10">
        <h1> Cargas disponibles</h1>

        </div>
        <hr>
        <h2> Que carga desea adjudicarse: </h2>
        <div class="row">
        <div class="col-md-4"> 
        <form action="adjudica_carga_conductor.php" method="POST" class="entregado">
        <input type="text" class="form-control" placeholder="ID:" name="id_carga" value="">
        
</div>
        <div class="col-md-4">
        <button class="btn btn-primary"> Adjudicar carga </button>
        </div>
        </div>
         
        </br></form>



       


    
    

    <script src="assets/js/script.js"></script>

    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Alto</td>
            <td>Ancho</td>
            <td>Largo</td>
            <td>Direccion de inicio</td>
            <td>Direccion de destino</td>
            <td>Informacion adicional</td>
           
        </tr>
        <?php
        
        $sql = "SELECT * FROM carga ";
$result = mysqli_query($conexion,$sql);

        while($row = mysqli_fetch_array($result)){


        ?>
        <tr>
            <td><?php echo $row['id_carga']?></td>
            <td><?php echo $row['alto_carga']?></td>
            <td><?php echo $row['ancho_carga']?></td>
            <td><?php echo $row['largo_carga']?></td>
            <td><?php echo $row['direccion_de_inicio']?></td>
            <td><?php echo $row['direccion_de_destino']?></td>
            <td><?php echo $row['comentario_carga']?></td>
           
        </tr> 
<?php /* <td>Region de recogida</td>
            <td>comuna de recogida</td>
            <td>Direccion de recogida</td>
            <td>Casa,departamento N° de recogida</td>
            <td>Region de destino</td>
            <td>comuna de destino</td>
            <td>Direccion de destino</td>
            <td>Region de destino</td>
            <td>Casa,departamento N° de destino</td>



            ____________________________________________
            <td><?php echo $row['region_inicio']?></td>
            <td><?php echo $row['comuna_inicio']?></td>
            <td><?php echo $row['direccion_inicio']?></td>
            <td><?php echo $row['casa_departamento_n_inicio']?></td>
            <td><?php echo $row['region_destino']?></td>
            <td><?php echo $row['comuna_destino']?></td>
            <td><?php echo $row['direccion_destino']?></td>
            <td><?php echo $row['casa_departamento_n_destino']?></td>
            <td><?php echo $row['id_estado']?></td> */
}
?>

    

</div>
</div>
</div>


</body>
</html>

