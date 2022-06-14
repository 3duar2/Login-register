

<?php

include "conexion_be.php";

//sesion_start()
//if(isset($_SESSION['correo']))
//{

//}




/*
$sql = "INSERT INTO `carga`(`alto_carga`, `ancho_carga`, `largo_carga`) 
VALUES ('[$alto]','[$ancho]','[$largo]')";
$query = mysqli_query($conexion,$sql);

if($query){
echo "<script> alert('correcto');</script>";
}else{
echo "<script> alert('fallo');</script>";
}
*/
/*
$Cargas_de_tipo_seca = $_POST ['cargas_de_tipo_seca'];
$Refrigerados = $_POST ['refrigerados'];
$Liquidos_gases_y_quimicos = $_POST ['liquidos_gases_y_quimicos'];
$Generales = $_POST ['generales'];
$Tolva = $_POST ['tolva'];
$Maquinarias = $_POST ['maquinarias'];
$Contenedores_especiales = $_POST ['contenedores_especiales'];
*/
/* 
$estado = $_POST ['estado'];
$region_inicio = $_POST ['region_inicio'];
$comuna_inicio = $_POST ['comuna_inicio'];
$direccion_inicio = $_POST ['direccion_inicio'];
$casa_departamento_n_inicio = $_POST ['casa_departamento_n_inicio'];
$region_destino = $_POST ['region_destino'];
$comuna_destino = $_POST ['comuna_destino'];
$direccion_destino = $_POST ['direccion_destino'];
$casa_departamento_n_destino = $_POST ['casa-departamento-n_destino'];
*/
$alto = $_POST ['alto_carga'];
$ancho = $_POST ['ancho_carga'];
$largo = $_POST ['largo_carga'];

//"INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"
$stmt = $conexion->prepare("INSERT INTO carga(alto_carga, ancho_carga, largo_carga) VALUE (?, ?, ?)");

//echo"datos rescatados". $stmt;

$stmt->bind_param("sss",
   $alto, $ancho, $largo);
//$stmt->bind_param("sss", $firstname, $lastname, $email);


$ejecutar = $stmt->execute();

if($ejecutar){
  
  header("location: exitosamente.php");

 //$_SESSION['estado'] = $estado;
  
  

    echo '
          <script>
          alert("Carga almacenada");
          windows.location = "../exitosamente.php";
          </script>
          ';
          header("location: exitosamente.php");


         
   }else{
    echo '
         <script>
         alert("Intentalo de nuevo, carga no almacenada");
          windows.location = "../exitosamente.php";
         </script>
         ';
      die(mysqli_error($conexion));
    }

    $stmt->close();
    mysqli_close($conexion);


?>