<?php

include 'conexion_be.php';
session_start();

if(isset($_SESSION['correo_usuario']))
    {
    
    
echo"<h1> BIENVENIDO  </h1>".$_SESSION['correo_usuario'];

}

$correo = $_POST['correo_usuario']; 
$contrasena = $_POST['contrasena_usuario'];

$sql = "SELECT * FROM usuario WHERE correo_usuario='$correo' and contrasena_usuario= md5('$contrasena'); ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//$active = $row['active'];
echo $sql;



    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "correo_usuario: " . $correo . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['correo_usuario'] = $correo;
      
      $_SESSION['correo'] = $correo;
      $_SESSION['nombre'] = $row["nombre_usuario"];
      $_SESSION['correo'] = $row["apellido_usuario"];
      $_SESSION['correo'] = $row["apellido_usuario"];
      $_SESSION['correo'] = $row["cedula_usuario"];
      $_SESSION['correo'] = $row["correo_usuario"];
           header("location: perfil_cliente.php");
      
    }
    else
    {
      echo "Error en conexion";
      
    }
   
  $conexion->close();

?>