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
    <title>Login y Register Truck and Trip </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta conductor?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta cliente?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_conductor_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                       
                        <input type="text" placeholder="Correo Electronico"name="correo" > 
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_conductor_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse socio conductor</h2>
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Apellido" name="apellido">
                        <input type="text" placeholder="Edad" name="edad" >
                        <input type="text" placeholder="Cedula identidad" name="cedula" >
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Modelo" name="modelo">
                        <input type="text" placeholder="Patente" name="patente">
                        <input type="text" placeholder="Marca" name="marca">
                        <input type="text" placeholder="Nombre usuario" name="Nombre_usuario_conductor">
                        <input type="password" placeholder="Contrasena" name="contrasena">
                        <button>Regístrarse</button>



                     </form> 
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>