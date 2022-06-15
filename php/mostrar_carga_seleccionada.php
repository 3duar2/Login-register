<?php
include 'conexion_be.php';
include_once ('templates/header.php');
 //session_start();

 //if(isset($_SESSION['correo']))
   // {
    
    
//echo"<h1> Usuario  </h1>".$_SESSION['correo'];
//echo"<h2>Nombre </h2>".$_SESSION['nombre'];


//}


    

if(isset($_SESSION['id_carga']))
{
echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['tipo_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['alto_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['ancho_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['largo_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_region'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_estado'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
        <a href="/Login-Register/php/perfilconductor.php"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>

   <?php
    session_start();

    

    if(isset($_SESSION['id_carga']))
    {
    echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_carga'];
    
    }
    
    ?>


        <h2> Carga recibida: </h2>
        <div>
        <form action="eliminar_carga_usuario.php" method="POST" class="entregado"> 
            <button class="btn btn-primary btn-lg"> Carga recibida </button>
        </div>
        <h2> Actualizar estado: </h2>
        <div>
        <form action="buscar_carga.php" method="POST" class="cambiar_estado"> 
            <button class="btn btn-primary btn-lg"> cambiar estado </button>
        </div>
 
    <div>
        <h2> Carga recibida: </h2>
        <div>
        <form action="eliminar_carga_usuario.php" method="POST" class="entregado"> 
            <button> Carga recibida </button>
        </form>    
    </div>



       
    <div>
    <form action="actualizar_estado.php" method="POST" class="actualizar_estado">
        <label for="estado">Actualizar estado:</label>

        <select id="estado" name="estado">
     
            <option value="recibida_estado">Recepcionada</option>
            <option value="en_trancito_estado">En transito</option>
            <option value="entregada_estado">Entregada</option>
        </select> 
        <button> cambiar estado </button>
    </form>
    </div>
        </br>

        <div>
            <h2> Enviar mensaje : </h2>
            <div>
                <form action="php/ir_a_chat.php" method="POST" class="chat"> 
                <a href="/login-register/php/chat.php" class="caja__trasera">Ingresar</a>
            </div>
            </br>

        </div>
    
    

    <script src="assets/js/script.js"></script>

    <br>
    <?php
    ?>
        <script src="assets/js/script.js"></script>
    <div>
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
        </div>   
<?php
/*

 <h2> Actualizar estado: </h2>
        <div>
        <form action="actualizar_estado.php" method="POST" class="cambiar_estado"> 
        <h2> Tipo de camion: </h2>

<h1> Tu cargas en curso son: </h1>

        
        <input type="text" placeholder="ID:" name="id" value="">
       



       <td> <a href="/login-register/php/perfil_cliente.php" class="caja__trasera">carga Entregada</a></td>

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

    
</div>
         </div>
</div>
  


</body>
</html>

