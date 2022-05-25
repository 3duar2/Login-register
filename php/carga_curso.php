<?php
 session_start();

 if(isset($_SESSION['correo']))
    {
    
    
echo"<h1> Usuario  </h1>".$_SESSION['correo'];
echo"<h2>Nombre </h2>".$_SESSION['nombre'];


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

        <label for="estado">Tus cargas en cursos son :</label>

            <select id="estado" name="estado">
            <option value="cargas_de_tipo_seca" selected>Cargas de tipo seca</option>

 


        </select> 

        <a href="/login-register/php/ver_carga.php" class="caja__trasera">Ver carga</a>
                

    </main>

<script src="assets/js/script.js"></script>
</body>
</html>