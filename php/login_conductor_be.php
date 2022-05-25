<?php

include 'conexion_be.php';
session_start();


$correo = $_POST['correo']; 
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM conductor WHERE correo='$correo' and contrasena= md5('$contrasena'); ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;


    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "correo: " . $correo . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['correo'] = $correo;
      
      $_SESSION['correo'] = $correo;
      $_SESSION['nombre'] = $row["nombre"];
      $_SESSION['correo'] = $row["apellido"];
      $_SESSION['correo'] = $row["apellido"];
      $_SESSION['correo'] = $row["cedula"];
      $_SESSION['correo'] = $row["correo"];
           header("location: perfil_cliente.php");
      
    }
    else
    {
      echo "Error en conexion";
    }
   
  $conexion->close();

?>