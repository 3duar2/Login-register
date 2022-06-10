<?php

include 'conexion_be.php';
session_start();


$correo = $_POST['correo_conductor']; 
$contrasena = $_POST['contrasena_conductor'];

$sql = "SELECT * FROM conductor WHERE correo_conductor='$correo' and contrasena_conductor= md5('$contrasena'); ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;

echo $row

    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "correo: " . $correo . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['correo_conductor'] = $correo;
      
      $_SESSION['correo_conductor'] = $correo;
      $_SESSION['nombre_conductor'] = $row["nombre_conductor"];
      $_SESSION['apellido_conductor'] = $row["apellido_conductor"];
      $_SESSION['id_conductor'] = $row["id_conductor"];
      $_SESSION['cedula_conductor'] = $row["cedula_conductor"];
      $_SESSION['nombre_usuario_conductor'] = $row["nombre_usuario_conductor"];
           header("location: perfilconductor.php");
      
    }
    else
    {
      echo "Error en conexion";
      header("location: perfilconductor.php");
    }
   
  $conexion->close();

?>