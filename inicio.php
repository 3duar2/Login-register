<?php
session_start();
unset($_SESSION['correo']);
session_destroy();


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
                        <h3>Apartado Conductor</h3>
                        <p>Elija uno de los apartados</p>
                        <form action="php/ir_a_index.php" method="POST" class="formulario_inicio_conductor">
                        <button>Ingresar Conductor</button>

                        
                        
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Apartapdo Usuario</h3>
                        <p>Elija uno de los apartados</p>
                        <form action="php/ir_a_usuario.php"  method="POST" class="formulario_inicio">
                        
                        <a href="/login-register/usuario.php" class="caja__trasera">Ingresar</a>
                        
                    </div>
                </div>
              
                

    </main>

<script src="assets/js/script.js"></script>
</body>
</html>