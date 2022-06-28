<?php

include 'conexion_be.php';
session_start();
if(isset($_SESSION['id_carga']))
{
echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['tipo_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['alto_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['ancho_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['largo_carga'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_region'];
//echo"<h1> Su carga seleccionada es:  </h1>".$_SESSION['id_estado'];

}


$id_estado = $_POST['estado']; 
//$id_carga = $_POST['id_carga'];


$sql = "UPDATE carga set estado='$id_estado' WHERE id_carga='$id_carga' ";
$result = mysqli_query($conexion,$sql);
//var_dump($result);
//echo $sql;



    // output data of each row
    if($row = mysqli_fetch_array($result)) {
      echo "estado: " . $id_estado . "cantidad en bdd" . $row["contar"]. "<br>";
      $_SESSION['estado'] = $id_estado;
     
      
           header("location: mostrar_carga_seleccionada.php");
      
    }
    else
    {
      echo "Error en conexion";
      
    }header("location: mostrar_carga_seleccionada.php");
   
  $conexion->close();

?>