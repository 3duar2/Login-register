<?php
include_once ('templates/header.php');
include 'conexion_be.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm10- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
<div> <id="contenedor">
<a href="/Login-Register/php/perfilconductor.php"><button class="btn btn-lg btn-primary"></span>Volver <-</button></a>
<hr>
<h1>Chat</h1>
<hr>
      <div id="caja_chat">
          <div id="chat">
                   <?php
                   $consulta = "SELECT * FROM chat ORDER BY id DESC";
                   $ejecutar = $conexion->query($consulta);
                   while($fila = $ejecutar->fetch_array()){
            ?>

             <div id="datos-chat">
                  <spam style="color:·1c62c4;"><?php echo $fila['nombre']; ?>: </span>
                  <spam style="·848484;"><?php echo $fila['mensaje']; ?> </span>
                  <spam style="float: right;"><?php echo $fila['fecha']; ?> </span>
            </div >
            <?php } ?>
        </div >
      </div >
      <div class="row">
      <div class="col-md-4">
      <form method="POST" action="chat.php">
        <tr>
        <td><input type="text" name="nombre" placeholder="Ingresa tu nombre"></td> 
        <tr>
                   </div>
                   </div>
                   <br>
        <div class="row">
      <div class="col-md-4">
        <td><textarea name="mensaje"  placeholder="Ingresa tu mensaje"></textarea></td> 
        </tr>
    </tr>
            </div>
           </div>
          <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
     </form>

      <?php
           if (isset($_POST['enviar']))  {
           $nombre = $_POST['nombre'];
           $mensaje = $_POST['mensaje'];


           $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
           $ejecutar = $conexion->query($consulta);
        }
?>
        
</div>
          
</body>
</html>



