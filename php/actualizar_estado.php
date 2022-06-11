<?php

include 'conexion_be.php';
session_start();


$id_estado = $_POST['id_estado']; 


$sql = "UPDATE  FROM carga WHERE id_estado='$id_estado' ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;



    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "Estado: " . $id_estado . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['id_estado'] = $id_estado;
     
      
           header("location: mostrar_carga_seleccionada.php");
      
    }
    else
    {
      echo "Error en conexion";
      header("location: mostrar_carga_seleccionada.php");
    }
   
  $conexion->close();

?>