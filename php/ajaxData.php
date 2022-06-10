<?php

        include 'conexion_be.php';

        if($_POST["action"] == "listarRegiones"){
            $query_select = mysqli_query($conexion,"SELECT * FROM regiones");
            $num_rows = mysqli_num_rows($query_select);
            if($num_rows > 0){
                $htmlTable = "<option value=0 selected>Ingresa tu región</option>";
                while($row = mysqli_fetch_assoc($query_select)){
                    $htmlTable .='
                        <option value="'.$row['id_region'].'">'.$row['nombre_region'].'</option>
                    '; 
                }
                echo json_encode($htmlTable,JSON_UNESCAPED_UNICODE);
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
                $htmlTable = "<option value='0' selected>Ingresa tu comuna</option>";
                while($row = mysqli_fetch_assoc($query_select)){
                    $htmlTable .='
                        <option value="'.$row['id_comuna'].'">'.$row['nombre_comuna'].'</option>
                    '; 
                }
                echo json_encode($htmlTable,JSON_UNESCAPED_UNICODE);
            }else{
                echo "notData";
            }
            exit;        
        }