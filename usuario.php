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
                        <h3>¿Ya tienes una cuenta Usuario?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta Cliente?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                       
                        <input type="text" placeholder="Correo Electronico"name="correo_usuario" > 
                        <input type="password" placeholder="Contraseña" name="contrasena_usuario">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse como Usuario</h2>
                        <input type="text" placeholder="Nombre" name="nombre_usuario">
                        <input type="text" placeholder="Apellido" name="apellido_usuario">
                        <input type="text" placeholder="Edad" name="edad_usuario" >
                        <input type="text" placeholder="Cedula identidad" name="cedula_usuario" >
                        <input type="text" placeholder="Correo Electronico" name="correo_usuario">
                        <input type="text" placeholder="Nombre usuario" name="Nombre_usuario_usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena_usuario">
                        <button>Regístrarse</button>



                     </form> 
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>