<?php
 session_start();

 if(isset($_SESSION['correo']))
    {
    
    
echo"<h1> BIENVENIDO  </h1>".$_SESSION['correo'];
echo"<h2>nombre </h2>".$_SESSION['nombre'];


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>

    <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Solicitar transporte</h3>
                        <p>Agregar una carga</p>
                        <form action="ir_a.php" method="POST" class="agregar_carga">
                        <button id="btn__iniciar-sesion">Agregar Carga</button>
                        
                        
                    </div>
                   
                </div>
              <div class="contenedor_carga_curso">
                <div class="caja__trasera-register">
                    <form action="ir_carga_curso.php" method="POST" class="carga_curso">
                        <h3>Cargas en curso</h3>
                        <p>Ver cargas en curso</p>
                        <a href="/login-register/php/ver_carga.php" class="caja__trasera">Ver carga</a>
                      
                        
                    </div>


    </main>

<script src="assets/js/script.js"></script>
</body>
</html>