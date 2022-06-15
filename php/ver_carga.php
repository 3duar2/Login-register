<?php
include_once ('templates/header.php');
include 'conexion_be.php';
 //session_start();

 //if(isset($_SESSION['correo']))
   // {
    
    
//echo"<h1> Usuario  </h1>".$_SESSION['correo'];
//echo"<h2>Nombre </h2>".$_SESSION['nombre'];


//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">
    <div class="row">
        <div class="col-8 col-md-6 offset-sm-2 col-md-4 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
        <a href="/Login-Register/php/perfilconductor.php"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>

</head>
<body>
 
    
        <h1> Tu cargas en curso son: </h1>

        <h2> Que carga desea ver: </h2>
        <div class="row">
            <div class="col-md-3">
                    <form action="buscar_carga.php" method="POST" class="entregado">
                    <input type="text" placeholder="ID:" name="id_carga" value="">
             </div>
            <div class="col-md-2 ">
                    <button class="btn btn-lg btn-primary"> Ver esta carga </button>
            </div>
            <div class="col-md-3">
            <a href="/login-register/php/perfil_cliente.php"><button class="btn btn-lg btn-primary caja__trasera"></span>carga Entregada</button></a>
        </div>
   </div>
        </br>





    <br>
    

    <script src="assets/js/script.js"></script>

    <br>
    <?php
  ?>  <table>
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
            <div class="row">
            <div class="col-md-2">
            <td>ID</td>
            <td><?php echo $row['id_carga']?></td>
             </div>
             <div class="col-md-2">
             <td>Alto</td>
             <td><?php echo $row['alto_carga']?></td>
             </div>
             <div class="col-md-2">
             <td>Ancho</td>

             <td><?php echo $row['ancho_carga']?></td>

             </div>
             <div class="col-md-2">
             <td>Largo</td>
             <td><?php echo $row['largo_carga']?></td>
           </div>
        </div>
        </div>
     </div>
            <td><?php echo $row['alto_carga']?></td>
            <td><?php echo $row['ancho_carga']?></td>
            <td><?php echo $row['largo_carga']?></td>
            <td><?php echo $row['direccion_de_inicio']?></td>
            <td><?php echo $row['direccion_de_destino']?></td>
            <td><?php echo $row['comentario_carga']?></td>
            
        </tr> 
<?php


/*

 <td>Region de recogida</td>
            <td>comuna de recogida</td>
            <td>Direccion de recogida</td>
            <td>Casa,departamento N° de recogida</td>
            <td>Region de destino</td>
            <td>comuna de destino</td>
            <td>Direccion de destino</td>
            <td>Region de destino</td>
            <td>Casa,departamento N° de destino</td>


<td><?php echo $row['region_inicio']?></td>
            <td><?php echo $row['comuna_inicio']?></td>
            <td><?php echo $row['direccion_inicio']?></td>
            <td><?php echo $row['casa_departamento_n_inicio']?></td>
            <td><?php echo $row['region_destino']?></td>
            <td><?php echo $row['comuna_destino']?></td>
            <td><?php echo $row['direccion_destino']?></td>
            <td><?php echo $row['casa_departamento_n_destino']?></td>
            <td><?php echo $row['id_estado']?></td>  */
}
?>

    

  


</body>
</html>

