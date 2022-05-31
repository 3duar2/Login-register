<?php


include "conexion_be.php";

$nombre = $_POST ['nombre_conductor'];
$apellido = $_POST ['apellido_conductor'];
$edad = $_POST ['edad_conductor'];
$cedula = $_POST ['cedula_conductor'];
$correo = $_POST ['correo_conductor'];
//$modelo = $_POST ['modelo'];
//$patente = $_POST ['patente'];
//$marca = $_POST ['marca'];
$nombre_usuario_conductor = $_POST ['Nombre_usuario_conductor'];
$contrasena_post = $_POST ['contrasena_conductor'];
$contrasena_hash = hash('sha512', $contrasena_post );


$stmt = $conexion->prepare("INSERT INTO conductor(nombre_conductor, apellido_conductor, edad_conductor, cedula_conductor, correo_conductor, nombre_usuario_conductor, contrasena_conductor) VALUE (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssss",
      $nombre, $apellido, $edad, $cedula, $correo,$nombre_usuario_conductor, $contrasena_hash);


$ejecutar = $stmt->execute();

if($ejecutar){
    echo '
          <script>
          alert("Conductor almacenado exitosamente");
          windows.location = "../index.php";
          </script>
          ';
          header("location: ../usuario.php");

   }else{
    echo '
         <script>
         alert("Intentalo de nuevo, conductor no almacenado");
          windows.location = "../index.php";
         </script>
         ';
      die(mysqli_error($conexion));
    }

    $stmt->close();
    mysqli_close($conexion);


?>