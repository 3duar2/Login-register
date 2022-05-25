<?php
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


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
 
    
        <h1> Tu cargas en curso son: </h1>

        <h2> Que carga desea confirmar: </h2>
        <div>
        <form action="elimina.php" method="POST" class="entregado">
        <input type="text" placeholder="ID:" name="id" value="">
        <button> Entregado </button>
        </div>
        </br>



       <td> <a href="/login-register/php/perfil_cliente.php" class="caja__trasera">carga Entregada</a></td>


    
    

    <script src="assets/js/script.js"></script>

    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Alto</td>
            <td>Ancho</td>
            <td>Largo</td>
            <td>Region de recogida</td>
            <td>comuna de recogida</td>
            <td>Direccion de recogida</td>
            <td>Casa,departamento N° de recogida</td>
            <td>Region de destino</td>
            <td>comuna de destino</td>
            <td>Direccion de destino</td>
            <td>Region de destino</td>
            <td>Casa,departamento N° de destino</td>
        </tr>
        <?php
        
        $sql = "SELECT * FROM agregar_carga ";
$result = mysqli_query($conexion,$sql);

        while($row = mysqli_fetch_array($result)){


        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['alto']?></td>
            <td><?php echo $row['ancho']?></td>
            <td><?php echo $row['largo']?></td>
            <td><?php echo $row['region_inicio']?></td>
            <td><?php echo $row['comuna_inicio']?></td>
            <td><?php echo $row['direccion_inicio']?></td>
            <td><?php echo $row['casa_departamento_n_inicio']?></td>
            <td><?php echo $row['region_destino']?></td>
            <td><?php echo $row['comuna_destino']?></td>
            <td><?php echo $row['direccion_destino']?></td>
            <td><?php echo $row['casa_departamento_n_destino']?></td>
            <td><?php echo $row['estado']?></td>
        </tr> 
<?php

}
?>

    

  


</body>
</html>

