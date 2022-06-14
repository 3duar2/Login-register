<?php
include_once ('templates/header.php');
 session_start();

 if(isset($_SESSION['correo_usuario']))
    {
    
    


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">
    
    
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
                <div class="col-md-12">       
                <h2>Solicitar transporte</h2>
                </div>
                <div class="row">
                        <h3>Agregar una carga</h3>
                        <form action="ir_a.php" method="POST" class="agregar_carga_usuario">
                        <button class="btn btn-primary"id="btn__iniciar-sesion">Agregar Carga</button>
</div>       
                        

              <div class="contenedor_carga_curso">
                <div class="caja__trasera-register">
                    <form action="ir_carga_curso.php" method="POST" class="carga_curso_usuario">
                        <h3>Cargas en curso</h3>
                        <p>Ver cargas en curso</p>
                        <a href="/login-register/php/ver_carga.php" class="caja__trasera">Ver carga</a>
                      
                        
                    </div>


    </main>

<script src="assets/js/script.js"></script>
</div>
   </div>
 </div>

</body>
</html>