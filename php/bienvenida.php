<?php
include_once ('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar carga </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Login-Register/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-light from-wrapper".bg-light>
<!--Register carga-->

<?php
 session_start();
 if(isset($_SESSION['correo']))
    {
    echo"<h2> BIENVENIDO</h2>".$_SESSION['correo'];
    }
?>           

        <!--Register carga-->
        <form action="agregar_carga.php" method="POST" class="formulario_agregar_carga_usuario">
                        <h2>Datos del producto</h2>
                        <hr>
                        <h2> Dimensiones: </h2>
                        <div class="row">
                          <div class="col-sm-3">
                        <input type="text" placeholder="Alto:" name="alto_carga" value="" class="form-control">
                         </div>
                        <div class="col-sm-3">
                        <input type="text" placeholder="Ancho:" name="ancho_carga" value="" class="form-control">
                        </div>

                        <div class="col-sm-3">
                        <input type="text" placeholder="Largo:" name="largo_carga" value="" class="form-control" >
                        </div>
                        </div>
                        <br>

                      <h2> Estado de la carga: </h2>
                      
                      
                      <div class="row">
                      <div class="col-sm-3">
                        <label for="agregar_carga">Estado inicial de la carga:</label>
                        </div>
                        <div class="col-sm-3">
                        <select id="estado" name="carga no adjudicada">
                        </div>
                        <div class="col-sm-3">
                        <option value="carga no adjudicada">Carga no adjudicada</option>
                        </div>
                        </div>
 


                        </select> 
                      
                       </div>
                          
                      
                        <h2> Region: </h2>
                        <div class="row">
                          <div class="col-md-3">
                        <input type="text" placeholder="Region:" name="nombre_region"  value="" class="form-control" >
                        </div>
                      </div>
 
                        <h2> Direccion donde se recogera la carga: </h2>
                        <div class="row">
                          <div class="col-md-3">
                        <input type="text" placeholder="Direccrion de inicio:" name="direccion_de_inicio" value="" class="form-control" >
                        </div>
                      </div>
                        <h2> Direccion donde se entregara la carga: </h2>
                        <div class="row">
                          <div class="col-md-3">
                        <input type="text" placeholder="Direccrion de destino:" name="direccion_de_destino" value="" class="form-control" >
                        </div>
                        
                        <h2> Agregar informacion adicional al conductor: </h2>
                        <div class="row">
                          <div class="col-md-3">
                        <textarea name="comentario_carga" class="form-control" placeholder="Ingresa tu mensaje"></textarea>
                        </div>
                      

                      <!--  <h2> Tipo de camion: </h2>

                       <label for="estado">Estado de la carga:</label>

                            <select id="estado" name="estado">
                            <option value="cargas_de_tipo_seca" selected>Cargas de tipo seca</option>
                            <option value="liquidos_gases_y_quimicos">Liquidos gases y quimicos</option>
                            <option value="generales">Generales</option>
                            <option value="refrigerados">Refrigerados</option>
                            <option value="tolva">Tolva</option>
                            <option value="maquinarias">Maquinarias</option>
                            <option value="contenedores_especiales">Contenedores especiales</option>
                             

                           
                        </select> -->
                       
                       <!-- <input type="text" placeholder="Solido:" name="solido" >
                        <input type="text" placeholder="Liquido:" name="liquido">
                        <input type="text" placeholder="Gaseoso:" name="gaseoso"> -->

                       <!-- <h2> Direccion de recogida: </h2>
                        
                        <input type="text" placeholder="Region:" name="region_inicio" value="12">
                        <input type="text" placeholder="Comuna:" name="comuna_inicio" value="12">
                        <input type="text" placeholder="Direccion:" name="direccion_inicio" value="12">
                        <input type="text" placeholder="Casa Departamento N°:" value="12" name="casa_departamento_n_inicio">

                        <h2> Direccion de destino: </h2>
                        <input type="text" placeholder="Region:" value="12" name="region_destino">
                        <input type="text" placeholder="Comuna:" value="12" name="comuna_destino">
                        <input type="text" placeholder="Direccion:" value="12" name="direccion_destino">
                        <input type="text" placeholder="Casa, Departamento N°:" value="12" name="casa-departamento-n_destino">

-->
                          <div class="col-md-3">
                        <button class="btn btn-primary"> Agregar Carga </button>
                   </form>
                </div>   
                </div>
                
               
            
        </main>

        <script src="assets/js/script.js"></script>
        </div>
         </div>
</div>
      </body>
<?php
//    }
  //  else
    //echo "no valida";
?>
</html>