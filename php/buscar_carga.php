<?php

include 'conexion_be.php';
session_start();


$id = $_POST['id_carga']; 


$sql = "SELECT * FROM carga WHERE id_carga='$id' ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;



    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "correo_usuario: " . $id . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['id_carga'] = $id;
      //$_SESSION['tipo_carga'] = $tipo_carga;
      //$_SESSION['alto_carga'] = $alto_carga;
      //$_SESSION['ancho_carga'] = $ancho_carga;
      //$_SESSION['largo_carga'] = $largo_carga;
      //$_SESSION['id_region'] = $id_region;
      //$_SESSION['id_estado'] = $id_estado;
     
      
           header("location: mostrar_carga_seleccionada.php");
      
    }
    else
    {
      echo "Error en conexion";
      header("location: mostrar_carga_seleccionada.php");
    }
   
  $conexion->close();

?>