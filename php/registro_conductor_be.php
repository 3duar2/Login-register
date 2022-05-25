<?php
sesion_start();
if(isset($_SESSION['correo']))
{

include "conexion_be.php";

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$edad = $_POST ['edad'];
$cedula = $_POST ['cedula'];
$correo = $_POST ['correo'];
$modelo = $_POST ['modelo'];
$patente = $_POST ['patente'];
$marca = $_POST ['marca'];
$nombre_usuario_conductor = $_POST ['Nombre_usuario_conductor'];
$contrasena_post = $_POST ['contrasena'];
$contrasena_hash = hash('sha512', $contrasena_post );


$stmt = $conexion->prepare("INSERT INTO conductor(nombre, apellido, edad, cedula, correo, modelo, patente, marca, nombre_usuario_conductor, contrasena) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssss",
      $nombre, $apellido, $edad, $cedula, $correo, $modelo, $patente , $marca, $nombre_usuario_conductor, $contrasena_hash);


$ejecutar = $stmt->execute();

if($ejecutar){
    echo '
          <script>
          alert("Conductor almacenado exitosamente");
          windows.location = "../index.php";
          </script>
          ';
          

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
}
else{
      echo "no validado";
}
?>