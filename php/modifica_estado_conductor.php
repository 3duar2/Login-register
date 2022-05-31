<?php


include "conexion_be.php";

$id = $_POST ['id'];





$stmt = $conexion->prepare("DELETE INTO agregar_carga where (id) VALUE (?)");

$stmt->bind_param("s",
      $id);


$ejecutar = $stmt->execute();

if($ejecutar){

}
$stmt->close();
    mysqli_close($conexion);
?>