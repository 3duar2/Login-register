<?php
    session_start();

    

    
    echo"<h1> Carga agregada axitosamente </h1>";
    
    echo"<h1> BIENVENIDO </h1>";
    if(isset($_SESSION['estado']))
    {
    echo"<h1> BIENVENIDO  </h1>".$_SESSION['estado'];
    
    }
    header("location: perfil_cliente.php");
?>