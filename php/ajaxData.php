<?php

        include 'conexion_be.php';

        if($_POST["action"] == "listarRegiones"){
            $query_select = mysqli_query($conexion,"SELECT * FROM regiones");
            $num_rows = mysqli_num_rows($query_select);
            if($num_rows > 0){
                $htmlSelectRegiones = "<option value=0 selected>Ingresa tu región</option>";
                while($row = mysqli_fetch_array($query_select)){
                    $htmlSelectRegiones .='
                        <option value="'.$row['id_region'].'">'.$row['nombre_region'].'</option>
                    '; 
                }
                echo $htmlSelectRegiones; 
            }else{
                echo "notData";
            }
            exit; 
                 
        }

        if($_POST["action"] == "listarComunas"){

            $id_region = $_POST["id_region"];

            $query_select = mysqli_query($conexion,"select * from comunas
            WHERE id_region = " . $id_region);

            $num_rows = mysqli_num_rows($query_select);
            if($num_rows > 0){
                $htmlSelectComunas = "<option value=0 selected>Ingresa tu comuna</option>";
                while($row = mysqli_fetch_array($query_select)){
                    $htmlSelectComunas .='
                        <option value="'.$row['id_comuna'].'">'.$row['nombre_comuna'].'</option>
                    '; 
                }
                echo $htmlSelectComunas; 
            }else{
                echo "notData";
            }
            exit;        
        }

        if($_POST["action"] == "registrarUsuario"){

            $cliente_o_conductor = $_POST["cliente_o_conductor"];
            $nombre_usuario = $_POST["nombre_usuario"];
            $apellido_usuario = $_POST["apellido_usuario"];
            $fecha_nacimiento_usuario = $_POST["fecha_nacimiento_usuario"];
            $cedula_usuario = $_POST["cedula_usuario"];
            $contrasena_usuario = $_POST["contrasena_usuario"];
            $correo_usuario = $_POST["correo_usuario"];
            $region_usuario = $_POST["region_usuario"];
            $comuna_usuario = $_POST["comuna_usuario"];


            $query_select = mysqli_query($conexion,"INSERT INTO usuarios (id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, fecha_nacimiento_usuario, cedula_usuario, contrasenia_usuario, id_region, id_comuna) VALUES ('$cliente_o_conductor','$nombre_usuario','$apellido_usuario','$correo_usuario','$fecha_nacimiento_usuario','$cedula_usuario','$contrasena_usuario','$region_usuario','$comuna_usuario')");

            if($query_select != 1){
                    echo "notData";
            }
            
            exit; 
            
        }