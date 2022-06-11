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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse" data-bs-toggle="modal" data-bs-target="#myModal">Registrar</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_conductor_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electrónico"name="correo_conductor" > 
                        <input type="password" placeholder="Contraseña" name="contrasena_conductor">
                        <button>Entrar</button>
                    </form>
                </div>
            </div>
        <!--Register-->
        </main>

                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">¡Regístrate Ahora! ¿Eres Cliente o Conductor?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formulario_crear_conductor" class="formulario__register">
                                    <div class="container">
                                        <div class="row-12">
                                            <div class="row">
                                                <div class="col form-check">
                                                    <input class="form-check-input" type="radio" name="cliente_o_conductor" id="cliente_usuario"
                                                    value=1>
                                                    <label class="form-check-label" for="cliente_usuario">
                                                        Cliente
                                                    </label>
                                                </div>
                                                <div class="col form-check">
                                                    <input class="form-check-input" type="radio" name="cliente_o_conductor" id="conductor_usuario"
                                                    value=2>
                                                    <label class="form-check-label" for="conductor_usuario">
                                                        Conductor
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Nombre:</label>
                                                    <input type="text" class="form-control" placeholder="Nombre" id="nombre_usuario" name="nombre_usuario">
                                                </div>
                                                <div class="col">
                                                    <label>Apellido:</label>
                                                    <input type="text" class="form-control" placeholder="Apellido" id="apellido_usuario" name="apellido_usuario">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Fecha de Nacimiento:</label>
                                                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario">
                                                </div>
                                                <div class="col">
                                                    <label>Cédula identidad:</label>
                                                    <input type="text" class="form-control" placeholder="Cédula identidad" id="cedula_usuario" name="cedula_usuario">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Contraseña:</label>
                                                    <input type="password" class="form-control" placeholder="Contraseña" id="contrasena_usuario" name="contrasena_usuario">
                                                </div>
                                                <div class="col">
                                                    <label>Correo Electrónico:</label>
                                                    <input type="email" class="form-control" placeholder="Correo Electrónico" id="correo_usuario" name="correo_usuario">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Región:</label>
                                                        <select class='form-control' id='region_usuario' name='region_usuario'>
                                                        </select>
                                                </div>
                                                <div class="col">
                                                    <label>Comuna:</label>
                                                    <select class='form-control' id='comuna_usuario' name='comuna_usuario' 
                                                    disabled>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    <div>
                                        <input type="button" class="btnRegistrar btn btn-primary mt-3" id="registrar_usuario" value="Registrar">
                                    </div>   
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>

        <script src="assets/js/script.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/sweetAlert.js"></script>
        <script src="assets/js/functions.js"></script>
</body>
</html>