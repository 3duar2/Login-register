<?php


include "conexion_be.php";

$nombre_usuario = $_POST ['nombre_usuario'];
$apellido_usuario = $_POST ['apellido_usuario'];
$correo_usuario = $_POST ['correo_usuario'];
$fecha_nacimiento_usuario = $_POST ['fecha_nacimiento_usuario'];
$cedula_usuario = $_POST ['cedula_usuario'];
$contrasena_usuario = $_POST ['contrasena_usuario'];
$region_usuario = $_POST ['region_usuario'];
$comuna_usuario = $_POST ['comuna_usuario'];

// $stmt = $conexion->prepare("INSERT INTO usuarioes(id_tipo_usuario, nombre_usuario, apellido_usuario, edad_usuario, cedula_usuario, correo_usuario, nombre_usuario_usuario, contrasena_usuario) VALUE (?, ?, ?, ?, ?, ?, ?)");

// $stmt->bind_param("sssssss",$nombre, $apellido, $edad, $cedula, $correo,$nombre_usuario_usuario, $contrasena_hash);

$stmt = $conexion->prepare("INSERT INTO usuarios(id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, fecha_nacimiento_usuario, cedula_usuario, contrasenia_usuario, region_usuario, comuna_usuario) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssss", 2,$nombre_usuario, $apellido_usuario, $correo_usuario, $fecha_nacimiento_usuario, $cedula_usuario,$contrasena_usuario, $region_usuario, $comuna_usuario);


$ejecutar = $stmt->execute();

// $stmt = $conexion->prepare("INSERT INTO usuarioes(id_tipo_usuario, nombre_usuario, apellido_usuario, edad_usuario, cedula_usuario, correo_usuario, nombre_usuario_usuario, contrasena_usuario) VALUE (?, ?, ?, ?, ?, ?, ?)");

// $stmt->bind_param("sssssss",$nombre, $apellido, $edad, $cedula, $correo,$nombre_usuario_usuario, $contrasena_hash);


// $ejecutar = $stmt->execute();

if($ejecutar){
    echo '
          <script>
          alert("usuario almacenado exitosamente");
          windows.location = "../index.php";
          </script>
          ';
          header("location: ../usuario.php");

   }else{
    echo '
         <script>
         alert("Intentalo de nuevo, usuario no almacenado");
          windows.location = "../index.php";
         </script>
         ';
      die(mysqli_error($conexion));
    }

    $stmt->close();
    mysqli_close($conexion);


?>