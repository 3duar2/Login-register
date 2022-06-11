<?php


include "conexion_be.php";

$id_carga = $_POST ['id_carga'];



$stmt = $conexion->prepare("INSERT INTO conductor(id_carga) VALUE (?)");

$stmt->bind_param("s",
      $id_carga);


$ejecutar = $stmt->execute();

if($ejecutar){
    echo '
          <script>
          alert("Conductor almacenado exitosamente");
          windows.location = "../perfilconductor.php";
          </script>
          ';
          header("location: perfilconductor.php");

   }else{
    echo '
         <script>
         alert("Intentalo de nuevo, conductor no almacenado");
          windows.location = "perfilconductor.php";
         </script>
         ';
      die(mysqli_error($conexion));
    }

    $stmt->close();
    mysqli_close($conexion);


?>