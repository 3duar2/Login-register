<?php

include 'conexion_be.php';
session_start();


$id = $_POST['id_carga']; 


$sql = "DELETE  FROM carga WHERE id_carga='$id' ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;



    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "correo_usuario: " . $id . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['id_carga'] = $id;
     
      
           header("location: mostrar_carga_seleccionada.php");
      
    }
    else
    {
      echo "Error en conexion";
      header("location: mostrar_carga_seleccionada.php");
    }
   
  $conexion->close();

?>