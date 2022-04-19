<?php

include 'conexion_be.php';
session_start();


$correo = $_POST['correo']; 
$contrasena = $_POST['contrasena'];

$sql = "SELECT COUNT (*) contar FROM conductor WHERE correo='$correo' contrasena= '$contrasena' ";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "correo: " . $row["correo"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conexion->close();

?>