<?php


include "conexion_be.php";

$nombre = $_POST ['nombre_usuario'];
$apellido = $_POST ['apellido_usuario'];
$edad = $_POST ['edad_usuario'];
$cedula = $_POST ['cedula_usuario'];
$correo = $_POST ['correo_usuario'];
$nombre_usuario_usuario = $_POST ['Nombre_usuario_usuario'];
$contrasena_post = $_POST ['contrasena_usuario'];
$contrasena_hash = hash('sha512', $contrasena_post );


$stmt = $conexion->prepare("INSERT INTO usuario(nombre_usuario, apellido_usuario, edad_usuario, cedula_usuario, correo_usuario, nombre_usuario_usuario, contrasena_usuario) VALUE (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssss",
      $nombre, $apellido, $edad, $cedula, $correo,$nombre_usuario_usuario, $contrasena_hash);


$ejecutar = $stmt->execute();

if($ejecutar){
    echo '
          <script>
          alert("Usuario almacenado exitosamente");
          windows.location = "../index.php";
          </script>
          ';
        
          
          

   }else{
    echo '
         <script>
         alert("Intentalo de nuevo, Usuario no almacenado");
          windows.location = "../index.php";
         </script>
         ';
      die(mysqli_error($conexion));
    }header("location: ../usuario.php");

    $stmt->close();
    mysqli_close($conexion);

?>