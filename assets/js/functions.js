$(document).ready(()=>{
    if($("#myModal").length){
        cargarListaRegiones();
    }
})

$("#registrar_conductor").click(()=>{
    $("#formulario_crear_conductor").submit((event)=>{
        event.preventDefault()
    })
    console.log("click")

            const nombre_usuario = $("#nombre_usuario").val();
            const apellido_usuario = $("#apellido_usuario").val();
            const correo_usuario = $("#correo_usuario").val();
            const fecha_nacimiento_usuario = $("#fecha_nacimiento_usuario").val();
            const cedula_usuario = $("#cedula_usuario").val();
            const contrasena_usuario = $("#contrasena_usuario").val();
            const region_usuario = $("#region_usuario").val();
            const comuna_usuario = $("#comuna_usuario").val();
            console.log(region_usuario)

            $.ajax({
                url  : "php/registro_conductor_be.php",
                type : "POST",
                async: true,
                data :{
                    nombre_usuario:nombre_usuario, 
                    apellido_usuario:apellido_usuario, 
                    correo_usuario:correo_usuario,
                    fecha_nacimiento_usuario:fecha_nacimiento_usuario,
                    cedula_usuario:cedula_usuario,
                    contrasena_usuario:contrasena_usuario,
                    region_usuario:region_usuario,
                    comuna_usuario:comuna_usuario
                },
                beforeSend: function(){

                },
                success   : function(response){

                    
                    
                },
                error     : function(error){
                    console.log(error);
                }
            });
})

$("#region_usuario").change(()=>{
    const id_region = $("#region_usuario").val()
    
const cargarListaComunas = id_region
    const action = "listarComunas";
    const data = "";

    $.ajax({
        url  :"php/ajaxData.php",
        type : "Post",
        async: true,
        data :{
            action:action,
            id_region:id_region
        },
        beforeSend:function(){

        },
        success:function(response){
            if(response == "notData"){
                data = "No hay datos para mostrar.";
            }else{
                var data = JSON.parse(response);
            }
            $("#comuna_usuario").prop("disabled","")
            $("#comuna_usuario").html(data);
            
        },
        error: function(error){

        }
    });
    
})

function cargarListaRegiones(){
    const action = "listarRegiones";
    const data = "";

    $.ajax({
        url  :"php/ajaxData.php",
        type : "Post",
        async: true,
        data :{
            action:action
        },
        beforeSend:function(){

        },
        success:function(response){
            if(response == "notData"){
                data = "No hay datos para mostrar.";
            }else{
                var data = JSON.parse(response);
            }
            $("#region_usuario").html(data);
        },
        error: function(error){

        }
    });
}
