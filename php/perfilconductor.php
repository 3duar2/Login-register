<?php include_once ('templates/header.php');?>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">

    <main>

    <div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
 


        <?php
            session_start();
            if(isset($_SESSION['correo']))
            {
            echo"<h1> BIENVENIDO  </h1>".$_SESSION['correo'];
            echo"<h2>nombre </h2>".$_SESSION['nombre'];
            }   
?>

                    <div class="col-md-10">
                    <h2>Cargas disponibles</h2>
                    </div>
                    <hr></hr>
                        <div class="row">
                        <div class="col-md-1"> 
</div>
                        <div class="col-md-4">  
                        <form action="ir_a_carga_conductor.php" method="POST" class="agregar_carga">
                        <button class="btn btn-primary btn-lg"  id="btn__iniciar-sesion">Ver Cargas</button>
                        </div>
                    </div>
<br>
<h2>Mis cargas disponibles</h2>
<hr>

                    <div class="row">
                        <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                    
                        <form action="ir_carga_curso.php" method="POST" class="carga_curso">
                        <a href="/login-register/php/ver_carga.php"><button type="button"   class="btn btn-primary btn-lg" class="caja__trasera">Ver carga</button></a>
                    </div>
                        
                    </div>
         </div>
</div>



    </main>

<script src="assets/js/script.js"></script>
